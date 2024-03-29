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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' =>'auth'],function(){
//frontend routes
Route::get('/home','FrontendController@fhome')->name('frontend.home');//home
Route::get('/','FrontendController@fhom')->name('frontend.hom');//home
Route::get('know-about-phool-maya','FrontendController@about')->name('frontend.about');//about
Route::get('booking/{slug}','FrontendController@booking')->name('frontend.booking');//Booking
Route::get('contact','FrontendController@contact')->name('frontend.contact');//Contact
Route::get('gallery','FrontendController@gallery')->name('frontend.gallery');//gallery
Route::get('room','FrontendController@room')->name('frontend.room');//room
route::get('package','FrontendController@package')->name('frontend.package');//package
Route::get('ourservice','FrontendController@service')->name('frontend.service');//service
Route::get('album/{id}', 'FrontendController@album')->name('frontend.album');//albums
Route::get('whyus','FrontendController@whyus')->name('frontend.whyus');//why us
route::get('guestreviews','FrontendController@guestreviews')->name('frontend.guestreviews');//Guest Review


Route::get('/homeview', function () {
    return view('cd-admin.home.homeview');
});
Route::get('/logout','DashController@logout')->name('logout');

//Carousel
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
Route::post('updated/{id}','AboutController@upda')->name('updateabout');

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
Route::get('/showbooked/{id}','BookingController@showbooked')->name('show.booked');
Route::get('showreply/{id}','BookingController@showbookingreply')->name('show.reply');


//Dashboard
 Route::get('/homeview','DashController@homeview')->name('home');
Route::post('/quickreply','DashController@quickreply')->name('quick.reply');
Route::get('/quickreplies','DashController@quickreplies')->name('view.quickreply');
Route::get('/quickreplyview/{id}','DashController@replyview')->name('show.quickreply');

// Route::get('/', function () {
//     return view('cd-admin.home.home');
// });

//SEO
route::get('/seopage','SeoController@createpackageseo')->name('package.seo');
Route::post('/storeseo','SeoController@insertseo')->name('insert.seo');
route::get('/seoview','SeoController@viewpackage')->name('view.seo');
Route::post('/editseo/{id}','SeoController@editseo')->name('edit.seo');
Route::get('/showseo/{id}','SeoController@viewseo')->name('seo.show');
Route::get('editview/{id}','SeoController@seoviewedit')->name('edit.view.seo');


});