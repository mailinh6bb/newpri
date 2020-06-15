<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Permission;
use App\Models\Role;
class RoleController extends Controller
{
    // show các role
	public function index()
	{
   $groupUser = Role::with('users')->get();
   return view('backend.user.userEmployee',['groupUser' => $groupUser]);
 }
    // tạo admin user
 public function create()
 {
  $listPermission = Permission::all();
  return view('backend.user.userRoleCreate',compact('listPermission'));
}

public function store(Request $request)
{
 $this -> validate($request, [
  'name' => 'required|unique|min:6',
  'permissionID' => 'required'
],

[
  'name.required' => 'Vui lòng nhập tên nhóm quyền.',
  'name.min' => 'Tên không được dưới 6 ký tự.',
  'name.unique' => 'Tên quyền đã tồn tại',
  'permissionID.required' => "Vui lòng chọn quyền"

]);
 $dataRole = $request->only('name');
 $role = Role::create($dataRole);

 $dataPermission = $request->permissionID;
 foreach($dataPermission as $permissionID ){
  \DB::table('role_permissions')->insert([
    'role_id'=>$role->id,
    'permission_id'=>$permissionID
  ]);
}
return redirect()-> route('create.role')->with(['thongbao' => 'Thêm Nhóm Quyền Thành Công']);
}

public function edit($id)
{
 $role = Role::find($id);
 $listPermission = Permission::all();
 $permissionID = \DB::table('role_permissions')->where('role_id',$id)->pluck('permission_id');
 $data = [
  'role'=>$role,
  'listPermission'=>$listPermission,
  'permissionID' => $permissionID
];
return view('backend.user.userRoleEdit',$data);
}

public function update(Request $request, $id)
{
 $role = Role::find($id);
 $dataRole = $request->only('name');
 $role->update($dataRole);

 $listPermission = $request->permissionID;
 \DB::table('role_permissions')->where('role_id',$id)->delete();
 foreach($listPermission as $permissionID){
  \DB::table('role_permissions')->insert([
    'role_id'=>$role->id,
    'permission_id' =>$permissionID
  ]);
} 
return redirect()->route('get.backend.list.employee');
}

public function destroy($id)
{
 $role = Role::find($id);
 \DB::table('role_permissions')->where('role_id',$id)->delete();
 $role->forceDelete();
 return redirect()->route('get.backend.list.employee');

}
}