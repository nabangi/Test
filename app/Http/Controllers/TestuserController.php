<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testuser;

class testuserController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
      {
          $testusers = testuser::latest()->paginate(5);

          return view('testusers.index',compact('testuser'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
      }


      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('testusers.create');
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

          testuser::create($request->all());

          return redirect()->route('testusers.index')
                          ->with('success','testuser created successfully');
      }


      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          $testuser = testuser::find($id);
          return view('testusers.show',compact('testusers'));
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          $testuser = testuser::find($id);
          return view('testusers.edit',compact('testusers'));
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
          ]);

          testuser::find($id)->update($request->all());

          return redirect()->route('testusers.index')
                          ->with('success','testuser updated successfully');
      }


      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
          testuser::find($id)->delete();

          return redirect()->route('testusers.index')
                          ->with('success','testuser deleted successfully');
      }
  }
