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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/','');

Auth::routes();
Route::get('/admin/login','AdminController@index')->name('admin-login');
Route::post('/admin/process-login', 'AdminController@login')->name('admin-process-login');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// ->middleware('auth');
Route::get('/journals/view', 'JournalController@index')->name('journal-view');
Route::post('/journals/approve/{id}', 'AdminController@approve_journal')->name('approve-journal');
Route::post('/journals/reject/{id}', 'AdminController@disapprove_journal')->name('reject-journal');
// Route::get('/authors', 'AuthorsController@index')->name('authors-view')->middleware('auth');
// Route::get('/authors/profile/{id}', 'AuthorsController@profile')->name('authors-view-profile')->middleware('auth');
Route::get('/orders/{id}', 'OrdersController@index')->name('view-one-order')->middleware('auth');
// Route::get('/orders', 'OrdersController@all')->name('all-orders')->middleware('auth');
Route::get('/myorders', 'OrdersController@myorders')->name('my-orders')->middleware('auth');
Route::get('/all-orders', 'OrdersController@all_orders')->name('all-orders')->middleware('auth');

Route::get('/profile/{id}', 'ProfileController@index')->name('view-profile')->middleware('auth');
Route::any('/process/update-profile', 'ProfileController@process_update')->name('process-update-profile')->middleware('auth');
Route::get('/update-profile', 'ProfileController@update')->name('update-profile')->middleware('auth');

Route::get('/terms-and-conditions', 'TermsController@index')->name('view-terms');
Route::post('/contact-us','UserController@contact_us')->name('contact-us');

Route::any('/search-journals', 'JournalController@search')->name('search-journals');
Route::any('/search-results/{variable}/{searchitem}', 'JournalController@search_results')->name('search-results');
Route::any('/search-results/{country}', 'JournalController@search_country')->name('search_country');
Route::get('/journals/{id}', 'JournalController@fetch_id')->name('search_journal_by_id');
Route::get('/journal/create-one', 'JournalController@show_create_journal')->name('create-journal')->middleware('auth');
Route::any('/journal/create-one/process', 'JournalController@process_create_journal')->name('process-create-journal')->middleware('auth');

Route::any('/myjournals', 'MyJournalController@index')->name('my-journal')->middleware('auth');
Route::any('/all-journals', 'JournalController@all_journals')->name('all-journal')->middleware('auth');

Route::any('/journal/edit/{id}', 'JournalController@update')->name('edit-journal')->middleware('auth');
Route::any('/journal/delete/{id}', 'JournalController@delete')->name('delete-journal')->middleware('auth');

Route::get('/articles/create', 'ArticlesController@index')->name('create-article')->middleware('auth');
Route::any('/articles/create/process', 'ArticlesController@process_create_articles')->name('process-create-articles')->middleware('auth');

Route::any('/articles/edit/{id}', 'ArticlesController@update')->name('edit-articles')->middleware('auth');
Route::any('/articles/delete/{id}', 'ArticlesController@destroy')->name('delete-articles')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('view-cart')->middleware('auth');
Route::any('/add-to-cart/{id}', 'CartController@add_to_cart')->name('add-to-cart');
Route::get('/remove-from-cart/{id}', 'CartController@destroy')->name('remove-from-cart');
Route::any('/checkout', 'OrdersController@checkout')->name('checkout');

Route::get('/my-transactions', 'TransactionsController@index')->name('my-transactions')->middleware('auth');
Route::get('/all-transactions', 'TransactionsController@all')->name('all-transactions')->middleware('auth');

Route::get('/invoice/{reference}', 'OrdersController@invoice')->name('invoice')->middleware('auth');

Route::get('/all-users', 'AdminController@get_all_users')->name('all-users')->middleware('auth');

Route::get('/about-us','AboutUsController@index')->name('about-us');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/conditions-of-use', 'TermsController@index')->name('view-terms');
Route::get('/privacy-policy', 'TermsController@privacy_policy')->name('view-privacy-policy');
Route::get('/faqs', 'FaqsController@index')->name('view-faqs');
