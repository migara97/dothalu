<?php

use Illuminate\Support\Facades\Route;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Middleware\IsAdmin;
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



// Route::middleware(['admin'])->group(function () {

    Route::get('/login','App\Http\Controllers\MainController@login');
    Route::get('/logout','App\Http\Controllers\MainController@logout');
    Route::post('/checklogin','App\Http\Controllers\MainController@checklogin');
    // Route::get('/categorySelect','App\Http\Controllers\SubcategorylevelController@categorySelect');


// Route::group(['middleware'=>'admin'], function(){
Route::middleware(['admin'])->group(function () {
Route::get('/adindex','App\Http\Controllers\MainController@adindex');

Route::get('/userRegister','App\Http\Controllers\MainController@userRegister');
Route::post('/saveUser','App\Http\Controllers\UserController@store');
Route::get('/userView','App\Http\Controllers\UserController@view');
Route::get('/editUser/{id}','App\Http\Controllers\UserController@edit');
Route::post('/updateUser','App\Http\Controllers\UserController@update');
Route::get('/deleteUser/{id}','App\Http\Controllers\UserController@destroy');
Route::get('/profile/{id}','App\Http\Controllers\UserController@edit');




Route::get('/districtsView','App\Http\Controllers\DistrictController@index');


Route::get('/CategoryAdd','App\Http\Controllers\CategoryController@index');
Route::post('/saveCategory','App\Http\Controllers\CategoryController@store');
Route::get('/viewCategory','App\Http\Controllers\CategoryController@create');
Route::get('/editcategory/{id}','App\Http\Controllers\CategoryController@edit');
Route::post('/updateCategory','App\Http\Controllers\CategoryController@update');


Route::get('/SubcategoryAdd','App\Http\Controllers\SubcategoryController@index');
Route::post('/saveSubcategory','App\Http\Controllers\SubcategoryController@store');
Route::get('/viewSubcategory','App\Http\Controllers\SubcategoryController@create');
Route::get('/editsubcategory/{id}','App\Http\Controllers\SubcategoryController@edit');
Route::post('/updateSubcategory','App\Http\Controllers\SubcategoryController@update');
Route::get('/deletesubcategory/{id}','App\Http\Controllers\SubcategoryController@destroy');



Route::get('/SubcategorylevelAdd','App\Http\Controllers\SubcategorylevelController@index');
Route::get('/categorySelect','App\Http\Controllers\SubcategorylevelController@categorySelect');
Route::post('/saveSubcategorylevel','App\Http\Controllers\SubcategorylevelController@store');
Route::get('/viewSubcategorylevel','App\Http\Controllers\SubcategorylevelController@create');
Route::get('/editsubcategorylevel/{id}','App\Http\Controllers\SubcategorylevelController@edit');
Route::post('/updateSubcategorylevel','App\Http\Controllers\SubcategorylevelController@update');
Route::get('/deletesubcategorylevel/{id}','App\Http\Controllers\SubcategorylevelController@destroy');



Route::get('/oldbannerAdd','App\Http\Controllers\OldbannerController@index');
Route::post('/saveOldBanner','App\Http\Controllers\OldbannerController@store');
Route::get('/viewoldbanner','App\Http\Controllers\OldbannerController@create');
Route::get('/deleteoldbanner/{id}','App\Http\Controllers\OldbannerController@destroy');



Route::get('/bannerAdd','App\Http\Controllers\BannerController@index');
Route::post('/saveBanner','App\Http\Controllers\BannerController@store');
Route::get('/viewbanner','App\Http\Controllers\BannerController@create');
Route::get('/deletebanner/{id}','App\Http\Controllers\BannerController@destroy');


Route::get('/webuserAdd','App\Http\Controllers\WebuserController@index');
Route::post('/saveWebuser','App\Http\Controllers\WebuserController@store');
Route::get('/viewWebuser','App\Http\Controllers\WebuserController@create');
Route::get('/editwebuser/{id}','App\Http\Controllers\WebuserController@edit');
Route::post('/updateWebuser','App\Http\Controllers\WebuserController@update');
Route::get('/deletewebuser/{id}','App\Http\Controllers\WebuserController@destroy');



Route::get('/shopAdd','App\Http\Controllers\ShopController@index');
Route::post('/shopStore','App\Http\Controllers\ShopController@store');
Route::get('/shopView','App\Http\Controllers\ShopController@create');
Route::get('/editshop/{user_id}','App\Http\Controllers\ShopController@edit');
Route::post('/shopUpdate/{user_id}','App\Http\Controllers\ShopController@update');
Route::get('/deleteshop/{user_id}','App\Http\Controllers\ShopController@destroy');


Route::get('/adsAdd','App\Http\Controllers\AdController@index');
Route::get('/subcategorySelect','App\Http\Controllers\SubcategorylevelController@categorySelectLevel');
Route::post('/storeAds','App\Http\Controllers\AdController@store');
Route::get('/adsView','App\Http\Controllers\AdController@create');
Route::get('/editad/{id}/{category}','App\Http\Controllers\AdController@edit');
Route::post('/adUpdate1/{id}','App\Http\Controllers\AdController@adupdate1');
Route::post('/adUpdate2/{id}','App\Http\Controllers\AdController@adupdate2');
Route::get('/deletead/{id}','App\Http\Controllers\AdController@destroy');


Route::get('/natificationIndex','App\Http\Controllers\NotificationController@index');
Route::post('/storeNatification','App\Http\Controllers\NotificationController@store');
Route::get('/natificationView','App\Http\Controllers\NotificationController@create');
Route::get('/deleteNotification/{id}','App\Http\Controllers\NotificationController@destroy');


Route::get('/shoprequestView','App\Http\Controllers\RequsetshopController@index');
Route::get('/deleteshoprequest/{id}','App\Http\Controllers\RequsetshopController@destroy');


 });


 






// Route::post('/saveWebuser','App\Http\Controllers\WebuserController@store');
// Route::get('/viewWebuser','App\Http\Controllers\WebuserController@create');
// Route::get('/editwebuser/{id}','App\Http\Controllers\WebuserController@edit');
// Route::post('/updateWebuser','App\Http\Controllers\WebuserController@update');

Route::get('locale/{locale}',function($locale){
    \Session::put('locale',$locale);
    return redirect()->back();
});


Route::get('/','App\Http\Controllers\WebController@index');
Route::get('/web/about', 'App\Http\Controllers\WebController@about');
Route::get('/web/contact','App\Http\Controllers\WebController@contact');
Route::post('/weblogin','App\Http\Controllers\MainController@weblogin');
Route::get('/web/shop','App\Http\Controllers\WebController@shop')->name('shop');
Route::get('/web/vehicle','App\Http\Controllers\WebController@vehicle')->name('vehicle');
Route::get('/web/shop/product/{id}','App\Http\Controllers\WebController@product');


Route::get('/web/logout','App\Http\Controllers\WebController@logout');


Route::get('/toppartsSelect','App\Http\Controllers\WebController@toppartsSelect');

Route::get('/web/post','App\Http\Controllers\WebController@post');
Route::get('/editwebpost/{id}/{category}','App\Http\Controllers\WebController@editpost');



Route::get('/web/shop/vehicleproduct/{id}','App\Http\Controllers\WebController@vehicleproduct');






Route::post('/shop-filter','App\Http\Controllers\WebController@shopfilter');
Route::post('/vehicle-filter','App\Http\Controllers\WebController@vehiclefilter');





// -------------------------------login google--------------------------------------------
Route::get('/auth/redirect','App\Http\Controllers\SocialController@redirect');
Route::get('/auth/google/callback','App\Http\Controllers\SocialController@callback');

// -------------------------------login facebook--------------------------------------------
Route::get('/auth/facebook/redirect','App\Http\Controllers\FacebookController@FacebookRedirect');
Route::get('/auth/facebook/callback','App\Http\Controllers\FacebookController@FacebookCallback');






// ------------------------------------All Search-------------------------------------
Route::post('/allsearchparts','App\Http\Controllers\WebController@allsearchparts');
Route::post('/allsearchvehicle','App\Http\Controllers\WebController@allsearchvehicle');

// ------------------------------------Favorite-------------------------------------
Route::post('/favoritepost','App\Http\Controllers\WebController@favorite');
Route::post('/favoriterequest','App\Http\Controllers\WebController@favoriterequest');








Route::post('/web/shop/Body-Components','App\Http\Controllers\WebController@BodyComponents');
Route::post('/web/shop/Car-Audio-Systems','App\Http\Controllers\WebController@CarAudioSystems');
Route::post('/web/shop/Lighting-Indicators','App\Http\Controllers\WebController@LightingIndicators');
Route::post('/web/shop/Wheels-Tyres-Rims','App\Http\Controllers\WebController@WheelsTyresRims');
Route::post('/web/shop/Suspension-Steering-Handling','App\Http\Controllers\WebController@SuspensionSteeringHandling');
Route::post('/web/shop/Engines-Engine-Parts','App\Http\Controllers\WebController@EnginesEngineParts');
Route::post('/web/shop/Accessories','App\Http\Controllers\WebController@Accessories');
Route::post('/web/shop/Interior-Parts-Furnishings','App\Http\Controllers\WebController@InteriorPartsFurnishings');
Route::post('/web/shop/Brakes','App\Http\Controllers\WebController@Brakes');
Route::post('/web/shop/Air-Conditioning-Heating','App\Http\Controllers\WebController@AirConditioningHeating');
Route::post('/web/shop/Mirror-Components','App\Http\Controllers\WebController@MirrorComponents');
Route::post('/web/shop/Undercarriage-Parts','App\Http\Controllers\WebController@UndercarriageParts');
Route::post('/web/shop/Helmets-Clothing-Protection','App\Http\Controllers\WebController@HelmetsClothingProtection');
Route::post('/web/shop/Exhausts-Exhaust-Parts','App\Http\Controllers\WebController@ExhaustsExhaustParts');
Route::post('/web/shop/AirIntake-Fuel-Delivery','App\Http\Controllers\WebController@AirIntakeFuelDelivery');
Route::post('/web/shop/Tools-Equipment','App\Http\Controllers\WebController@ToolsEquipment');
Route::post('/web/shop/Automobile-Batteries','App\Http\Controllers\WebController@AutomobileBatteries');
Route::post('/web/shop/WindscreenWipers-Washers','App\Http\Controllers\WebController@WindscreenWipersWashers');
Route::post('/web/shop/Transmission-Drivetrain','App\Http\Controllers\WebController@TransmissionDrivetrain');
Route::post('/web/shop/Oils-Lubricants-Fluids','App\Http\Controllers\WebController@OilsLubricantsFluids');
Route::post('/web/shop/Chassis','App\Http\Controllers\WebController@Chassis');
Route::post('/web/shop/Turbos-Superchargers','App\Http\Controllers\WebController@TurbosSuperchargers');
Route::post('/web/shop/Footrests-Pedals-Pegs','App\Http\Controllers\WebController@FootrestsPedalsPegs');
Route::post('/web/shop/Tyres-Rims','App\Http\Controllers\WebController@TyresRims');




Route::post('/web/vehicle/Toyota','App\Http\Controllers\WebController@Toyota');
Route::post('/web/vehicle/Suzuki','App\Http\Controllers\WebController@Suzuki');
Route::post('/web/vehicle/Honda','App\Http\Controllers\WebController@Honda');
Route::post('/web/vehicle/Nissan','App\Http\Controllers\WebController@Nissan');
Route::post('/web/vehicle/Mitsubishi','App\Http\Controllers\WebController@Mitsubishi');
Route::post('/web/vehicle/Tata','App\Http\Controllers\WebController@Tata');
Route::post('/web/vehicle/Bajaj','App\Http\Controllers\WebController@Bajaj');
Route::post('/web/vehicle/TVS','App\Http\Controllers\WebController@TVS');
Route::post('/web/vehicle/Isuzu','App\Http\Controllers\WebController@Isuzu');
Route::post('/web/vehicle/Mahindra','App\Http\Controllers\WebController@Mahindra');
Route::post('/web/vehicle/Mazda','App\Http\Controllers\WebController@Mazda');
Route::post('/web/vehicle/Hero','App\Http\Controllers\WebController@Hero');
Route::post('/web/vehicle/Micro','App\Http\Controllers\WebController@Micro');
Route::post('/web/vehicle/Daihatsu','App\Http\Controllers\WebController@Daihatsu');
Route::post('/web/vehicle/Hyundai','App\Http\Controllers\WebController@Hyundai');
Route::post('/web/vehicle/Hero-Honda','App\Http\Controllers\WebController@HeroHonda');
Route::post('/web/vehicle/DFSK','App\Http\Controllers\WebController@DFSK');
Route::post('/web/vehicle/Mercedes-Benz','App\Http\Controllers\WebController@MercedesBenz');
Route::post('/web/vehicle/Kia','App\Http\Controllers\WebController@Kia');
Route::post('/web/vehicle/Ford','App\Http\Controllers\WebController@Ford');
Route::post('/web/vehicle/Perodua','App\Http\Controllers\WebController@Perodua');
Route::post('/web/vehicle/Renault','App\Http\Controllers\WebController@Renault');
Route::post('/web/vehicle/Peugeot','App\Http\Controllers\WebController@Peugeot');
Route::post('/web/vehicle/BMW','App\Http\Controllers\WebController@BMW');
Route::post('/web/vehicle/Yamaha','App\Http\Controllers\WebController@Yamaha');
Route::post('/web/vehicle/Audi','App\Http\Controllers\WebController@Audi');

Route::get('/web/saller/{user_id}','App\Http\Controllers\WebController@shoppage');
Route::get('/web/register','App\Http\Controllers\WebController@register');

Route::post('/saveWebuser','App\Http\Controllers\WebuserController@store');



Route::group(['middleware'=>'user'], function(){

    Route::post('/webstoreAds','App\Http\Controllers\WebuserController@webstore');
    Route::post('/webadUpdate1/{id}','App\Http\Controllers\WebuserController@adupdate1');
    Route::post('/webadUpdate2/{id}','App\Http\Controllers\WebuserController@adupdate2');

    Route::get('/categorySelectweb','App\Http\Controllers\SubcategorylevelController@categorySelectWeb');
    Route::get('/subcategorySelectweb','App\Http\Controllers\SubcategorylevelController@categorySelectLevelWeb');
    
    Route::get('/web/myAccount','App\Http\Controllers\WebController@myAccount');

    Route::post('/shopNameId/{id}','App\Http\Controllers\WebController@shopNameId');
    Route::post('/shopAddressId/{id}','App\Http\Controllers\WebController@shopAddressId');
    Route::post('/shopPhoneId/{id}','App\Http\Controllers\WebController@shopPhoneId');
    Route::post('/shopEmailId/{id}','App\Http\Controllers\WebController@shopEmailId');
    Route::post('/shopWhatsappId/{id}','App\Http\Controllers\WebController@shopWhatsappId');
    Route::post('/shopLogoId/{id}','App\Http\Controllers\WebController@shopLogoId');
    Route::post('/shopBannerId/{id}','App\Http\Controllers\WebController@shopBannerId');

    
    Route::post('/updateprofile','App\Http\Controllers\WebuserController@updateprofile');
    Route::get('/web/shopview','App\Http\Controllers\WebController@shopview');

    Route::get('/forgotpass','App\Http\Controllers\ForgotpasswordController@index');
    Route::post('/send-mail','App\Http\Controllers\ForgotpasswordController@store');
    Route::post('/send-code','App\Http\Controllers\ForgotpasswordController@code');
    Route::post('/resetuser','App\Http\Controllers\ForgotpasswordController@resetUser');


    Route::post('/requestShop','App\Http\Controllers\RequsetshopController@store');

});




















