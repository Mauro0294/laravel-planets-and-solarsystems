<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\SolarSystems;

class PlanetController extends Controller
{
    public function home()
    {
        echo "Welcome at the home pagina!<br>
        <a href='planets'>Click here to see all the planets!</a>";
    }
    // Alle planeten weergeven
    public function index()
    {
        $planets = Planet::with('solar')->get();

        echo view('planets', ['planets'=>$planets]);
        echo "
        <a href='../planets/insert'>Insert new planets!</a>
        <br>
        <a href='/solarsystems'>Look at the solar systems!</a>
        ";
    }
    public function show($planeet)
    {
    // Alleen de gevraagde planeten weergeven
    $planets = Planet::with('solar')->where('name', $planeet)->get();
    echo view('planets', ['planets' => $planets]);
    echo "
    <a href='$planeet/edit'>Edit planet data</a><br>
    <a href='$planeet/delete'>Delete planet</a><br>
    <a href='../planets'>Go back!</a>
    ";
    }
    public function insertForm()
    {
        $solarsystems = SolarSystems::all();
        return view('insertplanets', ['solarsystems' => $solarsystems]);
    }
    public function insertData(Request $request) {
        $name = $request->input('name');
        $description = $request->input('description');
        $size_in_km = $request->input('size_in_km');
        $solar_systems_id = $request->input('solar_systems_id');
        $data = array('name' => $name, 'description' => $description, 'size_in_km' => $size_in_km, 'solar_systems_id' => $solar_systems_id);
        Planet::insert($data);
        return redirect('./planets');
    }
    public function editPlanetDataForm($planeet)
    {
        $dataPlanet = Planet::where('name', $planeet)->first();
        echo view('editplanetdataform', ['dataPlanet' => $dataPlanet]);
    }
    public function editPlanetData($planeet, Request $request)
    {
        echo Planet::where('name', strval($planeet))->update([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'size_in_km' => $request->input('size_in_km'),
        'solar_systems_id' => $request->input('solar_systems_id')
    ]);
        return redirect('./planets');
    }
    public function deletePlanet($planeet) {
        Planet::delete('delete from planets where name = ?',[$planeet]);
        return redirect('./planets');
    }
    public function deletePlanetForm($planeet) {
        return view('removeplanetform');
    }
}