<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('auth.login');
});

//for admin dashboard
Route::middleware(['auth','role:admin'])->group(function () {

    //Route::get('/admin/home', [AdminController::class, 'AdminHome'])->name('admin.home');

    Route::get('/admin/dashboard', [AdminController::class, 'ViewDashboard'])->name('admin.dashboard');


    
    Route::get('/admin/calamity-type', [AdminController::class, 'ViewallCalamitytype'])->name('admin.calamity-type');
    Route::post('/admin/addcalamitytype', [AdminController::class, 'AddCalamityType'])->name('admin.addcalamitytype');
    Route::get('/admin/edit-calamitytype/{id}', [AdminController::class, 'EditCalamitytype'])->name('admin.calamitytype.edit');
    Route::post('/admin/update-calamitytype/{id}', [AdminController::class, 'UpdateCalamitytype'])->name('admin.calamitytype.update');
    Route::post('/admin/delete-calamitytype/{id}', [AdminController::class, 'DeleteCalamitytype'])->name('admin.calamitytype.delete');


    Route::get('/admin/barangay', [AdminController::class, 'ViewallBarangay'])->name('admin.barangay');
    Route::post('/admin/addbarangayinformation', [AdminController::class, 'AddBarangayInfo'])->name('admin.addbarangayinformation');
    Route::get('/admin/edit-barangayinformation/{id}', [AdminController::class, 'EditBarangayInfo'])->name('admin.barangayinformation.edit');
    Route::post('/admin/update-barangayinformation/{id}', [AdminController::class, 'UpdateBarangayInfo'])->name('admin.barangayinformation.update');
    Route::post('/admin/delete-barangayinformation/{id}', [AdminController::class, 'DeleteBarangayInfo'])->name('admin.barangayinformation.delete');


    Route::get('/admin/evacuation-center', [AdminController::class, 'ViewallEvacuationCenter'])->name('admin.evacuation-center');
    Route::post('/admin/addevacuationcenter', [AdminController::class, 'AddEvacuationCenter'])->name('admin.addevacuationcenter');
    Route::get('/admin/edit-evacuationcenter/{id}', [AdminController::class, 'EditEvacuationCenter'])->name('admin.evacuationcenter.edit');
    Route::post('/admin/update-evacuationcenter/{id}', [AdminController::class, 'UpdateEvacuationCenter'])->name('admin.evacuationcenter.update');
    Route::post('/admin/delete-evacuationcenter/{id}', [AdminController::class, 'DeleteEvacuationCenter'])->name('admin.evacuationcenter.delete');


    Route::get('/admin/add-evacuees', [AdminController::class, 'ViewallAddEvacuees'])->name('admin.add-evacuees');
    Route::get('/admin/manage-evacuees', [AdminController::class, 'ViewallManageEvacuees'])->name('admin.manage-evacuees');
    Route::post('/admin/addevacueesinformation', [AdminController::class, 'AddEvacueesInformation'])->name('admin.addevacueesinformation');
    Route::get('/admin/edit-evacueeinformation/{id}', [AdminController::class, 'EditEvacueeInformation'])->name('admin.evacueeinformation.edit');
    Route::post('/admin/update-evacueeinformation/{id}', [AdminController::class, 'UpdateEvacueeInformation'])->name('admin.evacueeinformation.update');
    Route::post('/admin/delete-evacueeinformation/{id}', [AdminController::class, 'DeleteEvacueeInformation'])->name('admin.evacueeinformation.delete');

    Route::get('/admin/lgu', [AdminController::class, 'ViewallLgu'])->name('admin.lgu');
    Route::post('/admin/addlgu', [AdminController::class, 'AddLgu'])->name('admin.addlgu');



    Route::get('/admin/view-user', [AdminController::class, 'ViewallAddUser'])->name('admin.add-user');
    Route::post('/admin/adduser', [AdminController::class, 'AddUser'])->name('admin.addUser');
    Route::get('/admin/manage-user', [AdminController::class, 'ViewallManageUser'])->name('admin.manage-user');
    Route::get('/admin/edit-user/{id}', [AdminController::class, 'EditUser'])->name('admin.user.edit');
    Route::post('/admin/update-user/{id}', [AdminController::class, 'UpdateUser'])->name('admin.user.update');
    Route::post('/admin/delete-user/{id}', [AdminController::class, 'DeleteUser'])->name('admin.user.delete');

    // for reports section below
    Route::get('/admin/evacuees-report', [AdminController::class, 'ViewallEvacueesReport'])->name('admin.evacuees-report');

    
    Route::get('/admin/gender-report', [AdminController::class, 'ViewallGenderReport'])->name('admin.gender-report');
    Route::get('/admin/barangay-report', [AdminController::class, 'ViewallBarangayReport'])->name('admin.barangay-report');
    Route::get('/admin/age-report', [AdminController::class, 'ViewallAgeReport'])->name('admin.age-report');
    Route::get('/admin/calamity-report', [AdminController::class, 'ViewallCalamityReport'])->name('admin.calamity-report');
    Route::get('/admin/center-report', [AdminController::class, 'ViewallCenterReport'])->name('admin.center-report');


});
//end for admin dashboard

//for user dashboard
Route::middleware(['auth','role:user'])->group(function () {

    Route::get('/user/home', [UserController::class, 'UserHome'])->name('user.home');

});
//end for user dashboard

require __DIR__.'/auth.php';
