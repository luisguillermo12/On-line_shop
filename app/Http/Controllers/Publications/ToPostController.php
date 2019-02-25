<?php

namespace Massaggi\Http\Controllers\Publications;

use Illuminate\Http\Request;
use Massaggi\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Massaggi\User;
use Massaggi\Publications;
use Massaggi\UserPublications;
use Massaggi\ParametersSystem;
use Massaggi\images;
use Illuminate\Support\Facades\Storage;
class ToPostController extends Controller
{

    public function index(){
        if (!Auth::guest()){
            	$parameter = ParametersSystem::where('code', 2)->first(); 
                $publications = Publications::where('user_id',Auth::user()->id)->get();
                    return view('publications.publications')
                    ->with('parameter', $parameter)
                    ->with('publications', $publications);
        }else{
            return redirect()->route('login');
        }
    }
    public function create(){
        return view('publications.publications_create');
    }
    public function store(Request $request){
        

        $parameter = ParametersSystem::where('code', 2)->first(); 

    	$publication = new Publications ();
        $publication->name = $request->name;
        $publication->description = $request->description;
        $publication->price = $request->price;
        $publication->user_id = Auth::user()->id;
        $publication->save();

        $images = $request->file('images');
        $disco = Storage::disk('public');

          	    foreach ($request->file('images') as  $image) {

          	    $name=$image->getClientOriginalName();
          	    $extension = $image->getClientOriginalExtension();
                $image->move(public_path().'/images_publications/', $name);  
                $data[] = $name;
          	       
		           $image = New images ();
		           $image->route = $parameter->value.$name;
		           $image->name = $name;
		           $image->publication_id =$publication->id; 
		           $image ->save();

		       }


        alert()->success('publiacion creada', 'Satisfactoriamente');
        return redirect()->route('ToPost.index');

    }


}
