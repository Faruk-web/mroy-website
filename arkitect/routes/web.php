<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\GalleryController;
use App\Models\RoleRoute;

// function getRoleName($routeName)
// {
//     $routesData = RoleRoute::where('route_name', $routeName)->get();
//     $result = [];
//     foreach ($routesData as $routeData) {
//         array_push($result, $routeData->role_name);
//     }
//     return $result;
// }
// =================social login==================
Route::get('/user/login', [SocialLoginController::class, 'userLogin'])->name('user.login');
Route::get('/auth/redirect', [SocialLoginController::class, 'authRedirect'])->name('auth.redirect');
Route::get('/auth/callback', [SocialLoginController::class, 'authCallback'])->name('auth.callback');
// ===================-end social login==============

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/blog', [HomeController::class, 'blogs'])->name('blog');
Route::get('/blog/details/{id}', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/practice', [HomeController::class, 'practice'])->name('practice');
Route::get('/practice/deatils/{id}', [HomeController::class, 'practicedeatils'])->name('practice.deatils');
Route::get('/client', [HomeController::class, 'client'])->name('client');
Route::get('/client/deatils/{id}', [HomeController::class, 'clientdeatils'])->name('client.deatils');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/attorney', [HomeController::class, 'attorney'])->name('attorney');
Route::get('/attorney/details/{id}', [HomeController::class, 'attorneydeatil'])->name('attorney.details');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/teams', [HomeController::class, 'terms'])->name('terms');
Route::get('/team/details/{id}', [HomeController::class, 'teamdetail'])->name('team.detail');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/error', function () {
    return view('errors.404');
});
Route::get('/privacy-policy', [PrivacyController::class, 'page_view'])->name('privacy.view');
Route::get('/terms-and-condition', [PrivacyController::class, 'condition_page_view'])->name('condition.view');
Route::prefix('profile')->group(function () {
    Route::get('/', [HomeController::class, 'profileView'])->name('profile.view');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::middleware(['roles'])->group(function () {
            Route::group(['prefix' => 'role', 'as' => 'role.'], function(){
                Route::get('/add', [RoleController::class, 'index'])->name('add');
                Route::post('/new', [RoleController::class, 'create'])->name('new');
                Route::get('/manage', [RoleController::class, 'manage'])->name('manage');
                Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [RoleController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('delete');
            });

            Route::prefix('user')->group(function () {
                Route::get('/add', [UserController::class, 'index'])->name('user.add');
                Route::post('/new', [UserController::class, 'create'])->name('user.new');
                Route::get('/manage', [UserController::class, 'manage'])->name('user.manage');
                Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
                Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
                Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
            });
            Route::prefix('slider')->group(function () {
                Route::get('/add', [SliderController::class, 'index'])->name('slider.add');
                Route::post('/new', [SliderController::class, 'create'])->name('slider.new');
                Route::get('/manage', [SliderController::class, 'manage'])->name('slider.manage');
                Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
                Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
                Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
            });
            Route::prefix('category')->group(function () {
                Route::get('/add', [CategoryController::class, 'index'])->name('category.add');
                Route::post('/new', [CategoryController::class, 'create'])->name('category.new');
                Route::get('/manage', [CategoryController::class, 'manage'])->name('category.manage');
                Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
                Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
                Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
            });
            Route::prefix('privacyy')->group(function () {
                Route::get('/add', [PrivacyController::class, 'index'])->name('privacyy.add');
                Route::post('/new', [PrivacyController::class, 'create'])->name('privacyy.new');
                Route::get('/manage', [PrivacyController::class, 'manage'])->name('privacyy.manage');
                Route::get('/edit/{id}', [PrivacyController::class, 'edit'])->name('privacyy.edit');
                Route::post('/update/{id}', [PrivacyController::class, 'update'])->name('privacyy.update');
                Route::post('/delete/{id}', [PrivacyController::class, 'delete'])->name('privacyy.delete');
            });
            Route::prefix('team')->group(function () {
                Route::get('/team/add', [PrivacyController::class, 'teamindex'])->name('team.add');
                Route::post('/team/new', [PrivacyController::class, 'teamcreate'])->name('team.new');
                Route::get('/team/manage', [PrivacyController::class, 'teammanage'])->name('team.manage');
                Route::get('/team/edit/{id}', [PrivacyController::class, 'teamedit'])->name('team.edit');
                Route::post('/team/update/{id}', [PrivacyController::class, 'teamupdate'])->name('team.update');
                Route::post('/team/delete/{id}', [PrivacyController::class, 'teamdelete'])->name('team.delete');
            });
            Route::prefix('propertyy')->group(function () {
                Route::get('/add', [PropertyController::class, 'index'])->name('propertyy.add');
                Route::post('/new', [PropertyController::class, 'create'])->name('propertyy.new');
                Route::get('/manage', [PropertyController::class, 'manage'])->name('propertyy.manage');
                Route::get('/edit/{id}', [PropertyController::class, 'edit'])->name('propertyy.edit');
                Route::post('/update/{id}', [PropertyController::class, 'update'])->name('propertyy.update');
                Route::post('/delete/{id}', [PropertyController::class, 'delete'])->name('propertyy.delete');
            });
            Route::prefix('about')->group(function () {
                Route::get('/add', [AboutController::class, 'index'])->name('about.add');
                Route::post('/new', [AboutController::class, 'create'])->name('about.new');
                Route::get('/manage', [AboutController::class, 'manage'])->name('about.manage');
                Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
                Route::post('/update/{id}', [AboutController::class, 'update'])->name('about.update');
                Route::post('/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');
            });
            Route::prefix('client')->group(function () {
                Route::get('/add', [ClientController::class, 'index'])->name('client.add');
                Route::post('/new', [ClientController::class, 'create'])->name('client.new');
                Route::get('/manage', [ClientController::class, 'manage'])->name('client.manage');
                Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
                Route::post('/update/{id}', [ClientController::class, 'update'])->name('client.update');
                Route::post('/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');
            });
            Route::prefix('practice')->group(function () {
                Route::get('/add', [PracticeController::class, 'index'])->name('practice.add');
                Route::post('/new', [PracticeController::class, 'create'])->name('practice.new');
                Route::get('/manage', [PracticeController::class, 'manage'])->name('practice.manage');
                Route::get('/edit/{id}', [PracticeController::class, 'edit'])->name('practice.edit');
                Route::post('/update/{id}', [PracticeController::class, 'update'])->name('practice.update');
                Route::post('/delete/{id}', [PracticeController::class, 'delete'])->name('practice.delete');
            });
            Route::prefix('gallery')->group(function () {
                Route::get('/add', [GalleryController::class, 'index'])->name('gallery.add');
                Route::post('/new', [GalleryController::class, 'create'])->name('gallery.new');
                Route::get('/manage', [GalleryController::class, 'manage'])->name('gallery.manage');
                Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
                Route::post('/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
                Route::post('/delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');
            });
        });
    });

    