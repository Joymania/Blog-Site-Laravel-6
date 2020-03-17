<?php


//Admin Route

Route::namespace('Admin')->group(function () {
     Route::get('backend','HomeController@index')->name('admin.home');
     Route::resource('backend/category', 'CategoryController');

});




use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/data', function () {
//     $data=[
//         "facebook-f"=>"www.facebook.com",
//         "twitter"=>"www.twitter.com",
//         "github"=>"www.github.com",
//     ];
//     //return view('frontend.index',["sociallinks"=>$data]);
//     return view('frontend.layouts.footer')->with(["sociallinks"=> $data]);
// });


//company crud system
//show company form
Route::get('/addcompany','CompanyController@showCompanyForm')->name('company.showForm');
//insert company
Route::post('/addcompany','CompanyController@showCompanydata')->name('company.add');
//read all company
Route::get('/companies','CompanyController@getAllCompany')->name('company.get');
//show edit form
Route::get('/companies/{id}','CompanyController@showEditForm')->name('company.show');
//update company
Route::patch('/companies/{id}','CompanyController@submitFromData')->name('submit.data');
//delete company
Route::post('/companies/{id}','CompanyController@deleteData')->name('company.delete');

Route::get('/newsletter','NewsletterController@show')->name('newsletter');
Route::post('/newsletter','NewsletterController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
