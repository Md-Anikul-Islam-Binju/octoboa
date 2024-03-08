<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogAllController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\PortfolioManageController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\TeamMemberController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PrintingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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


Route::get('locale/{locale}', [LanguageController::class,'changeLocale'])->name('change.language');
Route::get('/',[HomeController::class,'index']);
//3D Printing
Route::get('/our-printing',[PrintingController::class,'printing'])->name('printing');
//About
Route::get('/about-us',[AboutController::class,'about'])->name('about.us');
//Blog
Route::get('/our-blog',[BlogController::class,'blog'])->name('all.blog');
Route::get('/our-blog-details',[BlogController::class,'blogDetails'])->name('blog.details');
//Contact
Route::get('/our-contact',[ContactController::class,'contact'])->name('all.contact');
//Our Service
Route::get('/our-service',[ServiceController::class,'service'])->name('all.service');
Route::get('/all-printing-service',[ServiceController::class,'printingService'])->name('all.printing.service');
//Portfolio
Route::get('/company-portfolio',[PortfolioController::class,'portfolio'])->name('all.portfolio');
//Shop
Route::get('/our-shop',[ShopController::class,'shop'])->name('all.shop');
//Team
Route::get('/our-team',[TeamController::class,'team'])->name('our.team');
Route::get('/single-team',[TeamController::class,'singleTeam'])->name('single.team');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    //category
    Route::get('/category', [CategoryController::class,'index'])->name('category');
    Route::post('/category-store', [CategoryController::class,'store'])->name('category.store');
    Route::put('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    //team
    Route::get('/teamMember', [TeamMemberController::class,'index'])->name('teamMember');
    Route::post('/teamMember-store', [TeamMemberController::class,'store'])->name('teamMember.store');
    Route::put('/teamMember-update/{id}', [TeamMemberController::class, 'update'])->name('teamMember.update');
    Route::get('/teamMember-delete/{id}', [TeamMemberController::class, 'destroy'])->name('teamMember.delete');

    //service
    Route::get('/service', [ServicesController::class,'index'])->name('service');
    Route::post('/service-store', [ServicesController::class,'store'])->name('service.store');
    Route::put('/service-update/{id}', [ServicesController::class, 'update'])->name('service.update');
    Route::get('/service-delete/{id}', [ServicesController::class, 'destroy'])->name('service.delete');

    //Faq
    Route::get('/faq', [FaqController::class,'index'])->name('faq');
    Route::post('/faq-store', [FaqController::class,'store'])->name('faq.store');
    Route::put('/faq-update/{id}', [FaqController::class, 'update'])->name('faq.update');
    Route::get('/faq-delete/{id}', [FaqController::class, 'destroy'])->name('faq.delete');

    //Tag
    Route::get('/tag', [TagController::class,'index'])->name('tag');
    Route::post('/tag-store', [TagController::class,'store'])->name('tag.store');
    Route::put('/tag-update/{id}', [TagController::class, 'update'])->name('tag.update');
    Route::get('/tag-delete/{id}', [TagController::class, 'destroy'])->name('tag.delete');

    //Slider
    Route::get('/slider', [SliderController::class,'index'])->name('slider');
    Route::post('/slider-store', [SliderController::class,'store'])->name('slider.store');
    Route::put('/slider-update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider-delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');

    //Blog
    Route::get('/blog', [BlogAllController::class,'index'])->name('blog');
    Route::post('/blog-store', [BlogAllController::class,'store'])->name('blog.store');
    Route::put('/blog-update/{id}', [BlogAllController::class, 'update'])->name('blog.update');
    Route::get('/blog-delete/{id}', [BlogAllController::class, 'destroy'])->name('blog.delete');

    //Portfolio
    Route::get('/portfolio', [PortfolioManageController::class,'index'])->name('portfolio');
    Route::post('/portfolio-store', [PortfolioManageController::class,'store'])->name('portfolio.store');
    Route::put('/portfolio-update/{id}', [PortfolioManageController::class, 'update'])->name('portfolio.update');
    Route::get('/portfolio-delete/{id}', [PortfolioManageController::class, 'destroy'])->name('portfolio.delete');

    //Testimonial
    Route::get('/testimonial', [TestimonialController::class,'index'])->name('testimonial');
    Route::post('/testimonial-store', [TestimonialController::class,'store'])->name('testimonial.store');
    Route::put('/testimonial-update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/testimonial-delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.delete');
});

require __DIR__.'/auth.php';
