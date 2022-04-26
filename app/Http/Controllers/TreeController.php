<?php

namespace App\Http\Controllers;

use App\Http\Requests\TreeRequest;
use App\Models\Tree;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trees = Tree::query()->get();
        return view('pages.Trees.Tree', compact('trees'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TreeRequest $request)
    {
        Tree::query()->create($request->validated());
        return redirect()->route('trees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tree $tree
     * @return \Illuminate\Http\Response
     */
    public function show(Tree $tree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tree $tree
     * @return \Illuminate\Http\Response
     */
    public function edit(Tree $tree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tree $tree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tree $tree)
    {
        try {

            $tree->update([
                'name' => request('name')
            ]);
            return redirect()->route('trees.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tree $tree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Tree::findOrFail($request->id)->delete();
        return redirect()->route('trees.index');
    }
}
