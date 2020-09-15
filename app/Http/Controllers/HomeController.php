<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {
       $data['home'] = \DB::table('siswa')->get();
       return view('home', $data);
     }

     public function create()
     {
       return view('test.form');
     }

     public function store(Request $request)
     {
       $input = $request->all();
       unset($input['_token']);
       $status = \DB::table('siswa')->insert($input);

       if($status){
         return redirect('/home')->with('success', 'Data berhasil ditambahkan');
       } else {
         return redirect('/home/create')->with('error', 'Data gagal ditambahkan');
       }
     }

     public function edit(Request $request, $id)
     {
       $data['home'] = \DB::table('siswa')->find($id);
       return view('test.form', $data);
     }

     public function update(Request $request, $id)
     {

       $input = $request->all();
       unset($input['_token']);
       unset($input['_method']);

       $status = \DB::table('siswa')->where('id', $id)->update($input);

       if($status){
         return redirect('/home')->with('success', 'Data berhasil diubah');
       }else{
         return redirect('/home/create')->with('error', 'Data gagal diubah');
       }
     }

     public function destroy(Request $request, $id)
     {
       $status = \DB::table('siswa')->where('id', $id)->delete();

       return redirect('/home')->with('success', 'Data berhasil dihapus');
     }
}
