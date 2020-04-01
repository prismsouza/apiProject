<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnityRequest;
use App\Http\Resources\Unity\UnityCollection;
use App\Http\Resources\Unity\UnityResource;
use App\Model\Unity;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnityController
{
    public function index()
    {
        //return Unity::all();
        return UnityCollection::collection(Unity::all());
    }
    public function show(Unity $unity)
    {
        return new UnityResource($unity);
    }

    public function showByName(Unity $unity)
    {
        echo " oi ";
        return new UnityResource($unity);
    }

    public function store(UnityRequest $request)
    {
        $unity = new Unity;
        $unity->unity_name = $request->unity_name;
        $unity->unity_description = $request->unity_description;
        $unity->save();

        return response([
            'data' => new UnityResource($unity)
        ], Response::HTTP_CREATED);
    }
    public function edit(Unity $unity) { }

    public function update(Request $request, Unity $unity)
    {
        $unity->update($request->all());

        return response([
            'data' => new UnityResource($unity)
        ], Response::HTTP_CREATED);
    }
    public function destroy(Unity $unity)
    {
        $unity->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
