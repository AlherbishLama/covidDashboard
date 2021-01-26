<?php

namespace App\Http\Controllers;

use App\Models\CovidStatistic;
use Illuminate\Http\Request;

use DB;


class covidStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covids = covidStatistic::all();
      
      return view('welcome', compact("covids"));
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
        $countryName = ucwords(request('Country_Name'));

        $check = DB::table('covid_statistics')->where('Country', $countryName )->first();

       if ($check == null){

        $covidStatistic = new CovidStatistic;

        $covidStatistic->Country = $countryName;


        $covidStatistic->newConfirmed = request('New_Confirmed');
        $covidStatistic->totalConfirmed = request('Total_Confirmed');

        $covidStatistic->newRecovered = request('New_Recovered');
        $covidStatistic->totalRecovered = request('Total_Recovered');

        $covidStatistic->newDeaths = request('New_Deaths');
        $covidStatistic->totalDeaths = request('Total_Deaths');

        $covidStatistic->date = date("Y-m-d h:i:sa", time());

        $covidStatistic -> save();


        return back()->with('success','Country data added successfully!');

       }else{

         return back()->with('error','Country already exist !');
       }

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
    public function update(Request $request)
    {
        $country = DB::table('covid_statistics')->where('Country', request('Country_Name'))->first();

        $NewConfirmed = $country->NewConfirmed ;
        $TotalConfirmed = $country->TotalConfirmed ;

        $NewRecovered = $country->NewRecovered ;
        $TotalRecovered = $country->TotalRecovered ;

        $NewDeaths = $country->NewDeaths ;
        $TotalDeaths = $country->TotalDeaths ;


        DB::table('covid_statistics') -> where('Country', request('Country_Name')) -> update(array( 
            'NewConfirmed' => request('New_Confirmed') ?? $NewConfirmed,
            'TotalConfirmed' => request('Total_Confirmed') ?? $TotalConfirmed,
            'NewRecovered' => request('New_Recovered') ?? $NewRecovered,
            'TotalRecovered' => request('Total_Recovered') ?? $TotalRecovered ,
            'NewDeaths' => request('New_Deaths') ?? $NewDeaths,
            'TotalDeaths' => request('Total_Deaths') ?? $TotalDeaths,
            'Date' => date("Y-m-d h:i:sa") 
        ));

    return back()->with('success','Country data updated successfully!');

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
