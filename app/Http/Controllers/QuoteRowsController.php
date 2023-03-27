<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRowsRequest;
use App\Http\Requests\UpdateQuoteRowsRequest;
use App\Models\QuoteRows;

class QuoteRowsController extends Controller
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
     * @param  \App\Http\Requests\StoreQuoteRowsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuoteRowsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuoteRows  $quoteRows
     * @return \Illuminate\Http\Response
     */
    public function show(QuoteRows $quoteRows)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuoteRows  $quoteRows
     * @return \Illuminate\Http\Response
     */
    public function edit(QuoteRows $quoteRows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuoteRowsRequest  $request
     * @param  \App\Models\QuoteRows  $quoteRows
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuoteRowsRequest $request, QuoteRows $quoteRows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuoteRows  $quoteRows
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuoteRows $quoteRows)
    {
        //
    }
}
