<?php

Admin::model(App\Classification::class)->title('Classification')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('description', 'Description');
})->form(function ()
{
	FormItem::text('name', 'Name');
	FormItem::text('description', 'Description');
});