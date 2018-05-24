## 1.4

In this version we focus on high-level components: Wizard, Console, ProgressBar, AutoComplete field, Lister, Radio field
and necessary modifications to implement Login add-on.

For detailed explanation read this article: https://medium.com/@romaninsh/atk-newsletter-1-ui-1-4-released-cb7b84fc12c8.

**Implemented enhancements:**

- Modal::show\(\) arguments. [\#255](https://github.com/atk4/ui/issues/255)
- Implement session memorize [\#116](https://github.com/atk4/ui/issues/116)
- Feature/implement wizard [\#305](https://github.com/atk4/ui/pull/305) ([romaninsh](https://github.com/romaninsh))

**Fixed bugs:**

- Adding child and re-rendering has no effect [\#296](https://github.com/atk4/ui/issues/296)
- CRUD edit form is broken [\#295](https://github.com/atk4/ui/issues/295)
- form2 demo page is bad [\#290](https://github.com/atk4/ui/issues/290)
- Feature/fix 295 [\#297](https://github.com/atk4/ui/pull/297) ([romaninsh](https://github.com/romaninsh))
- Fix implementation of Radio field [\#292](https://github.com/atk4/ui/pull/292) ([romaninsh](https://github.com/romaninsh))

**Closed issues:**

- Label-\>link\(\) unneccessary [\#330](https://github.com/atk4/ui/issues/330)
- AutoComplete does not work if model id\_field != 'id' or title\_field' != name [\#327](https://github.com/atk4/ui/issues/327)
- Can not move Modal window by dragging of its title bar [\#323](https://github.com/atk4/ui/issues/323)
- Form error reloads in new popup window [\#318](https://github.com/atk4/ui/issues/318)
- Form does not handle integer fields set to 0 correctly [\#317](https://github.com/atk4/ui/issues/317)
- Paginator with self-reloading option is broken after change to CallbackLater [\#313](https://github.com/atk4/ui/issues/313)
- Implement Upload Field for form [\#304](https://github.com/atk4/ui/issues/304)
- even though $console-\>send\(\) is documented, it's not implemented. [\#302](https://github.com/atk4/ui/issues/302)
- CRUD values from model don't propagate to boolean and dropdown values [\#288](https://github.com/atk4/ui/issues/288)
- AutoComplete ignores model conditions until input is done [\#282](https://github.com/atk4/ui/issues/282)
- when URL omits `index.php` URL detection is working incorrectly. [\#279](https://github.com/atk4/ui/issues/279)
- Create example with header/footer row in table [\#276](https://github.com/atk4/ui/issues/276)
- \[Epic\] - Console [\#275](https://github.com/atk4/ui/issues/275)
- \[Epic\] - progress bar [\#274](https://github.com/atk4/ui/issues/274)
- \[Epic\] Wizard [\#273](https://github.com/atk4/ui/issues/273)
- Console and Progress-bar [\#160](https://github.com/atk4/ui/issues/160)
- TableColumn\Template not supporting HTML [\#135](https://github.com/atk4/ui/issues/135)
- Minor Improvements to jsReload [\#75](https://github.com/atk4/ui/issues/75)
- add lister documentation [\#27](https://github.com/atk4/ui/issues/27)
- integrate selenium testsuite [\#9](https://github.com/atk4/ui/issues/9)

**Merged pull requests:**

- fix jsCallback catch on Validation Exception [\#347](https://github.com/atk4/ui/pull/347) ([ibelar](https://github.com/ibelar))
- Doc/upload field [\#346](https://github.com/atk4/ui/pull/346) ([ibelar](https://github.com/ibelar))
- Feature/api redirect [\#345](https://github.com/atk4/ui/pull/345) ([romaninsh](https://github.com/romaninsh))
- Updating readme for 1.4 [\#344](https://github.com/atk4/ui/pull/344) ([romaninsh](https://github.com/romaninsh))
- fix tab callback [\#343](https://github.com/atk4/ui/pull/343) ([romaninsh](https://github.com/romaninsh))
- Add View::jsReload\(\) [\#341](https://github.com/atk4/ui/pull/341) ([romaninsh](https://github.com/romaninsh))
- it's better to call getter method not access property directly [\#340](https://github.com/atk4/ui/pull/340) ([DarkSide666](https://github.com/DarkSide666))
- implement progress bar [\#337](https://github.com/atk4/ui/pull/337) ([romaninsh](https://github.com/romaninsh))
- feature/Autocomplete-with-dropdown-settings [\#335](https://github.com/atk4/ui/pull/335) ([ibelar](https://github.com/ibelar))
- feature/Modal observes changes [\#334](https://github.com/atk4/ui/pull/334) ([ibelar](https://github.com/ibelar))
- Implement $view-\>url\(\) functionality as per \#307 [\#333](https://github.com/atk4/ui/pull/333) ([romaninsh](https://github.com/romaninsh))
- fix \#330 [\#332](https://github.com/atk4/ui/pull/332) ([DarkSide666](https://github.com/DarkSide666))
- feature/Error-Modal-Rev\(fix\#318\) [\#331](https://github.com/atk4/ui/pull/331) ([ibelar](https://github.com/ibelar))
- fix \#327: title\_field and id\_field [\#328](https://github.com/atk4/ui/pull/328) ([PhilippGrashoff](https://github.com/PhilippGrashoff))
- fix/\#318 Form error [\#326](https://github.com/atk4/ui/pull/326) ([ibelar](https://github.com/ibelar))
- Feature/js package [\#320](https://github.com/atk4/ui/pull/320) ([ibelar](https://github.com/ibelar))
- fix 317 [\#319](https://github.com/atk4/ui/pull/319) ([DarkSide666](https://github.com/DarkSide666))
- resolve \#313 [\#314](https://github.com/atk4/ui/pull/314) ([romaninsh](https://github.com/romaninsh))
- Fix Hidden type field label display [\#311](https://github.com/atk4/ui/pull/311) ([ibelar](https://github.com/ibelar))
- Feature/upload field [\#306](https://github.com/atk4/ui/pull/306) ([ibelar](https://github.com/ibelar))
- Feature/fix 302 [\#303](https://github.com/atk4/ui/pull/303) ([romaninsh](https://github.com/romaninsh))
- Inserted a link to calendar github page in comment [\#300](https://github.com/atk4/ui/pull/300) ([PhilippGrashoff](https://github.com/PhilippGrashoff))
- Removed empty first line [\#299](https://github.com/atk4/ui/pull/299) ([PhilippGrashoff](https://github.com/PhilippGrashoff))
- Added implementation of Lister [\#298](https://github.com/atk4/ui/pull/298) ([romaninsh](https://github.com/romaninsh))
- Move cloneRegion into lister's init [\#294](https://github.com/atk4/ui/pull/294) ([romaninsh](https://github.com/romaninsh))
- Feature/refactor region population [\#293](https://github.com/atk4/ui/pull/293) ([romaninsh](https://github.com/romaninsh))
- Enhancements of our Form [\#291](https://github.com/atk4/ui/pull/291) ([romaninsh](https://github.com/romaninsh))
- Corrected mistyped "Exception" \(was "Exceptino"\) [\#287](https://github.com/atk4/ui/pull/287) ([PhilippGrashoff](https://github.com/PhilippGrashoff))
- Fix/\#282-Autocomplete [\#285](https://github.com/atk4/ui/pull/285) ([ibelar](https://github.com/ibelar))
- Implementing Console [\#280](https://github.com/atk4/ui/pull/280) ([romaninsh](https://github.com/romaninsh))
- Improvements for Tables, CRUDS and few other areas. [\#277](https://github.com/atk4/ui/pull/277) ([romaninsh](https://github.com/romaninsh))

### 1.4.1

Added `$app->dbConnect()` as a simpler way to connect to the database. Some improvements in JS libraries.

**Merged pull requests:**

- Feature/add dbconnect [\#353](https://github.com/atk4/ui/pull/353) ([romaninsh](https://github.com/romaninsh))
- Feature/js package 1.0.1 [\#350](https://github.com/atk4/ui/pull/350) ([ibelar](https://github.com/ibelar))
- Fix/demo typo [\#348](https://github.com/atk4/ui/pull/348) ([ibelar](https://github.com/ibelar))

### 1.4.2

**Closed issues:**

- Add one more argument to jsModal\(\) an Modal\(\) for JS callback [\#364](https://github.com/atk4/ui/issues/364)

**Merged pull requests:**

- relpace QuickSearch with a JS by default [\#375](https://github.com/atk4/ui/pull/375) ([romaninsh](https://github.com/romaninsh))
- Cleaned up button demo [\#374](https://github.com/atk4/ui/pull/374) ([romaninsh](https://github.com/romaninsh))
- Feature/jsSearch-update [\#371](https://github.com/atk4/ui/pull/371) ([ibelar](https://github.com/ibelar))
- Fix/\#364 \#270 [\#368](https://github.com/atk4/ui/pull/368) ([ibelar](https://github.com/ibelar))
- Small cleanups [\#361](https://github.com/atk4/ui/pull/361) ([gartner](https://github.com/gartner))
- Fix/\#356 Upload Field Set [\#360](https://github.com/atk4/ui/pull/360) ([ibelar](https://github.com/ibelar))
- Fixed typo [\#359](https://github.com/atk4/ui/pull/359) ([PhilippGrashoff](https://github.com/PhilippGrashoff))

## 1.4.3


**Closed issues:**

- Bug in Table-\>setModel, should always return model object [\#390](https://github.com/atk4/ui/issues/390)
- Grid/Table can not handle $g-\>addColumn\(null, ..., null\) [\#388](https://github.com/atk4/ui/issues/388)
- Fix "method\_complexity" issue in src/FormLayout/Generic.php [\#383](https://github.com/atk4/ui/issues/383)
- masterCrud - add element , hit enter, no UI feedback but adds multiple items [\#379](https://github.com/atk4/ui/issues/379)
- Field hints  [\#377](https://github.com/atk4/ui/issues/377)
- app method url\(\) should have an argument indicating a regular or ajax url [\#369](https://github.com/atk4/ui/issues/369)
- Console don't show log records [\#367](https://github.com/atk4/ui/issues/367)
- CRUD does not work when placed inside Dynamic Tab [\#363](https://github.com/atk4/ui/issues/363)

**Merged pull requests:**

- fix \#390 and fix \#388 [\#391](https://github.com/atk4/ui/pull/391) ([DarkSide666](https://github.com/DarkSide666))
- includeJS -\> requireJS / includeCSS -\> requireCSS [\#386](https://github.com/atk4/ui/pull/386) ([gartner](https://github.com/gartner))
- Feature/jsUrl Rev [\#382](https://github.com/atk4/ui/pull/382) ([ibelar](https://github.com/ibelar))
- Update semantic UI to 2.3.0 and jQuery to 3.3.1 [\#381](https://github.com/atk4/ui/pull/381) ([romaninsh](https://github.com/romaninsh))
- Fix/\#379 [\#380](https://github.com/atk4/ui/pull/380) ([ibelar](https://github.com/ibelar))
- Feature/add form label support [\#378](https://github.com/atk4/ui/pull/378) ([romaninsh](https://github.com/romaninsh))
- Feature/various fixes [\#354](https://github.com/atk4/ui/pull/354) ([romaninsh](https://github.com/romaninsh))

## 1.4.4 

**Closed issues:**

- jsReload to allow a callback [\#387](https://github.com/atk4/ui/issues/387)

**Merged pull requests:**

- fix/\#387-Allow a js function to run after reload is complete. [\#395](https://github.com/atk4/ui/pull/395) ([ibelar](https://github.com/ibelar))
- Improvements to console, new demo and more documentation [\#394](https://github.com/atk4/ui/pull/394) ([romaninsh](https://github.com/romaninsh))

## 1.3

This version is focused on dynamic interaction between the browser and your PHP apps. It contains 3
new Components and 3 new Actions and a new Form Field Decorator.

Loader (#246, #250) is a component that calls itself back to load its content. While the content is being generated,
your user will see a spinner animation:

``` php
$loader = $app->add('Loader');

$loader->set(function($p) {
    sleep(2);  // or any other slow-loading code.
    $p->add('LoremIpsum');
});
```

There are also ways to trigger and reload the contents as well as passing some arguments in. We include 2
demos for the loader: [basic loader demo](http://ui.agiletoolkit.org/demos/loader.php) and
[practical use example](http://ui.agiletoolkit.org/demos/loader2.php). For additional information,
look into [Loader Documentation](http://agile-ui.readthedocs.io/en/latest/virtualpage.html?highlight=loader#loader)

Next we thought - why not also load content [dynamically inside a Modal dialog](http://ui.agiletoolkit.org/demos/modal2.php), so we added this:

``` php
$modal = $app->add(['Modal', 'title' => 'Lorem Ipsum load dynamically']);

$modal->set(function ($p) {
    sleep(2);  // or any other slow-loading code.
    $p->add('LoremIpsum');
});
```

Code is very consistent with the Loader or dynamic definition of
[Tabs](http://agile-ui.readthedocs.io/en/latest/tabs.html?highlight=tabs#dynamic-tabs)
but would open in a modal window. However we wanted to go even further.

What if it would take several seconds for content to load? We used Server-Sent-Events
for streaming updates from your PHP code in real-time (#258 #259). Yet it's just as simple
to use as anything else in Agile UI:

``` php
// see SSE demo for $bar implementation

$button->on('click', $sse->set(function () use ($sse, $bar) {

    sleep(0.5);
    $sse->send($bar->js()->progress(['percent' => 40]));
    sleep(2);
    $sse->send($bar->js()->progress(['percent' => 80]));
    sleep(1);
    return $bar->js()->progress(['percent' => 100]);
}));
```

In the next release we will include 'ProgressBar' and 'Console' classes that rely
on event streaming.

Other additions include:

 - [AutoComplete field](http://ui.agiletoolkit.org/demos/autocomplete.php) for dynamically loading contents of a drop-down. #245
 - [Notifyer](http://ui.agiletoolkit.org/demos/notify.php) for flashing success or error messages on top of the screen dynamically. #242
 - [jsModal](http://ui.agiletoolkit.org/demos/modal2.php) Action for opening Modal windows

We also added AutoComplete "Plus" mode. It's a button next to your AutoComplete field which you can click to add new element
inside a referenced entity which will then be automatically filled-in. Super-useful!

Lastly - a lot of new documentation and minor fixes. #240 #244 #248 #256 #257

Our Test-suite now includes broser testing. #262 #263

### 1.3.1

Fixed bug in dependencies, which was requesting behat/mink-zombie-driver as a dependency.

### 1.3.2

Fixed issues related to PHP 7.2

 - Template.php uses depreciated each(). #278
 - using url() on index.php not working. #279
 - make url() more flexible (for 3rd party integrations), #271


## 1.2

This release includes change to view constructor arguments, huge JavaScript overhaul and clean-up,
refactored jsModal implementation, refactor of Table::addColumn() and Table::addField(), integration
with Wordpress and a lot of new documentation.

This release was possible thanks to our new contributors:
 - [ibelar](https://github.com/ibelar)
 - [TheGrammerNazi](https://github.com/TheGrammerNazi)
 - [Darkside666](https://github.com/Darkside666)

### Major Changes
 - Refactored View arguments. `$button = new Button($label, $class)` instead of using arrays. Backwards compatible.
 - Migrated to [Agile Core 1.3](https://github.com/atk4/core/releases/tag/1.3.0) and [Agile Data 1.2.1](https://github.com/atk4/data/releases/tag/1.2.1)
 - Added support for Tabs 
 - Added notify.js #205
 - Add Callback::triggered() method.  #226
 - Refactored JS Plugin System. ATK now implements: #189, #201, #193, #202
   - spinner (link to doc needed)
   - reloadView (link to doc needed)
   - ajaxec (link to doc needed)
   - createModal (link to doc needed)
 - Refactored addField() and addColumn() #179 #187 #223 #225

### Other changes 
 - Documentation improvements:
   - Callbacks and Virtual pages #200 (http://agile-ui.readthedocs.io/en/latest/core.html#callbacks-and-virtual-pages)
   - README file #196
   - Add documentation for icon, image, label, loremipsum, message, tablecolumn, text, decorators. #218
 - Fixed problem with CheckBox on a form #130
 - Fixed form submission with Enter #173
 - Improved form validation #191
 - Fix label display when it's 0 #198
 - Cleanups #207 #218
 - Switched to codecov.io for a more serious coverage reports (will focus on improving those)

### Minor releases (in reverse order)

#### 1.2.1

 - fixed warning in PHP 5.6.x for `function(string $name)`.

#### 1.2.2

Bugfixes #231 #232 #230 #229 #235

 - Virtual Page cannot have multiple callbacks
 - Grid::addDecorator added to proxy Table::addDecorator
 - Field type "boolean" now properly shown on grid/crud (thanks @slava-vishnyakov)
 - Virtual Page trigger allows [$obj, 'methd'] callables now
 - Added more tests

#### 1.2.3

Bugfixes #234, #238, #239

 - Reloader now properly shows error in a popup, if exception occurs.

## 1.1

A massive release containing unimaginable amount of new features, fixes and actually the first version
of Agile Data that allows you to actually build nice apps with it.

### Major Features
- Added CRUD component to add, edit, delete and add records to your data sets #105, 
- Added Advanced Grid now supporting checkbox column, actions, multiple formatters, anonymous columns, and delete
- .. also Renamed old Grid into Table, #118 #84 #83 #93 #95 #64
- Added QuickSearch #107 
- Added Paginator
- Added Form Model, Validation support
- Added Form Fields: TextArea, DropDown
- Added Automated multi-column layout FormLayout\Columns
- Added support for stickyGet #131
- Added jsModal() for dialogs #124 #71
- Added jsReload() with argument support and spinner #51 #66 #78 #79 
- Added Message #100
- Added Label #88
- Added Columns #65
- Added JS Library #73
- Form can edit all field types of from Agile Data
- Renamed Grid into Table

### New Demo Pages
- Layouts #123 #113
- Form / Multi-column layout
- Grid / Table Interactions
- Grid / Table+Bar+Search+Paginator
- Grid / Interactivity - Modals
- Crud
- View demo #104
- Message
- Labels
- Menu #96 #97 
- Paginator
- Interactivity / Element Reloading
- Interactivity / Modal Dialogs
- Interactivity / Sticky GET
- Interactivity / Recursive Views

### Fixes
- Bugfixes #111, #86, #85

### Minor changes
- Upgraded to Agile Core 1.2 #129
- Field->jsInput()
- App->requireJS() #120 #50
- Remaned all .jade files into .pug #89
- Renamed namespace Column into TableColumn

Full diff: https://github.com/atk4/ui/compare/1.0.3...1.1.0

### Minor releases (in reverse order)

#### 1.1.1

- Use proper CDN for 3rd party CSS/JS code #150
- Add support for 'password' type #143
- Fix bad error with addColumn() when using non-existant field #134
- Option for Money Table Column to hide zero values #152
- Fix reloading bug #149
- Improve exit; support in callbacks #151
- Other bugfixes #133

#### 1.1.2

- Implemented Grid / Table sorting #163
- CRUD look and feel improvements #156
- Added support for passing arguments into on('', function($arg)) from JS
- Bugfixes #164

#### 1.1.3

- Improve UI layout and add responsivitiy #170
- Documentation restructure, new Overview section, many more screenshots #154
- Added support for multiple formatters in Table. You can use 'addColumn' with existing column. #162
- Added type 'text', improve how 'money', date and time appear on a form. #165
- Improve the way hasOne relations are displayed on the form #165 (dropdowns)
- Fix linking to JS libraries in the CDN
- Bugfixes in Menu
- Renamed `$layout->leftMenu` into `$layout->menuLeft` to follow principle of "Left/Right" always being last word.

#### 1.1.4

- Improve CDN handling. Using `$app->cdn = false` will disable it.

#### 1.1.5 - 1.1.9 (multiple releases)

Probably the last big release before 1.2.x

 - Added new Form Validation implementation #177
 - Table totals can now include min, max and count #178
 - Refactored asset includes (can now be cached locally) #181
 - Footer now indicates version

#### 1.1.10

 - Fix warning in database demos
 - Fix detection of local public files for demos
 - Fix Delete button in crud (couldn't be clicked twice)
 - Enabled App to have dynamic methods
 - Fixed bug in Status column
 - Fixed stickyURL #185
 - Improved compatibility with custom JS renderers (for wordpress integration)
 - Fixed centered layout #186
 - "get-assets.php" now creates 'public' folder, usable in your project

## 1.0 Release

* Implement Grid
* Many improvements everywhere
* Simpler execution
* First stable release

### Minor Releases

#### 1.0.2

* Button::$rightIcon renamed into $iconRight to follow global pattern
* Removed depreciated classes H2, Fields and MiniApp
* Cleaned up demos/button.php
* Added documentation for Button class
* Refactored Button internals (simplified), now uses button.html
* Added comments for a Form
* Cleaned up Grid type-hinting
* Added example for top/bottom attached buttons to Grid.
* You can disable "header" for grid now

#### 1.0.1

Qucik post-release bugfixes

#### 1.0.0

## Pre-Releases

### 0.4

* Implemented Layouts (Admin / Centered) #33
* Created nicer demos

### 0.3

* Implemented js() and on() #20
* Implemented Server-Side JS calls #28
* Implemented Form #29 and #30
* Enhanced documentation

### 0.2

* Implemented Render Tree
* Implemented Template-based Rendering #15
* Implemented Basic View #16
* Implemented Button (based around Semantic UI)
* Implemented JavaScript events
* Advanced JSChains (enclosing, etc) #18
* Implemented Very Basic Layouts

### 0.1

* Initial Release
* Bootstraped Documentation (sphinx-doc)
* Implemented CI
