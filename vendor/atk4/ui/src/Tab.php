<?php

// vim:ts=4:sw=4:et:fdm=marker:fdl=0

namespace atk4\ui;

/**
 * One Tab of Tabs widget.
 */
class Tab extends Item
{
    /** @var string */
    public $path = null;

    /**
     * Sets path for tab.
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        if (!is_string($path)) {
            $path = $this->app->url($path);
        }
        $this->path = $path.'#';

        return $this;
    }

    /**
     * Rendering one tab view.
     */
    public function renderView()
    {
        if ($this->path) {
            $this->js(true)->tab(
                ['cache' => false, 'auto' => true, 'path' => $this->path]
            );
        } else {
            $this->js(true)->tab();
        }

        parent::renderView();
    }
}
