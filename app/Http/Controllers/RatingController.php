<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allRatings= Rating::all()->toArray();
        //combo of var dump and die
        dd($allRatings);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one rating';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add rating';
    }
    //shows the form to save a role
    public function save(){
        echo 'save rating';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit rating';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to rating';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete rating';
        dd('here');
    }
}
