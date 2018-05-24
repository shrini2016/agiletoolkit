<?php

// vim:ts=4:sw=4:et:fdm=marker:fdl=0

namespace atk4\ui;

/**
 * Implements a more sophisticated and interractive Data-Table component.
 */
class CRUD extends Grid
{
    /** @var array of fields to show */
    public $fieldsDefault = null;

    /** @var array of fields to show in grid */
    public $fieldsRead = null;

    /** @var array of fields to show on form when adding new record */
    public $fieldsCreate = null;

    /** @var array of fields to show on form when editing a record */
    public $fieldsUpdate = null;

    /** @var array|Form Seed for form that is used by default * */
    public $formDefault = ['Form', 'layout' => 'FormLayout/Columns'];

    /** @var array|Form Seed for form that is used when adding * */
    public $formCreate = null;

    /** @var array|Form Seed for form that is used when editing * */
    public $formUpdate = null;

    /** @var array|View Seed for VirtualPage to use in modal * */
    public $pageDefault = ['VirtualPage'];

    /** @var array|View Seed for virtual page when adding * */
    public $pageCreate = null;

    /** @var array|View Seed for virtual page when editing * */
    public $pageUpdate = null;

    /** @var Item Will be set to menu item for new record add action * */
    public $itemCreate = null;

    /** @var array Default action to perform when adding or editing is successful * */
    public $notifyDefault = ['jsNotify', 'content' => 'Data is saved!', 'color'   => 'green'];

    /** @var array Action to perform when adding is successful * */
    public $notifyCreate = null;

    /** @var array Action to perform when editing is successful * */
    public $notifyUpdate = null;

    /**
     * Permitted operations. You can add more of your own.
     *
     * @var bool if 'true' user can create records
     */
    public $canCreate = true;

    /** @var bool If 'true' then user can update records * */
    public $canUpdate = true;

    /** @var bool If 'true' user can delete records * */
    public $canDelete = true;

    public function init()
    {
        parent::init();

        $this->on('reload', $this->jsReload());

        if ($this->canUpdate) {
            $this->pageUpdate = $this->add($this->pageUpdate ?: $this->pageDefault, ['short_name'=>'edit']);
        }

        if ($this->canCreate) {
            $this->pageCreate = $this->add($this->pageCreate ?: $this->pageDefault, ['short_name'=>'add']);
        }
    }

    /**
     * @obsolete
     */
    public function can($operation)
    {
        throw new Exception('Please simply check $crud->canCreate or similar property directly');
    }

    /**
     * Sets data model of CRUD.
     *
     * @param \atk4\data\Model $m
     * @param array            $defaultFields
     *
     * @return \atk4\data\Model
     */
    public function setModel(\atk4\data\Model $m, $defaultFields = null)
    {
        if ($defaultFields !== null) {
            $this->fieldsDefault = $defaultFields;
        }

        parent::setModel($m, $this->fieldsRead ?: $this->fieldsDefault);
        $this->model->unload();

        if ($this->canCreate) {
            $this->initCreate();
        }

        if ($this->canUpdate) {
            $this->initUpdate();
        }

        if ($this->canDelete) {
            $this->initDelete();
        }

        return $this->model;
    }

    /**
     * Initializes interface elements for new record creation.
     *
     * @return array|jsExpression
     */
    public function initCreate()
    {
        // setting itemCreate manually is possible.
        if (!$this->itemCreate) {
            $this->itemCreate = $this->menu->addItem(
                $this->itemCreate ?: ['Add new', 'icon' => 'plus'],
                new jsModal('Add new', $this->pageCreate)
            );
            $this->itemCreate->set('Add New '.(isset($this->model->title) ? $this->model->title : preg_replace('|.*\\\|', '', get_class($this->model))));
        }

        // setting callback for the page
        $this->pageCreate->set(function () {

            // formCreate may already be an object added inside pageCreate
            if (!is_object($this->formCreate) || !$this->formCreate->_initialized) {
                $this->formCreate = $this->pageCreate->add($this->formCreate ?: $this->formDefault);
            }

            // $form = $page->add($this->formCreate ?: ['Form', 'layout' => 'FormLayout/Columns']);
            $this->formCreate->setModel($this->model, $this->fieldsCreate ?: $this->fieldsDefault);

            // set save handler with reload trigger
            $this->formCreate->onSubmit(function ($form) {
                $form->model->save();

                return $this->jsSaveCreate();
            });
        });
    }

    /**
     * Method to override to create a custom JavaScript action to execute
     * when submitting create form.
     *
     * @return array|jsExpression
     */
    public function jsSaveCreate()
    {
        return [
            // reload Grid
            (new jQuery($this))->trigger('reload'),

            // close modal
            new jsExpression('$(".atk-dialog-content").trigger("close")'),

            // display notification
            $this->factory($this->notifyCreate ?: $this->notifyDefault),
        ];
    }

    /**
     * Initializes interface elements for editing records.
     *
     * @return array|jsExpression
     */
    public function initUpdate()
    {
        $this->addAction(['icon' => 'edit'], new jsModal('Edit', $this->pageUpdate, [$this->name => $this->jsRow()->data('id')]));

        $this->pageUpdate->set(function () {
            $this->model->load($this->app->stickyGet($this->name));

            // Maybe developer has already created form
            if (!is_object($this->formUpdate) || $this->formUpdate->_initialied) {
                $this->formUpdate = $this->pageUpdate->add($this->formUpdate ?: $this->formDefault);
            }

            $this->formUpdate->setModel($this->model, $this->fieldsUpdate ?: $this->fieldsDefault);
            $this->formUpdate->onSubmit(function ($form) {
                $form->model->save();

                return $this->jsSaveUpdate();
            });
        });
    }

    /**
     * Method to override to create a custom JavaScript action to execute
     * when submitting update form.
     *
     * @return array|jsExpression
     */
    public function jsSaveUpdate()
    {
        return [
            // reload Grid
            (new jQuery($this))->trigger('reload'),

            // close modal
            new jsExpression('$(".atk-dialog-content").trigger("close")'),

            // display notification
            $this->factory($this->notifyUpdate ?: $this->notifyDefault),
        ];
    }

    /**
     * Initialize UI for deleting records.
     */
    public function initDelete()
    {
        $this->addAction(['icon' => 'red trash'], function ($jschain, $id) {
            $this->model->load($id)->delete();

            return $jschain->closest('tr')->transition('fade left');
        }, 'Are you sure?');
    }
}
