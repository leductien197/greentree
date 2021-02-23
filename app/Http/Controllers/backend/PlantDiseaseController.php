<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PlantDisease;
use App\Http\Requests\AddPlandiseaseRequest;
use App\Http\Requests\EditPlandiseaseRequest;
use App\Model\Tree;
use Illuminate\Support\Str;

class PlantDiseaseController extends Controller
{
    public function getPlantDisease()
    {
        $data['plantDisease'] = PlantDisease::all();
        return view('backend.PlantDisease.listPlantdisease', $data);
    }
    public function addPlantDisease()
    {
        $data['tree'] = Tree::all();
        return view('backend.PlantDisease.addPlantdisease', $data);
    }


    function postaddPlantDisease(AddPlandiseaseRequest $r)
    {
        $plantdisease = new PlantDisease();
        $plantdisease->code = $r->plantdisease_code;
        $plantdisease->name = $r->plantdisease_name;
        $plantdisease->trees_id = $r->tree;
        if ($r->hasFile('plantdisease_img')) {
            $file = $r->plantdisease_img;
            $filename = Str::random(9) . '.' . $file->getClientOriginalExtension();
            $file->move('backend/img', $filename);
            $plantdisease->img = $filename;
        } else {
            $plantdisease->img = 'no-img.jpg';
        }
        $plantdisease->save();
        return redirect('/admin/plantdisease');
    }


    public function editPlantDisease(request $r, $id)
    {
        $data['plantDisease'] = PlantDisease::find($id);
        return view('backend.PlantDisease.editPlantdisease', $data);
    }

    function postEditPlantDisease(EditPlandiseaseRequest $r, $id)
    {
            $plantDisease = PlantDisease::find($id);
            $plantDisease->code = $r->plantDisease_code;
            $plantDisease->name = $r->plantDisease_name;
            if($r->hasFile('plantDisease_img'))
            {
                if($plantDisease->img!='no-img.jpg')
                {
                    unlink('backend/img/'.$plantDisease->img);
                }

            $file = $r->plantDisease_img;
            $filename= str::random(9).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img', $filename);
            $plantDisease->img= $filename;
            }
            $plantDisease->save();
            return redirect('/admin/plantdisease');
        // return redirect('/admin/tree');
    }
    function delPlantdisease($id)
    {
        $tree = Plantdisease::find($id);
        $tree->delete();
        return back()->with('thongbao', 'Đã xóa thành công');
    }
}
