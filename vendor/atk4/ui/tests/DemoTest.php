<?php

namespace atk4\ui\tests;

/**
 * Making sure demo pages don't throw exceptions and coverage is
 * handled.
 */
class DemoTest extends \atk4\core\PHPUnit_AgileTestCase
{
    public function setUp()
    {
        chdir('demos');
    }

    public function tearDown()
    {
        chdir('..');
    }

    public function inc($f)
    {
        $_SERVER['REQUEST_URI'] = '/ui/'.$f;
        include $f;

        return $app;
    }

    private $regex = '/^..DOCTYPE/';

    /**
     * @dataProvider demoList
     */
    public function testDemo($page)
    {
        $this->expectOutputRegex($this->regex);

        try {
            $this->inc($page)->run();
        } catch (\atk4\core\Exception $e) {
            $e->addMoreInfo('test', $page);

            throw $e;
        }
    }

    public function demoList()
    {
        $copy_paste = trim('
  autocomplete.php
  button.php
  breadcrumb.php
  js.php
  checkbox.php
  columns.php
  console.php
  crud.php
  crud2.php
  field.php
  field2.php
  form.php
  form2.php
  form3.php
  form4.php
  form5.php
  grid.php
  header.php
  index.php
  init.php
  label.php
  layouts.php
  lister.php
  loader.php
  loader2.php
  menu.php
  message.php
  modal.php
  multitable.php
  notify.php
  notify2.php
  paginator.php
  recursive.php
  reloading.php
  sse.php
  sticky.php
  table.php
  tabs.php
  view.php
  virtual.php
  wizard.php
');
        $copy_paste = explode("\n", $copy_paste);
        $copy_paste = array_map(function ($i) {
            return [trim($i)];
        }, $copy_paste);

        return $copy_paste;
    }

    public function testLayout()
    {
        $this->expectOutputRegex($this->regex);
        include 'layouts_manual.php';
    }
}
