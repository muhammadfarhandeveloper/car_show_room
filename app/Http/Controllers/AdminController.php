<?php

namespace App\Http\Controllers;

use App\Models\Body_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    function Dashboard()
    {
        $bikecount = Db::select('select count(*) as count from vehicles left join vehicle_types on vehicles.vehicle_type_id
        = vehicle_types.vehicle_type_id where vehicle_type_name = ?',['bike']);
        $carcount = Db::select('select count(*) as count from vehicles left join vehicle_types on vehicles.vehicle_type_id
        = vehicle_types.vehicle_type_id where vehicle_type_name = ?',['car']);

        return view('dashboard.index',compact('bikecount','carcount'));
    }

    function Fuellist()
    {
        $data = Db::select('select * from fuel_types');

        return view('dashboard.fueltype.index')->with('data', $data);
    }

    function fueladd()
    {

        return view('dashboard.fueltype.insert');
    }
    function fuelstore(Request $req)
    {
        $req->validate([
            'fuelname' => 'required | max:30'
        ]);

        Db::insert('insert into fuel_types(fuel_type_name) values(?)', [$req['fuelname']]);
        session()->flash('status', 'Successfully Record Inserted');

        return redirect('/dashboard/fuel-list');
    }

    function fueledit($id)
    {

        $data = Db::select('select * from fuel_types where fuel_type_id = ?', [$id]);
        if ($data != null) {

            return view('dashboard.fueltype.edit')->with('data', $data[0]);
        }
        return redirect('/dashboard/fuel-list');
    }
    function fuelupdate(Request $req, $id)
    {

        $data = Db::select('select * from fuel_types where fuel_type_id = ?', [$id]);
        if ($data != null) {

            $result =  Db::update('update fuel_types set fuel_type_name = ? where fuel_type_id = ? ', [$req['fuelname'], $id]);

            if ($result != null) {
                session()->flash('status', 'Successfully Record Updated');
                return redirect('/dashboard/fuel-list');
            }
        }
    }
    function fueldelete($id)
    {
        $data = Db::select("select * from fuel_types where fuel_type_id = $id");
        if ($data != null) {

            $result =  Db::delete('delete from fuel_types where fuel_type_id = ?', [$id]);

            if ($result != null) {
                session()->flash('status1', 'Successfully Record Deleted');
                return redirect('/dashboard/fuel-list');
            }
        }
    }


    function brandlist()
    {

        $data  = Db::select('select * from brands');

        return view('dashboard.brand.index')->with('data', $data);
    }
    function brandadd()
    {
        return view('dashboard.brand.insert');
    }
    function brandstore(Request $req)
    {

        $req->validate([
            'brand_name' => 'required | max:30',
            'brand_img' => 'required | image | mimes:png,jpg',
            'brand_desc' => 'required | max : 5000',
        ]);

        $img = $req['brand_img'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . $imgname;
        $img->move('public/dimages', $imgname);

        $result = Db::insert(
            'insert into brands(brands_name,brands_img,brands_desc) values(?,?,?)',
            [$req['brand_name'], $imgname, $req['brand_desc']]
        );

        if ($result != null) {
            session()->flash('status', 'Successfully Record Inserted');

            return redirect('/dashboard/brand-list');
        }


        return view('dashboard.brand.insert');
    }
    function brandedit($id)
    {

        $data = Db::select('select * from brands where brands_id = ?', [$id]);

        if ($data != null) {

            return view('dashboard.brand.edit')->with('data', $data[0]);
        }

        return redirect('/dashboard/brand-list');
    }
    function brandupdate(Request $req, $id)
    {

        $data = Db::select('select * from brands where brands_id = ?', [$id]);

        if ($data != null) {

            $req->validate([
                'brand_name' => 'required | max:30',
                'brand_desc' => 'required | max : 5000',
            ]);

            if ($req->brand_img != null) {

                $img = $req->brand_img;
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . $imgname;
                $img->move('public/dimages', $imgname);
                // unlink('dimages/' . $req->oldimg);
            } else {
                $imgname = $req->oldimg;
            }

            Db::update('update brands set brands_name = ? , brands_img = ? ,
            brands_desc = ? where brands_id = ?', [$req->brand_name, $imgname, $req->brand_desc, $id]);
            session()->flash('status', 'Successfully Record Updated');
        }

        return redirect('/dashboard/brand-list');
    }

    function branddelete($id)
    {

        $data  = Db::select('select * from brands where brands_id = ?', [$id]);

        if ($data != null) {

            // unlink('dimages/' . $data[0]->brands_img);
            Db::delete('delete from brands where brands_id = ?', [$id]);
            session()->flash('status1', 'Successfully Record Deleted');

            return redirect('/dashboard/brand-list');
        }

        return redirect('/dashboard/brand-list');
    }

    function modellist()
    {
        $data = Db::select('select * from vmodels left join brands
        on vmodels.brands_id = brands.brands_id');

        return view('dashboard.vmodel.index')->with('data', $data);
    }
    function modeladd()
    {
        $data = Db::select('select * from brands');

        return view('dashboard.vmodel.insert')->with('data', $data);
    }
    function modelstore(Request $req)
    {
        $req->validate([
            'model_name' => 'required | max:50'
        ]);

        Db::insert('insert into vmodels(vmodels_name,brands_id) values(?,?)', [$req->model_name, $req->brand_id]);
        session()->flash('status', 'Successfully Record Inserted');

        return redirect('/dashboard/model-list');
    }

    function modeledit($id)
    {
        $data = Db::select('select * from vmodels where vmodels_id = ?', [$id]);
        $data = $data[0];

        if ($data != null) {

            $data1 = Db::select('select * from brands');
            return view('dashboard.vmodel.edit', compact('data', 'data1'));
        } else {

            return redirect('/dashboard/model-list');
        }
    }
    function modelupdate(Request $req, $id)
    {

        $data = Db::select('select * from vmodels where vmodels_id = ?', [$id]);

        if ($data != null) {

            Db::update('update vmodels set vmodels_name = ? , brands_id = ? where
            vmodels_id = ? ', [$req->model_name, $req->brand_id, $id]);
            session()->flash('status', 'Successfully Record Updated');
            return redirect('/dashboard/model-list');
        }
        return redirect('/dashboard/model-list');
    }

    function modeldelete($id)
    {
        $data = Db::select('select * from vmodels where vmodels_id = ?', [$id]);

        if ($data != null) {

            Db::delete('delete from vmodels where vmodels_id = ?', [$id]);
            session()->flash('status1', 'Successfully Record Deleted');

            return redirect('/dashboard/model-list');
        }
        return redirect('/dashboard/model-list');
    }

    function bodytypelist()
    {
        $data = Db::select('select * from body_types');

        return view('dashboard.bodytype.index')->with('data', $data);
    }
    function bodytypeadd()
    {

        return view('dashboard.bodytype.insert');
    }
    function bodytypestore(Request $req)
    {
        $req->validate([
            'body_type_name' => 'required | max:50'
        ]);

        Db::insert('insert into body_types(body_type_name) values(?)', [$req->body_type_name]);
        session()->flash('status', 'Successfully Record Inserted');

        return redirect('/dashboard/body-type-list');
    }

    function bodytypeedit($id)
    {

        $data = Db::select('select * from body_types where body_type_id =?', [$id]);

        if ($data != null) {

            return view('dashboard.bodytype.edit')->with('data', $data[0]);
        }
        return redirect('/dashboard/body-type-list');
    }
    function bodytypeupdate(Request $req, $id)
    {

        $data = Db::select('select * from body_types where body_type_id =?', [$id]);

        if ($data != null) {

            Db::update(
                'update body_types set body_type_name = ? where body_type_id =?',
                [$req->body_type_name, $id]
            );

            session()->flash('status', 'Successfully Record Updated');

            return redirect('/dashboard/body-type-list');
        }
        return redirect('/dashboard/body-type-list');
    }

    function bodytypedelete($id)
    {

        $data = Db::select('select * from body_types where body_type_id =?', [$id]);

        if ($data != null) {
            Db::delete('delete from body_types where body_type_id = ?', [$id]);
            session()->flash('status1', 'Successfully Record Deleted');

            return redirect('/dashboard/body-type-list');
        }
        return redirect('/dashboard/body-type-list');
    }

    function vehicletypelist()
    {
        $data = Db::select('select * from vehicle_types');

        return view('dashboard.vehicletype.index')->with('data', $data);
    }
    function vehicletypeadd()
    {
        return view('dashboard.vehicletype.insert');
    }
    function vehicletypestore(Request $req)
    {
        $req->validate([
            'vehicle_type_name' => 'required | max:50'
        ]);

        Db::insert('insert into vehicle_types(vehicle_type_name) values(?)', [$req->vehicle_type_name]);
        session()->flash('status', 'Successfully Record Inserted');

        return redirect('/dashboard/vehicle-type-list');
    }
    function vehicletypeedit($id)
    {
        $data = Db::select('select * from vehicle_types where vehicle_type_id =?', [$id]);

        if ($data != null) {

            return view('dashboard.vehicletype.edit')->with('data', $data[0]);
        }
        return redirect('/dashboard/vehicle-type-list');
    }
    function vehicletypeupdate(Request $req, $id)
    {
        $data = Db::select('select * from vehicle_types where vehicle_type_id =?', [$id]);

        if ($data != null) {

            Db::update(
                'update vehicle_types set vehicle_type_name = ? where vehicle_type_id =?',
                [$req->vehicle_type_name, $id]
            );

            session()->flash('status', 'Successfully Record Updated');

            return redirect('/dashboard/vehicle-type-list');
        }
        return redirect('/dashboard/vehicle-type-list');
    }

    function vehicletypdelete($id)
    {

        $data = Db::select('select * from vehicle_types where vehicle_type_id =?', [$id]);

        if ($data != null) {
            Db::delete('delete from vehicle_types where vehicle_type_id = ?', [$id]);
            session()->flash('status1', 'Successfully Record Deleted');

            return redirect('/dashboard/vehicle-type-list');
        }
        return redirect('/dashboard/vehicle-type-list');
    }

    function colorlist()
    {
        $data = Db::select('select * from colors');

        return view('dashboard.color.index')->with('data', $data);

        return view('dashboard.color.index');
    }
    function coloradd()
    {
        return view('dashboard.color.insert');
    }
    function colorstore(Request $req)
    {
        $req->validate([
            'color_name' => 'required | max:50'
        ]);

        Db::insert('insert into colors(color_name) values(?)', [$req->color_name]);
        session()->flash('status', 'Successfully Record Inserted');

        return redirect('/dashboard/color-list');
    }
    function coloredit($id)
    {
        $data =  Db::select('select * from colors where color_id = ?', [$id]);
        if ($data != null) {

            return view('dashboard.color.edit')->with('data', $data[0]);
        }
        return redirect('/dashboard/color-list');
    }
    function colorupdate(Request $req, $id)
    {
        $data =  Db::select('select * from colors where color_id = ?', [$id]);
        if ($data != null) {

            Db::update('update colors set color_name = ? where color_id = ?', [$req->color_name, $id]);
            session()->flash('status', 'Successfully Record Updated');
            return redirect('/dashboard/color-list');
        }
        return redirect('/dashboard/color-list');
    }
    function colordelete($id)
    {
        $data =  Db::select('select * from colors where color_id = ?', [$id]);
        if ($data != null) {

            Db::delete('delete from colors where color_id = ?', [$id]);

            session()->flash('status1', 'Successfully Record Deleted');
            return redirect('/dashboard/color-list');
        }
        return redirect('/dashboard/color-list');
    }
    function vehiclelist()
    {

        $data =  Db::select('SELECT * from vehicles LEFT JOIN body_types on vehicles.body_type_id = body_types.body_type_id
        left join vmodels on vmodels.vmodels_id = vehicles.model_id LEFT JOIN colors on colors.color_id = vehicles.color_id left join fuel_types on fuel_types.fuel_type_id = vehicles.fuel_type_id left join
        vehicle_types on vehicles.vehicle_type_id = vehicle_types.vehicle_type_id');

        return view('dashboard.vehicle.index')->with('data', $data);
    }
    function vehicleadd()
    {
        $vbodytype  = Db::select('select * from body_types');
        $vmodels  = Db::select('select * from vmodels');
        $fuel_types  = Db::select('select * from fuel_types');
        $colors  = Db::select('select * from colors');
        $vtype  = Db::select('select * from vehicle_types');

        return view('dashboard.vehicle.insert', compact('vbodytype', 'vmodels', 'fuel_types', 'colors', 'vtype'));
    }

    function vehiclestore(Request $req)
    {

        // $req->validate([
        //     'v_name' => 'required | max:100',
        //     'v_img' => 'required | image | mimes:png,jpg',
        //     'vt_name' => 'required',
        //     'v_mileage' => 'required',
        //     'v_short_desc' => 'required | max:250',
        //     'v_long_desc' => 'required',
        //     'v_old_price' => 'required',
        //     'v_price' => 'required',
        //     'v_engine' => 'required',
        //     'v_owner' => 'required',
        //     'v_use' => 'required',
        //     'v_body_type' => 'required',
        //     'vmodels' => 'required',
        //     'fuel_types' => 'required',
        //     'colors' => 'required',
        // ]);

        $img = $req['v_img'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . $imgname;
        $img->move('public/dimages', $imgname);

        Db::insert('insert into vehicles(vehicle_name,vehicle_img,vehicle_transmission,vehicle_mileage,
        vehicle_short_desc,vehicle_long_desc,vehicle_old_price,vehicle_price,vehicle_engine,vehicle_owner
        ,vehicle_use,vehicle_type_id,body_type_id,model_id,fuel_type_id,color_id)
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $req->v_name, $imgname, $req->vt_name, $req->v_mileage, $req->v_short_desc,
            $req->v_long_desc, $req->v_old_price, $req->v_price, $req->v_engine, $req->v_owner, $req->v_use,
            $req->v_type, $req->v_body_type, $req->vmodels, $req->fuel_types, $req->colors
        ]);

        session()->flash('status', 'Successfully Record Inserted');

        return redirect('/dashboard/vehicle-list');
    }

    function vehicleedit($id)
    {
        $data = Db::select('select  * from vehicles where vehicle_id = ?', [$id]);
        $data = $data[0];
        if ($data != null) {

            $vbodytype  = Db::select('select * from body_types');
            $vmodels  = Db::select('select * from vmodels');
            $fuel_types  = Db::select('select * from fuel_types');
            $colors  = Db::select('select * from colors');
            $vtype  = Db::select('select * from vehicle_types');

            return view('dashboard.vehicle.edit', compact('vbodytype', 'vmodels', 'fuel_types', 'colors', 'vtype', 'data'));
        }

        return redirect('/dashboard/vehicle-list');
    }
    function vehicleupdate(Request $req, $id)
    {

        $data = Db::select('select  * from vehicles where vehicle_id = ?', [$id]);
        $data = $data[0];
        if ($data != null) {

            if ($req->v_img != null) {


                $img = $req['v_img'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . $imgname;
                $img->move('public/dimages', $imgname);
                // if ($data->vehicle_img != null) {
                //     unlink('dimages/' . $data->vehicle_img);
                // }
            } else {

                $imgname = $req->old_img;
            }

            Db::update('update vehicles set vehicle_name = ? , vehicle_img = ?, vehicle_transmission =? , vehicle_mileage = ? ,vehicle_short_desc =? ,
            vehicle_long_desc =? , vehicle_old_price =? , vehicle_price =? ,vehicle_engine  =? , vehicle_owner =? , vehicle_use =? ,vehicle_type_id =? , body_type_id =?,
            model_id =? , fuel_type_id =? , color_id =? where vehicle_id = ? ', [
                $req->v_name, $imgname, $req->vt_name, $req->v_mileage, $req->v_short_desc,
                $req->v_long_desc, $req->v_old_price, $req->v_price, $req->v_engine, $req->v_owner, $req->v_use,
                $req->v_type, $req->v_body_type, $req->vmodels, $req->fuel_types, $req->colors, $id
            ]);

            session()->flash('status', 'Successfully Record Updated');

            return redirect('/dashboard/vehicle-list');
        }
    }
    function vehicledelete($id)
    {
        $data = Db::select('select  * from vehicles where vehicle_id = ?', [$id]);
        $data = $data[0];
        if ($data != null) {

            Db::delete('delete from vehicles where vehicle_id = ?', [$id]);
            // unlink('dimages/' . $data->vehicle_img);
            session()->flash('status1', 'Successfully Record Deleted');

            return redirect('/dashboard/vehicle-list');

        }

        return redirect('/dashboard/vehicle-list');

    }

    function contactusers(Request $req)
    {

        $data = Db::select('select * from contact');

        if($req->search != ""){
                $search = '%' .$req->search.'%';
            $data = Db::select('select * from contact where fullname like ? or email like ?',[$search,$search]);
        }

        $search = $req->search;
        return view('dashboard.contactusers.index',compact('data','search'));
    }
}
