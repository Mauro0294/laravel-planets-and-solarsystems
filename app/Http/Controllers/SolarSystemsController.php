<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SolarSystems;

class SolarSystemsController extends Controller
{
    public function index()
    {
        // Alle sterrenstelsels weergeven
        $solarsystems = SolarSystems::all();
        $solarsystems = SolarSystems::withCount(['planets'])->get();

        echo view('solarsystems', ['solarsystems'=>$solarsystems])->render();
        echo "
        <a href='../solarsystems/insert'>Insert new solar system!</a>
        <br>
        <a href='./planets'>Look at the planets!</a>
        ";
    }
    public function show($id)
    {
        // Alleen de gevraagde sterrenstelsels weergeven
        $solarsystems = SolarSystems::with('planets')->where('id', $id)->get();
       
        echo view('solarsystems', ['solarsystems'=>$solarsystems]);
        echo "
        <a href='$id/edit'>Edit solar system data</a><br>
        <a href='../solarsystems'>Go back!</a>
        ";
    }
    public function insertForm()
    {
        return view('insertsolarsystems');
    }
    public function insertData(Request $request) {
        $name = $request->input('name');
        $age_in_years = $request->input('age_in_years');
        $data = array('name' => $name, 'age_in_years' => $age_in_years);
        SolarSystems::insert($data);
        return redirect('./solarsystems');
    }
    public function editSolarSystemDataForm($id)
    {
        $dataSolarSystem = SolarSystems::where('id', $id)->first();
        echo view('editsolarsystemsdataform', ['dataSolarSystem' => $dataSolarSystem]);
    }
    public function editSolarSystemData($id, Request $request)
    {
        echo SolarSystems::where('id', $id)->update([
        'name' => $request->input('name'),
        'age_in_years' => $request->input('age_in_years'),
    ]);
        return redirect('./solarsystems');
    }
}
