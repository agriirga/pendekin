<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ShortedLink;

class ShortlinkController extends Controller
{

    /*
        hitung metrics shortlink & visitor counter 
        dan redirect to landing page
    */
    public function landing(){
        $shortlink_count = ShortedLink::count();
        $visitor_count = ShortedLink::sum('counter');

        return view('landing',compact('shortlink_count','visitor_count'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'urlAddress' => 'required|url',
            // 'test' => 'required'
        ]);

        // panggil fungsi generate URL, untuk generate random string sejumlah 5 karakter       
        $short_url = $this->generateShortUrl(5);

        /* insert DB dengan eloquent ORM dan mass assignment */
        $url = ShortedLink::create([
            'short_url' => $short_url,
            'long_url' => $request->urlAddress
        ]);

        $short_url = url('') .'/'. $url->short_url;

        return back()->with('success', $short_url);
    }

    /*
        Fungsi generate URL sejumlah n karakter berupa string random
        dan pengecekan apakah string tersebut sudah pernah digunakan sebelumnya 
    */
    public function generateShortUrl($jumlah_karakter){
        
        while(true){
            // generate short url
            $short_url = Str::random($jumlah_karakter);
            
            // cek apakah short url tersebut sudah pernah disimpan di db
            $is_exist = ShortedLink::where('short_url', $short_url)->first();
            
            if(!$is_exist){
                //jika tidak maka string tsb dapat digunakan
                return $short_url;
            }
        }
    }

    /* Fungsi untuk melakukan redirect pada shortlink yang diberikan  */
    public function redirectTo($short_url){
        $shorted_link = ShortedLink::where('short_url', $short_url)->firstorFail();;
        $shorted_link->increment('counter');
    
        return redirect($shorted_link->long_url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
