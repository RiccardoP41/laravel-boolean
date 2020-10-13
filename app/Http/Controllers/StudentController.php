<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;

    public function __construct(){
        $this->students = config("students");
    }

    public function studenti(){
        $data = $this->students;
        return view("studenti", compact("data"));
    }

    public function show($id){
        if(!array_key_exists($id,$this->students)){
            abort(404);
        }
        $student = $this->students[$id];
        return view("show",compact("student"));
    }

    //con slug
    public function slug($slug){
        $trovato = false;
        foreach ($this->students as $studente) {
            if($studente["slug"] == $slug){
                //se trova un valore, lo memorizza in una variabile
                $student = $studente;
                //imposta la variabile a "true", precedentemente "false"
                $trovato = true;
            }
        }
        if ($trovato) {
            // se ha trovato il valore
            return view("slug", compact("student"));
        } else {
            //se non ha trovato il valore
            abort(404);
        }

    }
}
