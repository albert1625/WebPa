<?php

namespace App\Http\Controllers;

use App\Website;
use App\Privilege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsitesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('main');
        $privileges = new Privilege();
        $privileges->view_general=1;
        $privileges->view_contact=1;
        $privileges->view_technical=1;
        // $privileges->edit_general=1;
        // $privileges->edit_contact=1;
        // $privileges->edit_technical=1;

        if (Auth::user()->privileges==0)
            return view('main', array('websites' => Website::where('owner_id', Auth::id())->get(), 'privileges' => $privileges));
        if (Auth::user()->privileges==1)
            return view('main', array('websites' => Website::all(), 'privileges' => Privilege::where('user_id', Auth::user()->id)->first() ));
        if (Auth::user()->privileges==2)
            return view('main', array('websites' => Website::all(), 'privileges' => $privileges));
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
        //
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
        $privileges = new Privilege();
        $privileges->view_general=1;
        $privileges->view_contact=1;
        $privileges->view_technical=1;
        $privileges->edit_general=1;
        $privileges->edit_contact=1;
        $privileges->edit_technical=1;

        if (Auth::user()->privileges==1)
            return view( 'website_edit', array('ws' => Website::findOrFail($id), 'privileges' => Privilege::where('user_id', Auth::user()->id)->first()) );
        if (Auth::user()->privileges==2)
            return view( 'website_edit', array('ws' => Website::findOrFail($id), 'privileges' => $privileges) );
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
        $data = $request->all();

        $rules = $rules = array(
            'www' => 'required|min:8|max:250',
            'status' => 'sometimes|nullable',
            'name' => 'sometimes|nullable',
            'phone' => 'sometimes|nullable|numeric',
            'email' => 'sometimes|nullable|email',
            'company' => 'sometimes|nullable',
            'dns' => 'sometimes|nullable',
            'dbtype' => 'sometimes|nullable',
            'dbname' => 'sometimes|nullable',
            'dbusername' => 'sometimes|nullable',
            'ipaddress' => 'sometimes|nullable',
            'servername' => 'sometimes|nullable',
        );

        $this->validate($request, $rules);

        $website = Website::findOrFail($id);

        $website->www=$data['www'];
        $website->status=$data['status'];
        $website->contact_name=$data['name'];
        $website->phone=$data['phone'];
        $website->email=$data['email'];
        $website->company=$data['company'];
        $website->dns=$data['dns'];
        $website->database_type=$data['dbtype'];
        $website->database_name=$data['dbname'];
        $website->database_user=$data['dbusername'];
        $website->ip_address=$data['ipaddress'];
        $website->server_name=$data['servername'];

        $website->save();

        return redirect()->action('WebsitesController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $website = Website::findOrFail($id);
        $website->delete();

        return redirect()->action('WebsitesController@index');
    }
}
