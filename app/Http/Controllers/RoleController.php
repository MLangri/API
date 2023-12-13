<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allRoles= Role::all()->toArray();
        //combo of var dump and die
        dd($allRoles);
        //pass this data to view the file
        return view('role.all',['role'=>$allRoles]);
    }
    //shows one row
    public function one(){
        //echo 'display one role in Role';
    }
    //shows the form to add a role 
    public function add(){
        //echo 'add method in Role';
        return view('role.add');
    }
    //shows the form to save a role
    public function save(Request $request){
        //echo 'save method in Role';
        $validate=$request->validate([
            'role_name'=>'required|min:2|max:10|alpha'
        ]);
        $role_name=$request->get('role_name');
        $role=new Role();
        $role->name=$role_name;
        $role->save();

        return redirect('roles')->with('status',"$role_name role saved");
    }
    //shows the form to edit a role
    public function edit($id){
        //echo 'edit method in Role';
        $role= Role::find($id);

        if($role){
            $role->delete();
            return redirect('role.edit')->with('status',"Role deleted");
        }
        else{
            return redirect('roles')->with('status',"Role does not exist");
        }
    }
    //shows the form to save changes made in a role
    public function saveChanges(Request $request, $id){
        //echo 'save changes to method in Role';
        //dd($id);
        $validate=$request->validate([
            'role_name'=>'required|min:2|max:10|alpha'
        ]);
        $role_name=$request->get('role_name');
        $role=Role::find($id);
        if($role){
            $role->name=$role_name;
            $role->save();
    
            return redirect('roles')->with('status',"$role_name role updated");
        }
        else{
            return redirect('roles');
        }
       
    }
    //shows the form to delete a role
    public function delete($id){
        //echo 'delete method in Role';
        $role= Role::find($id);

        if($role){
            $role->delete();
            return redirect('roles')->with('status',"Role deleted");
        }
        else{
            return redirect('roles')->with('status',"Role does not exist");
        }
        //dd('here');
    }

}
