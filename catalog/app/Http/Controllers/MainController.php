<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Illuminate\Http\Response;
use App\Models\Computer;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        $services = Service::all();
        return view('index', compact('computers'),compact('services'));
    }

    public function admin()
    {
        $computers = Computer::all();
        $services = Service::all();
        return view('admin', compact('computers'),compact('services'));
    }

    public function add($param)
    {
        return match ($param) {
            'laptop' => view('addLaptop'),
            'service' => view('addService'),
            default => redirect()->route('admin'),
        };
    }

    public function create(Request $request, $param)
    {
        switch ($param) {
            case 'laptop':
                $newComputer = Computer::create(array(
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'producer' => $request->input('producer'),
                    'date' => $request->input('date'),
                    'price' => $request->input('price')
                ));
                if ($newComputer !== false)
                    return redirect()->route('admin');
                else
                    dump('Error');
                break;
            case 'service':
                $newService = Service::create(array(
                    'name' => $request->input('name'),
                    'term' => $request->input('term'),
                    'price' => $request->input('price')
                ));
                if ($newService !== false)
                    return redirect()->route('admin');
                else
                    dump('Error');
                break;
            default:
                return redirect()->route('admin');
        }

    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        switch ($name) {
            case 'laptop':
                $result = Computer::where('id', $id)->delete();
                break;
            case 'service':
                $result = Service::where('id', $id)->delete();
                break;
        }
        return redirect()->route('admin');
    }

    public function change(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        switch ($name) {
            case 'laptop':
                $computer = Computer::where('id', $id)->get()->first();
                return view('changeLaptop',compact('computer'));
            case 'service':
                $service = Service::where('id', $id)->get()->first();
                return view('changeService',compact('service'));
            default:
                return redirect()->route('admin');
        }
    }

    public function update(Request $request)
    {
        return redirect()->route('admin');
    }
}
