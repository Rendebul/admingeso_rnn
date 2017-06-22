<?php

namespace App\Http\Controllers\Api;

use App\Comuna;
use App\Filters\ComunaFilter;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ComunaController extends ApiController
{
    public function index(ComunaFilter $filter)
    {
        $query = Comuna::with('servicio:id,name')->filter($filter);

        return $this->respondIndex($query);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|max:255',
            'code'      => 'required|max:255|unique:comunas',
            'servicio_id' => 'required',
        ]);

        Comuna::create($request->all());

        return $this->respondStore();
    }

    public function show(Comuna $comuna)
    {
        if (request()->has('with')) {
            $comuna->load(request()->input('with'));
        }
        return $comuna;
    }

    public function update(Request $request, Comuna $comuna)
    {
        $this->validate($request, [
            'name'      => 'sometimes|required|max:255',
            'code'      => 'sometimes|required|max:255|unique:comunas,code,' . $comuna->id,
            'servicio_id' => 'sometimes|required',
        ]);

        $comuna->fill($request->all())->save();

        return $this->respondUpdate();
    }

    public function destroy(Comuna $comuna)
    {
        $comuna->delete();

        return $this->respondDestroy();
    }
}
