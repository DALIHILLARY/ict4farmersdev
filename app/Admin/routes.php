<?php

use Illuminate\Routing\Router;
use App\Http\Controllers\CallCenter\CallCenterController;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/stats', 'HomeController@stats')->name('stats');
    
    $router->get('artisan', 'HomeController@artisan')->name('artisan');
    
    $router->resource('farmers-groups', FarmersGroupController::class);
    $router->resource('gardens', GardenController::class);
    $router->resource('crop-categories', CropCategoryController::class);
    $router->resource('pests', PestController::class);
    $router->resource('pest-cases', PestCaseController::class);
    $router->resource('products-categories', ProductsCategoryController::class);
    $router->resource('gens', GenController::class); 

    $router->resource('farms', FarmController::class);
    $router->resource('financial-records', FinancialRecordController::class);
    $router->resource('garden-production-records', GardenProductionRecordController::class);

    $router->resource('garden-activities', GardenActivityController::class);
    $router->get('calendar', 'GardenActivityController@calendar')->name('calendar');
    $router->get('calender-activity-edit', 'GardenActivityController@calender_activity_edit');

    $router->resource('pests-listing', PestListingController::class);
    $router->resource('pest-cases-listing', PestCaseListingController::class);
    $router->resource('products', ProductController::class);
    $router->resource('my-products', MyProductController::class);
    $router->resource('resources', ResourceSharingController::class);
    $router->resource('questions', QuestionController::class);

    $router->resource('agent-users', AgentUsersController::class);
    $router->resource('my-workers', MyWorkersController::class);
    $router->resource('chats', ChatController::class);
    $router->resource('mobile-app', BannerMobileController::class);
    $router->resource('web-app', BannerWebController::class);
    $router->resource('pricings', PricingController::class);
    $router->resource('markets', MarketController::class);


    // $router->get('/call_center_voice', [CallCenterController::class, 'call_center_voice']);
    $router->resource('call_center_voice', CallCenterAdminController::class);
    $router->resource('call_center_agents', CallCenterAgentsController::class);
     
    $router->resource('simple-tasks', SimpleTaskController::class);
    $router->resource('task-categories', TaskCategoryController::class);
    $router->resource('policies', PolicyController::class);
    $router->resource('organisations', OrganisationController::class);
    $router->resource('system-users', SystemUsersController::class);
    $router->resource('inquiry-messages', InquiryMessagesController::class);

    $router->get('maps', 'MapController@index')->name('maps');
    

/*     $router->get('helpers/terminal/database', 'Encore\Admin\Helpers\Controllers\TerminalController@database');
    $router->post('helpers/terminal/database', 'Encore\Admin\Helpers\Controllers\TerminalController@runDatabase');
    $router->get('helpers/terminal/artisan', 'Encore\Admin\Helpers\Controllers\TerminalController@artisan');
    $router->post('helpers/terminal/artisan', 'Encore\Admin\Helpers\Controllers\TerminalController@runArtisan');
    $router->get('helpers/scaffold', 'Encore\Admin\Helpers\Controllers\ScaffoldController@index');
    $router->post('helpers/scaffold', 'Encore\Admin\Helpers\Controllers\ScaffoldController@store');
    $router->get('helpers/routes', 'Encore\Admin\Helpers\Controllers\RouteController@index'); */
});
