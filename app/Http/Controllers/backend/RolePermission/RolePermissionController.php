<?php

namespace App\Http\Controllers\backend\RolePermission;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use SweetAlert2\Laravel\Swal;

class RolePermissionController extends Controller
{
    //* CreateUser
    public function createUser(){
        $metaTitle = 'Create User';
        return view('backend.rolePermission.createUser',compact('metaTitle'));
    }

    //*User List
    public function listUsers(){
        $metaTitle = 'List of Users';
        $users = User::get();
        return view('backend.rolePermission.listUser',compact('metaTitle', 'users'));
    }

    //* Edit User
    public function editUser($id){
        $metaTitle = 'Edit User';
        $editUser = User::find($id);
        return view('backend.rolePermission.editUser',compact('metaTitle', 'editUser'));
    }

    //*Create Role
    public function createRole(){
        $metaTitle = 'Role Creation';
        return view('backend.rolePermission.createRole',compact('metaTitle'));
    }

    //*Role List
    public function roleList($id){
        $user = User::find($id);
        $metaTitle = 'Role List';
        $roles = Role::latest()->get();
        return view('backend.rolePermission.roleList',compact('metaTitle', 'roles', 'user'));
    }

    //All Roles
    public function allRoles(){
        $metaTitle = 'All Roles';
        $roles = Role::get();
        return view('backend.rolePermission.allRoles',compact('metaTitle', 'roles'));
    }

    //Edit Roles
    public function editRole($id){
        $metaTitle = 'Edit Role';
        $role = Role::find($id);
        return view('backend.rolePermission.editRole',compact('metaTitle', 'role'));
    }

    //Permissions
    public function permissions($id){
        $metaTitle = 'Permissions';
        $role = Role::find($id);
        $permissions = Permission::latest()->get();
        return view('backend.rolePermission.permissions',compact('metaTitle', 'role', 'permissions'));
    }

    //* Store User
    public function storeUser(Request $request){
        $request->validate([
            'user_image' => 'required|max:2000|mimes:png,jpg,webp',
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required|min:6'
        ]);

        if($request->user_password != $request->user_confirm_password){
            return back()->with('pass_error', 'confirm password does not matched !');
        }

        $userInfo = new User();

        if($request->hasFile('user_image')){
            $image = $request->file('user_image');
            $uniName = 'user-image-' . time(). '-' . $image->getClientOriginalName();
            $image->storeAs('profile/', $uniName, 'public');
            $userInfo->image = $uniName;
        }

        $userInfo->name = $request->user_name;
        $userInfo->email = $request->user_email;
        $userInfo->password = Hash::make($request->user_password);
        $userInfo->save();

        Swal::toast([
            'title' => 'User created updated successfully!',
        ]);
        
        return back();
    }

    //Store Role
    public function storeRole(Request $request){
        $role = new Role();
        $role->name = $request->role_name;
        $role->guard_name = 'web';
        $role->save();
        Swal::toast([
            'title' => 'Role created successfully!',
        ]);
        return back();

    }

    //Update Role
    public function updateRole(Request $request, $id){
        $role = Role::find($id);
        $role->name = $request->role_name;
        $role->guard_name = 'web';
        $role->save();
        Swal::toast([
            'title' => 'Role updated successfully!',
        ]);
        return back();

    }

    //Store Role List
    public function roleListStore(Request $request){
        $user = User::find($request->user_id);
        $user->syncRoles($request->roles);
        Swal::toast([
            'title' => 'Role Assigned successfully!',
        ]);
        return back();
    }

    //Permissions Store
    public function permissionsStore(Request $request){
        $role = Role::find($request->role_name);
        $role -> syncPermissions($request->permissions);
        Swal::toast([
            'title' => 'Permissions Assigned successfully!',
        ]);
        return back();
    }

    //*Update User
    public function updateUser(Request $request, $id){
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required|min:6'
        ]);

        if($request->user_password != $request->user_confirm_password){
            return back()->with('pass_error', 'confirm password does not matched !');
        }

        $userInfo = User::find($id);

        if($request->hasFile('user_image')){
            $image = $request->file('user_image');
            $uniName = 'user-image-' . time(). '-' . $image->getClientOriginalName();
            $image->storeAs('profile/', $uniName, 'public');
            $userInfo->image = $uniName;
        }

        $userInfo->name = $request->user_name;
        $userInfo->email = $request->user_email;
        $userInfo->password = Hash::make($request->user_password);
        $userInfo->save();

        Swal::toast([
                'title' => 'User updated successfully!',
            ]);
        
        return back();
    }

    //Delete User
    public function deleteUser($id){
        User::find($id)->delete();

        Swal::toast([
            'title' => 'User deleted successfully!',
        ]);
        return back();
    }

    //Delete Role
    public function deleteRole($id){
        Role::find($id)->delete();

        Swal::toast([
            'title' => 'Role deleted successfully!',
        ]);
        return back();
    }

}
