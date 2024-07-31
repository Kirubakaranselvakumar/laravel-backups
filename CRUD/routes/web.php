
 <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//     Route :: get('/user-form',function(){
//         $title = "Send User Information";
//         return view('user_form')->withTitle($title)->withTest('Correct');
//     });

//     Route :: post('get-userdata',function(Request $request){
//        $name = $request->input('name');
//        $age = $request->input('age');
//        $phone = $request->input('phone');

//        return redirect('user-form')->with('message','Success');

//     });




// Route :: get('page/{id}/{type?}',function($id, $type=null){
//     if($id=='first' && $type=='page'){
//         return 'first page';
//     }
//     else if($id == 'second' && $type=='number'){
//         return 'second number';
//     }
//     else if($id == 'third' &&  $type == null){
//         return 'third';
//     }
// })->name('page');


// Route :: view('simple-page' , 'page');



// Route :: prefix('gallery')->group(function(){
//     Route :: get('/photos',function(){
//         return '<h3> Photos Page </h3>';
//     });

//     Route :: get('/videos',function(){
//         return '<h3> Videos Page </h3>';
//     });

//     Route :: get('/documents',function(){
//         return '<h3> documents Page </h3>';
//     });

// });

Route :: get('month/{num}', function ($num){
    if($num==1){
        return 'JANUARY';
    }
    else if($num==2){
        return 'FEBRUARY';
    }
    else if($num==3){
        return 'MARCH';
    }
})->middleware('month')

?>
