<?php

namespace App\Http\Controllers;

use App\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();

        return inertia('Permission/Index',[
            'permissions' => $permissions
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return inertia('Permission/Show',[
            'permission' => $permission
        ]);
    }
}
