<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
   //shows all roles
   public function all(){
    //call the role model
    $allDesigns= Design::all()->toArray();
    //combo of var dump and die
    dd($allDesigns);
    //pass this data to view the file
}
//shows one row
public function one(){
    echo 'display one design';
}
//shows the form to add a role 
public function add(){
    echo 'add design';
}
//shows the form to save a role
public function save(){
    echo 'save design';
}
//shows the form to edit a role
public function edit(){
    echo 'edit design';
}
//shows the form to save changes made in a role
public function saveChanges(){
    echo 'save changes to design';
}
//shows the form to delete a role
public function delete($id){
    //echo 'delete design';
    dd('here');
}
}
