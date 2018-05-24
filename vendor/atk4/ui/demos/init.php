<?php

date_default_timezone_set('UTC');

require '../vendor/autoload.php';

if (file_exists('coverage.php')) {
    include 'coverage.php';
}

$app = new \atk4\ui\App();

$app->title = 'Agile UI Demo v'.$app->version;

if (file_exists('../public/atkjs-ui.min.js')) {
    $app->cdn['atk'] = '../public';
}

$app->initLayout($app->stickyGET('layout') ?: 'Admin');

$layout = $app->layout;

if (isset($layout->leftMenu)) {
    $layout->leftMenu->addItem(['Welcome Page', 'icon' => 'gift'], ['index']);
    $layout->leftMenu->addItem(['Layouts', 'icon' => 'object group'], ['layouts']);

    $form = $layout->leftMenu->addGroup(['Form', 'icon' => 'edit']);
    $form->addItem('Basics and Layouting', ['form']);
    $form->addItem('Input Field Decoration', ['field']);
    $form->addItem(['File Uploading', 'icon'=>'yellow star'], ['upload']);
    $form->addItem(['Checkboxes', 'icon'=>'yellow star'], ['checkbox']);
    $form->addItem('Data Integration', ['form2']);
    $form->addItem('Form Multi-column layout', ['form3']);
    $form->addItem(['Integration with Columns', 'icon'=>'yellow star'], ['form5']);
    $form->addItem(['AutoComplete Field', 'icon'=>'yellow star'], ['autocomplete']);
    $form->addItem(['Value Selectors', 'icon'=>'yellow star'], ['form6']);

    $form = $layout->leftMenu->addGroup(['Grid and Table', 'icon' => 'table']);
    $form->addItem('Data table with formatted columns', ['table']);
    $form->addItem('Table interractions', ['multitable']);
    $form->addItem('Grid - Table+Bar+Search+Paginator', ['grid']);
    //$form->addItem('Interactivity - Modals and Expanders', ['expander']);
    $form->addItem('CRUD - Full editing solution', ['crud']);

    $basic = $layout->leftMenu->addGroup(['Basics', 'icon' => 'cubes']);
    $basic->addItem('View', ['view']);
    $basic->addItem('Lister', ['lister']);
    $basic->addItem('Button', ['button']);
    $basic->addItem('Header', ['header']);
    $basic->addItem('Message', ['message']);
    $basic->addItem('Labels', ['label']);
    $basic->addItem('Menu', ['menu']);
    $basic->addItem('BreadCrumb', ['breadcrumb']);
    $basic->addItem('Tabs', ['tabs']);
    $basic->addItem(['Columns', 'icon'=>'yellow star'], ['columns']);
    $basic->addItem('Paginator', ['paginator']);

    $basic = $layout->leftMenu->addGroup(['Interactivity', 'icon' => 'talk']);
    $basic->addItem(['Wizard', 'icon'=>'yellow star'], ['wizard']);
    $basic->addItem('JavaScript Events', ['js']);
    $basic->addItem('Element Reloading', ['reloading']);
    $basic->addItem(['Background PHP Jobs (SSE)', 'icon'=>'yellow star'], ['sse']);
    $basic->addItem(['Progress Bar', 'icon'=>'yellow star'], ['progress']);
    $basic->addItem(['Loader', 'icon'=>'yellow star'], ['loader']);
    $basic->addItem(['Console', 'icon'=>'yellow star'], ['console']);
    $basic->addItem('Notifier', ['notify']);
    $basic->addItem(['Modal View', 'icon'=>'yellow star'], ['modal2']);
    $basic->addItem('Dynamic jsModal', ['modal']);
    $basic->addItem('Sticky GET', ['sticky']);
    $basic->addItem('Recursive Views', ['recursive']);
    //$basic->addItem('Virtual Page', ['virtual']);

    $f = basename($_SERVER['PHP_SELF']);

    //$url = 'https://github.com/atk4/ui/blob/feature/grid-part2/demos/';
    $url = 'https://github.com/atk4/ui/blob/develop/demos/';

    // Would be nice if this would be a link.
    $layout->menu->addItem()->add(['Button', 'View Source', 'teal', 'icon' => 'github'])
        ->setAttr('target', '_blank')->on('click', new \atk4\ui\jsExpression('document.location=[];', [$url.$f]));

    $img = 'https://raw.githubusercontent.com/atk4/ui/07208a0af84109f0d6e3553e242720d8aeedb784/public/logo.png';
}

require_once 'somedatadef.php';
