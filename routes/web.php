<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

=======
use App\Http\Controllers\TaskController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
>>>>>>> b61c129 (commit)
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

<<<<<<< HEAD

Route::get('/task/{id}', function ($id) {
    $tasks=['1'=>'task1','2'=>'task2','3'=>'task3'];
    $task=$tasks[$id];

    return view('task',compact('task'));
});
=======
// Route::get('/task/{id}', function ($id) {
//     $tasks=['1'=>'task1','2'=>'task2','3'=>'task3'];
//     $task=$task[$id];

//     return view('task',compact('task'));
// });
>>>>>>> b61c129 (commit)




Route::get('/contact', function () {

    return view('contact_us');
});





Route::post('/contact', function () {
$name=$_POST['name'];
    return view('contact_us',compact('name'));
});





<<<<<<< HEAD
Route::get('/about', function () {
    $name ='basel';
    $age=25;
    //$tasks=['task1','task2','task3'];
    $tasks=['1'=>'task1','2'=>'task2','3'=>'task3'];
  /*  return view('about',[
        'namea'=>$name,
        'age'=>$age
    ]);
    */

    return view('about',compact('tasks'));
});
=======
// Route::get('/about', function () {
//     $name ='basel';
//     $age=25;
//     //$tasks=['task1','task2','task3'];
//     $tasks=['1'=>'task1','2'=>'task2','3'=>'task3'];
//   /*  return view('about',[
//         'namea'=>$name,
//         'age'=>$age
//     ]);
//     */

//     return view('about',compact('tasks'));
// });
// Route::get('tasks', function () {
//     $tasks= DB::table('tasks')->get();
//     return view('tasks',compact('tasks'));

// });

Route::get('tasks',[TaskController::class,'index'])->name('tasks.index');

Route::get('/tasks/{id}',[TaskController::class,'show'])->name('tasks.show');
Route::post('store',[TaskController::class,'store'])->name('tasks.store');

>>>>>>> b61c129 (commit)
