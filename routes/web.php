<?php

use App\Mail\ContactForm;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});
Route::get('/welcome', function() {
    return view('pages.welcome');
});
Route::get('/sandbox', function () {
    return view('sandbox.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/projects', function () {
    return view('pages.projects');
});
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/chill', function() {
    return view('pages.chill');
});

Route::post('/contact', function(Request $request) {

    $contact = $request->validate([

        'name'      => 'required',
        'email'     => 'required|email',
        'phone'     => 'required',
        'message'   => 'required',

    ]);

    Mail::to('douglascockerham@eloquence.digital')->send(new ContactForm($contact));

    return back()->with('success_message','We received your message and will get back to you shortly.');

});
