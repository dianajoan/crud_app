<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class TodoItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()-route('dashboard')->with('success', 'Item are here!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
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
            'name'  => 'required'
        ]);

        TodoItem::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Item saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = TodoItem::findOrFail($id);

        if(!$item) {
            return back()->with('danger','Item not found');
        }
        return view('items.show', compact(['item']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TodoItem::findOrFail($id);

        if(!$item) {
            return back()->with('danger','Item not found');
        }
        return view('items.edit', compact(['item']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = TodoItem::findOrFail($id);

        if(!$item) {
            return back()->with('danger','Item not found');
        }

        $item->update($request->all());

        return redirect()->route('dashboard')->with('success','item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TodoItem::findOrFail($id);

        if(!$item) {
            return back()->with('danger','Item not found');
        }

        $item->delete();

        return redirect()->route('dashboard')->with('success','item deleted successfully');
    }
}
