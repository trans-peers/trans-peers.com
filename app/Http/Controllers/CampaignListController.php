<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampaignListRequest;
use App\Http\Requests\UpdateCampaignListRequest;
use App\Models\CampaignList;

class CampaignListController extends Controller
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
     * @param  \App\Http\Requests\StoreCampaignListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampaignListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CampaignList  $campaignList
     * @return \Illuminate\Http\Response
     */
    public function show(CampaignList $campaignList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CampaignList  $campaignList
     * @return \Illuminate\Http\Response
     */
    public function edit(CampaignList $campaignList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampaignListRequest  $request
     * @param  \App\Models\CampaignList  $campaignList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampaignListRequest $request, CampaignList $campaignList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampaignList  $campaignList
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampaignList $campaignList)
    {
        //
    }
}
