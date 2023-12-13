<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allTowns= Town::all()->toArray();
        //combo of var dump and die
        dd($allTowns);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one Town';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add Town';
    }
    //shows the form to save a role
    public function save(){
        echo 'save Town';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit Town';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to Town';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete Town';
        dd('here');
    }
}
