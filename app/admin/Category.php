<?php

Admin::model(App\Category::class)->title('Category')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('description', 'Description');
	Column::string('classification.name', 'Classification');
})->form(function ()
{
	FormItem::text('name', 'Name');
	FormItem::text('description', 'Description');
	FormItem::select('classification_id', 'Classification')->list(\App\Classification::class);
});