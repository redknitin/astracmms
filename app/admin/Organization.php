<?php

Admin::model(App\Organization::class)->title('Organization')->with()->filters(function ()
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