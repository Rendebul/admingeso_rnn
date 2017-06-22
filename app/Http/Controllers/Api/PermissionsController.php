<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\ApiController;
use Spatie\Permission\Models\Permission;

class PermissionsController extends ApiController
{
    public function index()
    {
        return Permission::all();
    }
}
