<?php

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
/*
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/new', function () {
    return view('new');
})->name('new');

Route::POST('/vacations/store', function () {
    try{  
        DB::insert('insert into vacations (title, company, description, type, price) values (?, ?, ?, ?, ?)', [request('title'), request('comp'), request('disc'), request('type'),request('price')]);
        return view('vacations.store');
    }
    catch (Exception $e) {
        $file="../errors/errors.txt";
        file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX);
        return view('vacations.err'); 
    }
})->name('vacations.store');

Route::get('/vacations/created', function () {  
    return view('vacations.created');
})->name('vacations.created');

Route::get('/vacations/show/all', function () {  
    $i=DB::table('vacations')->get();
    return view('vacations.show.all', [
        'items'=>$i
    ]);
})->name('show.all');

Route::get('/vacations/show/typec', function () {  
    $i=DB::table('vacations')->whereIn('type', ['C#', 'C++'])->get();
    return view('vacations.show.c', [
        'items'=>$i
    ]);
})->name('show.typec');

Route::get('/vacations/show/typejs', function () {  
    $i=DB::table('vacations')->whereIn('type', ['Java Script', 'React','Angular'])->get();
    return view('vacations.show.js', [
        'items'=>$i
    ]);
})->name('show.typejs');

Route::get('/vacations/show/typephp', function () {  
    $i=DB::table('vacations')->whereIn('type', ['PHP', 'Ruby'])->get();
    return view('vacations.show.php', [
        'items'=>$i 
    ]);
})->name('show.typephp');

Route::get('/vacations/show/typeother', function () {  
    $i=DB::table('vacations')->whereIn('type', ['Pyton', 'Assembler'])->get();
    return view('vacations.show.other', [
        'items'=>$i
    ]);
})->name('show.typeother');

Route::get('/vacations/show/{id}', function ($id) {  
    $i=DB::table('vacations')->where('id',$id)->get();
    return view('vacations.show.vacshow', [
        'items'=>$i
    ]);
})->name('show.vacshow');*/

Route::get('/', 'WorkController@home')->name('home');

Route::get('/new', 'WorkController@new')->name('new');

Route::get('/getstarted', 'WorkController@get')->name('get');

Route::get('/login', 'WorkController@login')->name('login');

Route::get('/register', 'WorkController@register')->name('register');

Route::post('/logination', 'WorkController@Logination')->name('logination');

Route::post('/registerstore', 'WorkController@Registration')->name('registerstore');

Route::post('/vacations/store', 'WorkController@Vacations')->name('vacations.store');

Route::get('/vacations/created', 'WorkController@VacationsCreated')->name('vacations.created');

Route::get('/vacations/show/all', "WorkController@VacationsShowAll")->name('show.all');

Route::get('/vacations/show/typec', "WorkController@VacationsShowTypeC")->name('show.typec');

Route::get('/vacations/show/typejs', "WorkController@VacationsShowTypeJS")->name('show.typejs');

Route::get('/vacations/show/typephp', "WorkController@VacationsShowTypePHP")->name('show.typephp');

Route::get('/vacations/show/typeother', "WorkController@VacationsShowTypeOther")->name('show.typeother');

Route::get('/vacations/show/{id}', "WorkController@VacShow")->name('show.vacshow');

