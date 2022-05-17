<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListMemberRequest;
use App\Http\Requests\UpdateListMemberRequest;
use App\Models\ListMember;

class ListMemberController extends Controller
{
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
     * @param  \App\Http\Requests\StoreListMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListMemberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListMember  $listMember
     * @return \Illuminate\Http\Response
     */
    public function show(ListMember $listMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListMember  $listMember
     * @return \Illuminate\Http\Response
     */
    public function edit(ListMember $listMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListMemberRequest  $request
     * @param  \App\Models\ListMember  $listMember
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListMemberRequest $request, ListMember $listMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListMember  $listMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListMember $listMember)
    {
        //
    }
}
