<?php

namespace App\Http\Controllers;

use App\User;
use App\Bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $bars = Bar::orderBy('created_at', 'desc')->paginate(5);

      return view('bars.index', compact('bars'));
    }

    public function create(){
        return view('bars.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:100',
            'adress' =>'required|min:5|max:255',
            'about' =>'required|min:5|max:255',
            'language' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,svg|max:3072',
            'theme'       => 'flatly'
        ]);

        $storagepath = $request->file('image')->store('public/logos');
        $fileName = basename($storagepath);
        $data = $request->all();
        $data['code'] = date("y").substr(number_format(time() * mt_rand(), 0, '', ''), 0, 6);
        $data['image'] = $fileName;

        Bar::create($data);

        return redirect()->route('bars.index')->with('status', __('Created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bar_id)
    {
      $admins = User::byBar($bar_id)->where('role','admin')->get();
      return view('bar.admin-list',compact('admins'));
    }

    public function edit(Bar $bar) {
        return view('bars.edit', compact('bar'));
    }

    public function update(Request $request, Bar $bar) {
         $request->validate([
            'name' => 'required|min:4|max:255',
            'adress' => 'required|min:5|max:255',
            'about' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:3072',

        ]);

        $data = $request->all();

        if($request->hasFile('image')){
            $file_path = "public/logos/".$bar->image;
            Storage::delete($file_path);

            $storagepath = $request->file('image')->store('public/logos');
            $fileName = basename($storagepath);
            $data['image'] = $fileName;

        }

        $bar->fill($data);
        $bar->save();
        return redirect()->route('bars.index');
    }

    public function changeTheme(Request $request){
      $tb = Bar::find($request->s);
      $tb->theme = $request->hotel_theme;
      $tb->save();
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // return (Bar::destroy($id))?response()->json([
      //   'status' => 'success'
      // ]):response()->json([
      //   'status' => 'error'
      // ]);
    }
}
