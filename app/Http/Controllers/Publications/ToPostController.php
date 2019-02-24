<?php

namespace Massaggi\Http\Controllers\Publications;

use Illuminate\Http\Request;
use Massaggi\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Massaggi\User;
use Massaggi\Publications;
use Massaggi\UserPublications;
use Massaggi\images;
use Massaggi\ParametersSystem;
use Illuminate\Support\Facades\Storage;

class ToPostController extends Controller
{

    public function index(){
    	$publications = Publications::get();
    	return view('publications.publications');
    }
    public function create(){
        return view('publications.publications_create');
    }
    public function store(Request $request){
        

        $parameter = ParametersSystem::where('code', 2)->where('name', 'profile_paths')->first(); 

    	$publication = new Publications ();
        $publication->name = $request->name;
        $publication->description = $request->description;
        $publication->price = $request->price;
        $publication->save();

        $user_publication = new UserPublications;
        $user_publication->user_id = Auth::user()->id;
        $user_publication->publication_id = $publication->id;
        $user_publication->save();

        $images = $request->file('images');
        $disco = Storage::disk('public');

          	    foreach ($request->file('images') as  $image) {

          	    $name=$image->getClientOriginalName();
          	    $extension = $image->getClientOriginalExtension();
                $image->move(public_path().'/images_publications/', $name);  
                $data[] = $name;
          	       
		           $image = New images ();
		           $image->route = '/images_publications/'.$name;
		           $image->name = $name;
		           $image ->save(); 

		       }


        alert()->success('publiacion creada', 'Satisfactoriamente');
        return redirect()->route('ToPost.index');

    }


}
