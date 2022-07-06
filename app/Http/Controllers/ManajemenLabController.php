<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ManajemenLabController extends Controller
{
    public function index(){
        $labs = Lab::paginate(10);
        return view('pages.admin.manajemen-lab.index', compact('labs'));
    }

    public function create(){
        return view('pages.admin.manajemen-lab.create');
    }

    public function store(Request $request){
        $slug = Str::of( $request->input('name'))->slug('-');
        $file = $request->file('path_file');

        $ekstensi = $file->getClientOriginalExtension();
        $nama_file = $slug ."-". Carbon::now()->timestamp . "." . $ekstensi;
        $file->storeAs('public/labs', $nama_file);

        Lab::create([
            'slug' => $slug,
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'path_file' => $nama_file,
            'description' => $request->input('description'),
            'price_hourly' => $request->input('price'),
            'open_hour' => $request->input('open_hour'),
            'close_hour' => $request->input('close_hour'),
        ]);
        return redirect()->route('admin.manajemen-lab.index')->with('success', 'Lab has been created successfully');
    }
    
    public function edit($slug){
        $lab = Lab::where('slug', $slug)->first();
        return view('pages.admin.manajemen-lab.edit', compact('lab'));
    }

    public function update(Request $request){
        $slug = Str::of( $request->input('name'))->slug('-');
        $file = $request->file('path_file');
        $lab = Lab::find($request->input('id'));

        if($request->file('path_file') != null) {
            Storage::delete('public/labs/'.$lab->path_file);
            
            $ekstensi = $file->getClientOriginalExtension();
            $nama_file = $slug ."-". Carbon::now()->timestamp . "." . $ekstensi;
            $file->storeAs('public/labs', $nama_file);
            $lab->update([
                'path_file' => $nama_file,
            ]);
        }

        $lab->update([
            'slug' => $slug,
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price_hourly' => $request->input('price'),
            'open_hour' => $request->input('open_hour'),
            'close_hour' => $request->input('close_hour'),
        ]);
        return redirect()->route('admin.manajemen-lab.index')->with('success', 'Lab has been created successfully');
    }

    public function destroy($slug){
        $lab = Lab::where('slug', $slug)->first();
        Storage::delete('public/labs/'.$lab->path_file);
        $lab->delete();
        return redirect()->route('admin.manajemen-lab.index')->with('success', 'Lab has been deleted');
    }
}
