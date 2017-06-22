<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Region;
use App\Filters\RegionFilter;
use App\Http\Controllers\ApiController;

class RegionController extends ApiController
{

    public function index(RegionFilter $filter)
    {
        $query = Region::filter($filter);

        return $this->respondIndex($query);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'code' => 'required|max:255|unique:regions',
        ]);

        Region::create($request->all());

        return $this->respondStore();
    }

    public function show(Region $region)
    {
        if (request()->has('with')) {
            $region->load(request()->input('with'));
        }
        return $region;
    }

    public function update(Request $request, Region $region)
    {
        $this->validate($request, [
            'name' => 'sometimes|required|max:255',
            'code' => 'sometimes|required|max:255|unique:regions,code,' . $region->id,
        ]);

        $region->fill($request->all())->save();

        return $this->respondUpdate();
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return $this->respondDestroy();
    }
}
