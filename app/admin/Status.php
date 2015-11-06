<?php

Admin::model(App\Status::class)->title('Status Type')->with()->filters(function ()
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