<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        $data =  Db::select('SELECT * from vehicles LEFT JOIN body_types on vehicles.body_type_id = body_types.body_type_id 
        left join vmodels on vmodels.vmodels_id = vehicles.model_id LEFT JOIN colors on colors.color_id = vehicles.color_id left join fuel_types on fuel_types.fuel_type_id = vehicles.fuel_type_id left join 
        vehicle_types on vehicles.vehicle_type_id = vehicle_types.vehicle_type_id limit 2');

        return view('Home.index')->with('data', $data);
    }
    public function carhome()
    {

        $data =  Db::select('SELECT * from vehicles LEFT JOIN body_types on vehicles.body_type_id = body_types.body_type_id 
        left join vmodels on vmodels.vmodels_id = vehicles.model_id LEFT JOIN colors on colors.color_id = vehicles.color_id left join fuel_types on fuel_types.fuel_type_id = vehicles.fuel_type_id left join 
        vehicle_types on vehicles.vehicle_type_id = vehicle_types.vehicle_type_id where vehicle_types.vehicle_type_name like ?', ['car']);

        return view('Home.car-home')->with('data', $data);
    }
    public function bikehome()
    {

        $data =  Db::select('SELECT * from vehicles LEFT JOIN body_types on vehicles.body_type_id = body_types.body_type_id 
        left join vmodels on vmodels.vmodels_id = vehicles.model_id LEFT JOIN colors on colors.color_id = vehicles.color_id left join fuel_types on fuel_types.fuel_type_id = vehicles.fuel_type_id left join 
        vehicle_types on vehicles.vehicle_type_id = vehicle_types.vehicle_type_id where vehicle_types.vehicle_type_name like ?', ['bike']);

        return view('Home.bike-home')->with('data', $data);
    }

    public function brand(Request $req)
    {

        $brand = $req->brandname ?? "toyota";

        if ($brand != "") {
            $data = Db::select('select * from brands where brands_name = ?', [$brand]);
            $data = $data[0];
            $branddata = Db::select('SELECT * from vehicles left join vmodels on vmodels.vmodels_id = vehicles.model_id 
        LEFT join fuel_types on fuel_types.fuel_type_id = vehicles.fuel_type_id left join  brands on brands.brands_id = vmodels.brands_id where brands_name = ?', [$brand]);
        }


        return view('Home.brand', compact('data', 'branddata'));
    }

    public function about()
    {
        return view('Home.about');
    }
    public function contact()
    {
        return view('Home.contact');
    }
    public function contactstore(Request $req)
    {
        $req->validate([
            'name' => 'required | max: 50',
            'phone' => 'required | max: 14',
            'email' => 'required | max: 50',
            'area' => 'required | max: 50',
            'city' => 'required | max: 50',
            'state' => 'required | max: 50',
            'post_code' => 'required | max: 50',

        ]);

        Db::insert('insert into contact(fullname,phone,email,area,city,state,postalcode)
         values(?,?,?,?,?,?,?)', [$req->name, $req->phone, $req->email, $req->area, $req->city, $req->state, $req->post_code]);

        session()->flash('status', 'Successfully Form Submitted');

        return redirect('/contact-us');
    }


    public function listinventory(Request $req)
    {

       $search =  $req->searching ?? "";

        $data =  Db::select('SELECT * from vehicles LEFT JOIN body_types on vehicles.body_type_id = body_types.body_type_id 
        left join vmodels on vmodels.vmodels_id = vehicles.model_id LEFT JOIN colors on colors.color_id = vehicles.color_id left join fuel_types on fuel_types.fuel_type_id = vehicles.fuel_type_id left join 
        vehicle_types on vehicles.vehicle_type_id = vehicle_types.vehicle_type_id');

        if ($req->searching != "") {

            $search = $req->searching;

    
        if($search == "pasc" || $search == "pdesc"){
            
            if($search == "pasc"){
                $search = "asc";
            }
            else{
                $search = "desc";
            }

        $data =  Db::select("SELECT * from vehicles LEFT JOIN body_types on vehicles.body_type_id = body_types.body_type_id 
        left join vmodels on vmodels.vmodels_id = vehicles.model_id LEFT JOIN colors on colors.color_id = vehicles.color_id left join fuel_types on fuel_types.fuel_type_id = vehicles.fuel_type_id left join 
        vehicle_types on vehicles.vehicle_type_id = vehicle_types.vehicle_type_id order by vehicles.vehicle_price $search");
            
        }

        else{

            $data =  Db::select("SELECT * from vehicles LEFT JOIN body_types on vehicles.body_type_id = body_types.body_type_id 
        left join vmodels on vmodels.vmodels_id = vehicles.model_id LEFT JOIN colors on colors.color_id = vehicles.color_id left join fuel_types on fuel_types.fuel_type_id = vehicles.fuel_type_id left join 
        vehicle_types on vehicles.vehicle_type_id = vehicle_types.vehicle_type_id order by vehicles.vehicle_name $search");
        }

    

}   



        return view('Home.inventory',compact('data','search'));
    }
}
