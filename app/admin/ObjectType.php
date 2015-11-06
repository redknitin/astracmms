<?php

Admin::model(App\ObjectType::class)->title('Object Type')->with()->filters(function ()
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