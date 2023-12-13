<?php

namespace App\Http\Controllers;

use App\Models\SubCounty;
use Illuminate\Http\Request;

class SubCountyController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allSubCounties= SubCounty::all()->toArray();
        //combo of var dump and die
        dd($allSubCounties);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one SubCounty';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add a SubCounty';
    }
    //shows the form to save a role
    public function save(){
        echo 'save SubCounty';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit SubCounty';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to SubCounty';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete SubCounty';
        dd('here');
    }
}
