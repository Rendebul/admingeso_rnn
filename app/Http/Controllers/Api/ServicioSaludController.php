<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\ServicioSalud;
use App\Filters\ServicioSaludFilter;
use App\Http\Controllers\ApiController;

class ServicioSaludController extends ApiController
{
    public function index(ServicioSaludFilter $filter)
    {
        $query = ServicioSalud::with('region:id,name')->filter($filter);

        return $this->respondIndex($query);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|max:255',
            'code'      => 'required|max:255|unique:servicios',
            'region_id' => 'required',
        ]);

        ServicioSalud::create($request->all());

        return $this->respondStore();
    }

    public function show(ServicioSalud $serviciosSalud)
    {
        if (request()->has('with')) {
            $serviciosSalud->load(request()->input('with'));
        }

        return $serviciosSalud;
    }

    public function update(Request $request, ServicioSalud $serviciosSalud)
    {
        $this->validate($request, [
            'name'      => 'sometimes|required|max:255',
            'code'      => 'sometimes|required|max:255|unique:servicios,code,' . $serviciosSalud->id,
            'region_id' => 'sometimes|required',
        ]);

        $serviciosSalud->fill($request->all())->save();

        return $this->respondUpdate();
    }

    public function destroy(ServicioSalud $serviciosSalud)
    {
        $serviciosSalud->delete();

        return $this->respondDestroy();
    }
}
