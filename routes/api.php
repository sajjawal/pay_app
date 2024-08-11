
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// PROFILE UPDATE
Route::get('/dcl/{pass}',[ApiController::class,'dcl']);
Route::post('/userinfo',[ApiController::class,'userinfo']);
Route::get('/dashboarddata/{id}',[ApiController::class,'dashboarddata']);
Route::post('/updatepassword',[ApiController::class,'updatepassword']);
Route::post('/updateprofile',[ApiController::class,'updateprofile']);
Route::get('/getuserdetails/{id}',[ApiController::class,'getuserdetails']);
Route::get('/getstudentdetails/{id}',[ApiController::class,'getstudentdetails']);
Route::get('/candidatedataview/{id}',[ApiController::class,'candidatedataview']);
Route::get('/blockuser/{id}',[ApiController::class,'blockuser']);
// ADD BANK ACCOUNT
Route::post('/addbankaccount',[ApiController::class,'addbankaccount']);
Route::get('/getbankaccount/{id}',[ApiController::class,'getbankaccount']);
Route::get('/getactivebanks/{id}',[ApiController::class,'getactivebanks']);
Route::get('/editbank/{id}',[ApiController::class,'editbank']);
Route::post('/uploadstetment',[ApiController::class,'uploadstetment']);
Route::get('/stetmentlist',[ApiController::class,'stetmentlist']);
Route::get('/deletestetment/{id}',[ApiController::class,'deletestetment']);
// Upload stetment LOG
Route::get('/uploadstetmentlist',[ApiController::class,'uploadstetmentlist']);
Route::get('/unclamstetmentlist',[ApiController::class,'unclamstetmentlist']);
// TRANSTION LOG
Route::get('/alltransactions/{userid}',[ApiController::class,'alltransactions']);
Route::get('/alltransactionsUnclam/{userid}',[ApiController::class,'alltransactionsUnclam']);
Route::get('/hourtransactions/{userid}',[ApiController::class,'hourtransactions']);
Route::post('/change_tns_status',[ApiController::class,'change_tns_status']);
Route::post('/change_isclaim',[ApiController::class,'change_isclaim']);
// ADD CATEGORY
Route::post('/addcategory',[ApiController::class,'addcategory']);
Route::get('/getcategorylist/{id}',[ApiController::class,'getcategorylist']);
Route::get('/editcategory/{id}',[ApiController::class,'editcategory']);
Route::get('/deletecategory/{id}',[ApiController::class,'deletecategory']);
Route::get('/categorystatus/{id}',[ApiController::class,'categorystatus']);
Route::post('/addupitocategory',[ApiController::class,'addupitocategory']);
Route::get('/getupitocategory/{id}',[ApiController::class,'getupitocategory']);
// PAYMENT API
Route::get('/order/create',[ApiController::class,'ordercreate']);
Route::get('/order/getcallback/{id}',[ApiController::class,'ordergetcallback']);
Route::post('/order/submit',[ApiController::class,'ordersubmit']);
Route::post('/order/varify',[ApiController::class,'ordervarify']);
Route::post('/order/failed',[ApiController::class,'orderfailed']);
Route::get('/redirecturl',[ApiController::class,'redirecturl']);
Route::post('/callbackurl',[ApiController::class,'callbackurl']);
Route::post('/verifytxnid',[ApiController::class,'verifytxnid']);
// ADMIN
Route::post('/register',[ApiController::class,'register']);
Route::get('/getuserdetails/{id}',[ApiController::class,'getuserdetails']);
Route::post('/getregister',[ApiController::class,'getregister']);
Route::get('/edituser/{id}',[ApiController::class,'edituser']);
Route::get('/deleteuser/{id}',[ApiController::class,'deleteuser']);
Route::post('/adminlogin',[ApiController::class,'adminlogin']);
// forgot password
Route::post('/gen_reset_password',[ApiController::class,'gen_reset_password']);
Route::post('/verify_reset_password',[ApiController::class,'verify_reset_password']);
Route::post('/update_new_password',[ApiController::class,'update_new_password']);













