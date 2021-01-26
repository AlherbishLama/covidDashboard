<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\CovidStatistic;
use DB;


class apiController extends Controller
{
   public function createCovidStatisticObj($countryData){
    $covidStatistic = new CovidStatistic;
        $countryName = str_replace('-',' ',$countryData['Slug']) ;
        $countryName = ucwords($countryName) ;
        $covidStatistic->Country = $countryName ;

        $lastUpdate = str_replace(array("T", "Z") , ' ', $countryData['Date']);
        $lastUpdate = substr($lastUpdate, 0, -5);
        $check_pm_am = substr($lastUpdate, -9, -6);
        if (intval($check_pm_am) > 12){
            $lastUpdate = $lastUpdate ." "."pm" ;
        }else{
            $lastUpdate = $lastUpdate . " ". "am" ;
        }


        $covidStatistic->newConfirmed = $countryData['NewConfirmed'] ;
        $covidStatistic->totalConfirmed = $countryData['TotalConfirmed'] ;

        $covidStatistic->newRecovered = $countryData['NewRecovered'] ;
        $covidStatistic->totalRecovered = $countryData['TotalRecovered'] ;

        $covidStatistic->newDeaths = $countryData['NewDeaths'] ;
        $covidStatistic->totalDeaths = $countryData['TotalDeaths'] ;

        $covidStatistic->date = $lastUpdate ;

        return $covidStatistic;

   }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Http::get('https://api.covid19api.com/summary')->json();

        $arrayOf = $data['Countries'];

        foreach ($arrayOf as $countryData) {
        
        $covidStatistic = $this->createCovidStatisticObj($countryData);
        $countryName = $covidStatistic['Country'];

        $check = DB::table('covid_statistics')->where('Country', $countryName )->first();

       if ($check == null){

        $covidStatistic -> save();



       }else{
        DB::table('covid_statistics') -> where('Country', $countryName) -> update(
            array( 
            'NewConfirmed' => $covidStatistic['newConfirmed'],
            'TotalConfirmed' => $covidStatistic['totalConfirmed'],
            'NewRecovered' => $covidStatistic['newRecovered'],
            'TotalRecovered' => $covidStatistic['totalRecovered'],
            'NewDeaths' => $covidStatistic['newDeaths'],
            'TotalDeaths' => $covidStatistic['totalDeaths'],
            'Date' => $covidStatistic['date']
        ) );

       }
       }
        return back()->with('success','Country data added successfully!');

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
