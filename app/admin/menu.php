<?php

/*
 * Describe your menu here.
 *
 * There is some simple examples what you can use:
 *
 * 		Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard')->uses('\AdminController@getIndex');
 * 		Admin::menu(User::class)->icon('fa-user');
 * 		Admin::menu()->label('Menu with subitems')->icon('fa-book')->items(function ()
 * 		{
 * 			Admin::menu(\Foo\Bar::class)->icon('fa-sitemap');
 * 			Admin::menu('\Foo\Baz')->label('Overwrite model title');
 * 			Admin::menu()->url('my-page')->label('My custom page')->uses('\MyController@getMyPage');
 * 		});
 */

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard')->uses('\SleepingOwl\Admin\Controllers\DummyController@getIndex');

Admin::menu(\App\Classification::class)->label('Classification');
Admin::menu(\App\Category::class)->label('Category');
Admin::menu(\App\Uom::class)->label('Unit of Measure');
Admin::menu(\App\Organization::class)->label('Organization');
Admin::menu(\App\Part::class)->label('Part');
Admin::menu(\App\Trade::class)->label('Trade');
Admin::menu(\App\JobType::class);
Admin::menu(\App\ObjectType::class);
Admin::menu(\App\Status::class);
Admin::menu(\App\Object::class);
Admin::menu(\App\WorkOrder::class);

