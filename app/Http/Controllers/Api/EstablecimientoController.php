<?php

namespace App\Http\Controllers\Api;

use App\Establecimiento;
use App\Filters\EstablecimientoFilter;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EstablecimientoController extends ApiController
{
    public function index(EstablecimientoFilter $filter)
    {
        $query = Establecimiento::with('comuna:id,name')->filter($filter);

        return $this->respondIndex($query);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|max:255|',
            'code'      => 'sometimes|required|max:255|unique:establecimientos,code,NULL,id,comuna_id,' . $request->comuna_id,
            'comuna_id' => 'required',
        ]);

        Establecimiento::create($request->all());

        return $this->respondStore();
    }

    public function show(Establecimiento $establecimiento)
    {
        return $establecimiento;
    }

    public function update(Request $request, Establecimiento $establecimiento)
    {
        $this->validate($request, [
            'name'      => 'sometimes|required|max:255',
            'code'      => 'sometimes|required|max:255|unique:establecimientos,code,'. $establecimiento->id . ',id,comuna_id,' . $request->comuna_id,
            'comuna_id' => 'sometimes|required',
        ]);

        $establecimiento->fill($request->all())->save();

        return $this->respondUpdate();
    }

    public function destroy(Establecimiento $establecimiento)
    {
        $establecimiento->delete();

        return $this->respondDestroy();
    }
}
