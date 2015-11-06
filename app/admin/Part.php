<?php

Admin::model(App\Part::class)->title('Part')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('description', 'Description');
	Column::string('classification.name', 'Classification');
	Column::string('category.name', 'Category');
	Column::string('organization.name', 'Organization');
	Column::string('uom.name', 'Uom');
})->form(function ()
{
	FormItem::text('name', 'Name');
	FormItem::text('description', 'Description');
	FormItem::select('classification_id', 'Classification')->list(\App\Classification::class);
	FormItem::select('category_id', 'Category')->list(\App\Category::class); //TODO: Validate that category belongs to the selected class
	FormItem::select('organization_id', 'Organization')->list(\App\Organization::class);
	FormItem::select('uom_id', 'Unit of Measure')->list(\App\Uom::class);
});