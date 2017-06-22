<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\User;
use App\Filters\UserFilter;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class UsersController extends ApiController
{
    public function index(UserFilter $filter)
    {
        $query = User::with('roles:id,label')->filter($filter);

        return $this->respondIndex($query);
    }

    public function show(User $user)
    {
        $user->roles = $user->roles()->pluck('name');

        return $user;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'cargo'    => 'required|max:255',
            'telefono' => 'required',
            'roles'    => 'required|array',
        ]);

        $user = User::create($request->all())->syncRoles($request->roles);

        return $this->respondStore();
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'     => 'sometimes|required|max:255',
            'email'    => 'sometimes|required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|confirmed|min:6',
            'roles'    => 'sometimes|required'
        ]);

        $user->fill($request->all())->save();

        $user->syncRoles($request->roles);

        return $this->respondUpdate();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return $this->respondDestroy();
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        $user = $request->user();
        $user->password = $request->password;
        $user->save();

        return $this->respond([
            'message' => 'Clave actualizada correctamente'
        ]);
    }
}
