<?php

Admin::model(App\Object::class)->title('Object')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('description', 'Description');
	Column::string('object_type.name', 'Object Type');
	Column::string('parent_object.name', 'Parent');
	Column::string('classification.name', 'Classification');
	Column::string('category.name', 'Category');
	Column::string('organization.name', 'Organization');
})->form(function ()
{
	FormItem::text('name', 'Name');
	FormItem::text('description', 'Description');
	FormItem::select('object_type_id', 'Object Type')->list(\App\ObjectType::class);
	FormItem::select('classification_id', 'Classification')->list(\App\Classification::class);
	FormItem::select('category_id', 'Category')->list(\App\Category::class); //TODO: Validate that category belongs to the selected class
	FormItem::select('organization_id', 'Organization')->list(\App\Organization::class);
	FormItem::select('object_id', 'Object')->list(\App\Object::class);
});