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
    return view('cd-admin.home.home');
});


//about 

// Route::post('/edit-about','AboutController@insert_about')->name('edit');




//SEO

Route::get('service-seo',function(){
	return view('cd-admin.home.service-seo');
});

Route::get('/home/seo',function(){
	return view('cd-admin.home.package-seo');
});

//Carousel
// Route::get('add-carousel',function(){
// 	return view('cd-admin.home.add-carousel');
// });
Route::get('/carousels/create','CarouselController@create')->name('carousels.create');
Route::post('/carousel','CarouselController@store')->name('carousels.store');
Route::get('/carousels','CarouselController@view')->name('carousels.index');
Route::post('/remove/{id}','CarouselController@remove')->name('remove.carousel');
Route::post('/carousel/update/{id}','CarouselController@update')->name('up.carousel');
Route::post('/stat/{id}','CarouselController@stat')->name('carousel.status');

//Review
Route::get('/create','ReviewController@create')->name('review.create');
Route::get('/index','ReviewController@index')->name('review.index');
Route::post('/store/review','ReviewController@store')->name('review.store');
Route::post('/edit/{id}','ReviewController@edit')->name('review.edit');
Route::post('/delete/{id}','ReviewController@delete')->name('review.delete');
Route::post('/status/{id}','ReviewController@status')->name('review.status');

//Services

Route::get('/create/service','ServiceController@createservice')->name('service.create');
Route::get('/view/service','ServiceController@viewservice')->name('service.view');
Route::post('/store/service','ServiceController@storeservice')->name('service.store');
Route::post('/edit/service/{id}','ServiceController@editservice')->name('service.edit');
Route::post('/remove/service/{id}','ServiceController@deleteservice')->name('service.delete');

//Gallary
Route::get('/album','AlbumController@showaddalbum')->name('album.create');
Route::get('/image/{img}','AlbumController@showaddimage')->name('image.add');
Route::post('images/store','AlbumController@addimage')->name('images.store');
Route::POST('/store','AlbumController@storealbum')->name('album.store');
Route::get('/show/album','AlbumController@showalbum')->name('album.show');
Route::get('/images/{id}','AlbumController@showimage')->name('image.show');
Route::get('image/del/{id}','AlbumController@delimage')->name('image.del');


//Insert about
Route::get('/addabout','AboutController@viewabout')->name('about');
Route::get('/about/','AboutController@showabout')->name('about.show');
Route::POST('/update/','AboutController@insertabout')->name('insertabout');

//mailbox
Route::get('/mailbox','MailController@showmailbox')->name('show.mailbox');
Route::get('/compose/{id}','MailController@composemail')->name('compose.mail');
Route::post('/mail/store','MailController@store')->name('mail.store');
Route::get('/email/form','MailController@mailform')->name('email.form');
Route::post('email/store','MailController@mailstore')->name('email.formpost');
Route::post('/del/{id}','MailController@delmail')->name('delet.mail');
Route::get('/viewmain/{id}','MailController@viewmail')->name('view.mail');

//package

Route::get('/addpackage','PackageController@addpackage')->name('add.package');
Route::get('/viewpackages','PackageController@viewpackage')->name('view.package');
Route::post('/storepackage','PackageController@storepackage')->name('store.package');
Route::post('/edit/review/{id}','PackageController@packagestatus')->name('package.status');
Route::get('/del/{id}','PackageController@deletepackage')->name('package.delete');
Route::get('/showpage/{id}','PackageController@viewpage')->name('show.packagepage');
Route::get('/showeditpackage/{id}','PackageController@editview')->name('view.edit.package');
Route::POST('/editpackage/{id}','PackageController@editstore')->name('editpackage.store');

//Booking
Route::get('/bookingform/{slug}','BookingController@bookingform')->name('booking.form');
Route::get('/bookings','BookingController@bookingview')->name('booking.view');
Route::post('/booking/store','BookingController@bookingstore')->name('booking.store');
Route::get('/showbooking/{id}','BookingController@showbooking')->name('show.booking');
Route::get('/bookingcompose/{id}','BookingController@composebooking')->name('booking.compose');
Route::post('bookingreply','BookingController@bookingreply')->name('booking.reply');
Route::get('replies','BookingController@bookingreplied')->name('booking.replies');
Route::post('/acceptreply','BookingController@acceptreply')->name('booking.accept');
Route::POST('/reject','BookingController@rejectreply')->name('reject.reply');
Route::get('/booked','BookingController@viewstatus')->name('booked.view');


//Dashboard
Route::get('/','DashController@homeview')->name('home');
Route::post('/quickreply','DashController@quickreply')->name('quick.reply');
Route::get('/quickreplies','DashController@quickreplies')->name('view.quickreply');

// Route::get('/', function () {
//     return view('cd-admin.home.home');
// });