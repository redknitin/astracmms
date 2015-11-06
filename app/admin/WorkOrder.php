<?php

Admin::model(App\WorkOrder::class)->title('Work Order')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('description', 'Description');
	Column::string('object.name', 'Object');
	Column::string('job_type.name', 'Job_type');
})->form(function ()
{
	FormItem::text('name', 'Name');
	FormItem::text('description', 'Description');
	FormItem::select('object_id', 'Object')->list(\App\Object::class);
	FormItem::select('job_type_id', 'Job Type')->list(\App\JobType::class);
	// FormItem::select('organization_id', 'Organization')->list(\App\Organization::class);
});