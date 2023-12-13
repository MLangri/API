<?php

namespace App\Http\Controllers;

use App\Models\user_skills;
use Illuminate\Http\Request;

class user_skillsController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allUserSkills= user_skills::all()->toArray();
        //combo of var dump and die
        dd($allUserSkills);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one User Skill';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add User Skill';
    }
    //shows the form to save a role
    public function save(){
        echo 'save User Skill';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit User Skill';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to User Skill';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete User Skill';
        dd('here');
    }
}
