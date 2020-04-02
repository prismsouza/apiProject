<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\Http\Resources\Unit\UnitCollection;
use App\Http\Resources\Unit\UnitResource;
use App\Model\Unit;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnitController
{
    public function index()
    {
        //return Unit::all();
        return UnitCollection::collection(Unit::all());
    }
    public function show(Unit $unit)
    {
        return new UnitResource($unit);
    }

    public function getUnitByName($unit_name)
    {
        $unit = Unit::where('unit_name', $unit_name)->first();
        return new UnitResource($unit);
    }

    public function store(UnitRequest $request)
    {
        $unit = new Unit;
        $unit->unit_id = $request->unit_id;
        $unit->unit_name = $request->unit_name;
        $unit->unit_description = $request->unit_description;
        $unit->save();

        return response([
            'data' => new UnitResource($unit)
        ], Response::HTTP_CREATED);
    }
    public function edit(Unit $unit) { }

    public function update(Request $request, Unit $unit)
    {
        $unit->update($request->all());

        return response([
            'data' => new UnitResource($unit)
        ], Response::HTTP_CREATED);
    }
    public function destroy(Unit $unit)
    {
        $unit->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
