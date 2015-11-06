<?php

Admin::model(App\JobType::class)->title('Job Type')->with()->filters(function ()
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