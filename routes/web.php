<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@mainpage')->name('home');

Route::get('aboutus', 'PagesController@about')->name('about-us');

Route::get('blog', 'PagesController@blog')->name('blog');

Route::get('blog-post', 'PagesController@blog_post')->name('blog-post');

Route::get('freelance', 'PagesController@freelance')->name('freelance');

Route::get('how-it-works', 'PagesController@how')->name('how');

Route::get('service', 'PagesController@how')->name('service');

Route::get('service-details', 'PagesController@how')->name('service-details');

Route::get('ordernow', function(){
    return redirect()->route('manage.order.create');
})->name('order-now');

//Route::get('ordernow', 'OrderingController@makeOrder')->name('order-now');

Route::group(['prefix' => 'legal', 'as' => 'legal.'], function () {

    Route::get('/','LegalController@index')->name('index');
    Route::get('terms-of-use', ['uses'=>'LegalController@terms'])->name('terms');
    Route::get('privacy-policy', ['uses'=>'LegalController@privacy'])->name('privacy');


});


Route::group(['prefix' => 'manage', 'as' => 'manage.'], function () {
    Auth::routes();
    Route::get('/',['uses'=>'ManageController@index'])->name('index'); // dashboards
    Route::get('terms', ['uses'=>'ManageController@terms'])->name('terms');
    Route::group(['prefix' => 'order', 'as' => 'order'], function () {
        Route::get('/', ['uses'=>'OrderController@create'])->name('.create');     
        Route::post('/', ['uses'=>'OrderController@update']);
        Route::get('{ordernumber}', ['uses'=>'OrderController@edit'])->name('.complete-order');
        Route::post('cancel', ['uses'=>'OrderController@cancel'])->name('.cancel-order');
        Route::post('itn', ['uses'=>'OrderController@notify'])->name('.notify-order');
        Route::post('success', ['uses'=>'OrderController@return'])->name('.return-order');
    });
    //Route::get('admin')
    //Route::post('/', ['uses'=>'OrderingController@index']);
    //Route::get('ordernow', ['uses'=>'OrderingController@makeOrder'])->name('order-now');
    //Route::get('order', ['as' => 'order', 'uses' => 'OrderingController@makeOrder'])->name('order-now');

    //Route::post('order',['uses'=>])

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', 'AdminController@index')->name('index');
        //Route::resource('/admin/blog_posts/manager', 'BlogPostsController');
        Route::group(['prefix' => 'blog_post', 'as' => 'blog_posts'], function () {
            Route::get('/', 'AdminController@blog_post');
            Route::get('add', 'BlogPostsController@create')->name('.createBlogPost');
            Route::get('edit', 'BlogPostsController@edit')->name('.editBlogPost');
            Route::resource('manager', 'BlogPostsController');
        });    
        

    });
});
//Route::
/*
Route::get('ordernow', 'OrderingController@makeOrder')->name('order-now');

Route::get('storage/{filename}', function ($filename)
{
    // Add folder path here instead of storing in the database.
    $path = storage_path('$filename');
    // realsource/storage/app/public/blog-posts/cover_images
    
    
    if (!File::exists($path)) {
        return 'not found';
        abort(404);
    }
        return ' found';

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::group(['prefix' => 'manage', 'as' => 'manage.'], function () {

    //Route::post('/', ['uses'=>'OrderingController@index']);
    //Route::get('ordernow', ['uses'=>'OrderingController@makeOrder'])->name('order-now');
    //Route::get('order', ['as' => 'order', 'uses' => 'OrderingController@makeOrder'])->name('order-now');

    //Route::post('order',['uses'=>])

});

Route::resource('/admin/blog_posts/manager', 'BlogPostsController');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/blog_posts', 'AdminController@blog_post')->name('admin/blog_posts');
Route::get('/admin/blog_posts/add', 'BlogPostsController@create')->name('createBlogPost');
Route::get('/admin/blog_posts/edit', 'BlogPostsController@edit')->name('editBlogPost');
*/






