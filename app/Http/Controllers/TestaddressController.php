<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testaddress;

class TestaddressController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
      {
          $testaddresses = testaddress::latest()->paginate(5);

          return view('testaddresses.index',compact('testaddresses'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
      }


      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('testaddresses.create');
      }


      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
          request()->validate([
              'name' => 'required',
              'email' => 'required',
              'phone' => 'required',
          ]);

          testaddress::create($request->all());

          return redirect()->route('testaddresses.index')
                          ->with('success','testaddress created successfully');
      }


      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          $testaddress = testaddress::find($id);
          return view('testaddresses.show',compact('testaddress'));
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          $testaddress = testaddress::find($id);
          return view('testaddresses.edit',compact('testaddress'));
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
          request()->validate([
            'home_address' => 'required',
            'office_address' => 'required',

          ]);

          testaddress::find($id)->update($request->all());

          return redirect()->route('testaddresses.index')
                          ->with('success','testaddress updated successfully');
      }


      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
          testaddress::find($id)->delete();

          return redirect()->route('testaddresses.index')
                          ->with('success','testaddress deleted successfully');
      }
  }
