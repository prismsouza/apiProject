<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Http\Resources\Person\PersonCollection;
use App\Http\Resources\Person\PersonResource;
use App\Model\Person;
use App\Model\Unity;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonController extends Controller
{
    public function index()
    {
        //return Person::all();
        return PersonCollection::collection(Person::all());
    }

    public function show(Person $person)
    {
        return new PersonResource($person);
    }

    public function filter(Unity $unity_id)
    {
        return PersonCollection::collection(Person::where('unity_id', $unity_id->unity_id)->get());
    }

    public function create() {

    }
    public function store(PersonRequest $request)
    {
        $person = new Person;
        $person->masp = $request->masp;
        $person->name = $request->name;
        $person->cpf = $request->cpf;
        $person->save();

        return response([
            'data' => new PersonResource($person)
        ], Response::HTTP_CREATED);
    }
    public function edit(Person $person) { }

    public function update(Request $request, Person $person)
    {
        $person->update($request->all());

        return response([
            'data' => new PersonResource($person)
        ], Response::HTTP_CREATED);
    }
    public function destroy(Person $person)
    {
        $person->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
