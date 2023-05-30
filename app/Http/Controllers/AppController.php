<?php

namespace App\Http\Controllers;

use App\Models\bdlaravel10;
use Illuminate\Http\Request;


class AppController extends Controller
{
    public function index(){
        return view('pages.index');

    }
    public function Acceuil(){
        return view('pages.Acceuil');
    }
    public function Ajouter(){
        return view('pages.Ajouter');
    }
    public function Liste(){
        return view('pages.Liste');
    }
    public function enregistrer(Request $request){
        $request->validate([
            'title'=> 'required|min:2',
            'prenom'=> 'required|min:2'
    
        ]);
        //extensier un objets 
        $events = new bdlaravel10();
        $events->title =$request->title;
        $events->title =$request->description;
        $events->title =$request->start_date;
        $events->title =$request->end_date;
        $events->title =$request->events;
        $events->save();


       return redirect('/ajouter')->with('status','votre évènement a bien étè enregistrer');


    }
    public function sup(){
        return redirect()->route('pages.liste');
    }
}
