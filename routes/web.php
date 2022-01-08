<?php


use App\Http\Livewire\Pages\CartComponent;
use App\Http\Livewire\Pages\CheckoutComponent;
use App\Http\Livewire\Pages\HomepageComponent;
use App\Http\Livewire\Pages\DetailsComponent;
use App\Http\Livewire\Pages\ShopComponent;


use App\Http\Livewire\SearchResultsComponent;
use App\Http\Livewire\CategoryComponent;
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

// Route::get('/', function () {
//     return view('');
// });
// Route::get('/', function () {
//     return view('homepage');
// });
Route::get('/', HomepageComponent::class);
Route::get('/parduotuve', ShopComponent::class)->name('shop');
Route::get('/krepselis', CartComponent::class)->name('cart');
Route::get('/preke/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/prekiu-kategorija/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/paieska', SearchResultsComponent::class)->name('product.search');
// Route::get('/', CheckoutComponent::class);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
