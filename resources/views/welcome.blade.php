@extends('layouts.app')


@section('styles')
<link rel="stylesheet" href="{{asset('./css/style.css')}}">
  <style>
      /* Icons */
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
  </style>

@endsection



{{-- Set map data using the data stored in the database --}}

@section('map_data')


@foreach($covids as $covid)

<script type="text/javascript">

  var last_Update = "{{ $covid['Date'] }}" ;

  var New_Confirmed = "{{ $covid['NewConfirmed'] }}" ;
  var Total_Confirmed = "{{ $covid['TotalConfirmed'] }}";

  var New_Recovered = "{{ $covid['NewRecovered'] }}" ;
  var Total_Recovered = "{{ $covid['TotalRecovered'] }}";

  var New_Deaths = "{{ $covid['NewDeaths'] }}" ;
  var Total_Deaths =  "{{ $covid['TotalDeaths'] }}";

  <?php $Country_Name = json_encode($covid['Country']) ; 
  $Country_Name = str_replace(' ', '_', $Country_Name);
  ?>

  map.mapdata.state_specific[<?php echo $Country_Name;?>].New_Confirmed = New_Confirmed;
  map.mapdata.state_specific[<?php echo $Country_Name;?>].Total_Confirmed = Total_Confirmed;


  map.mapdata.state_specific[<?php echo $Country_Name;?>].New_Recovered = New_Recovered ; 
  map.mapdata.state_specific[<?php echo $Country_Name;?>].Total_Recovered = Total_Recovered;


  map.mapdata.state_specific[<?php echo $Country_Name;?>].New_Deaths =  New_Deaths;
  map.mapdata.state_specific[<?php echo $Country_Name;?>].Total_Deaths = Total_Deaths;


  map.mapdata.state_specific[<?php echo $Country_Name;?>].lastUpdate = last_Update ;


  var descriptionString = 'New Confirmed Cases :' + New_Confirmed + '<br>'+
  'Total Confirmed Cases :'+ Total_Confirmed;

  map.mapdata.state_specific[<?php echo $Country_Name;?>].description= descriptionString ;

</script>

@endforeach

@endsection




{{-- get all countries in the database --}}

@section('list_of_existed_countries')

@foreach($covids ?? '' as $covid)

<option value="{{ $covid['Country'] }}">{{ $covid['Country'] }}</option>

@endforeach

@endsection



{{-- detect the clicked on country and get all data related to it and set them in details view --}}
@section('map_on_click')

<script type='text/javascript'> 
  map.hooks.click_state = function(id){

    var Country_Name = map.mapdata.state_specific[id].name ;
    var Last_updated = map.mapdata.state_specific[id].lastUpdate ;

    var New_Confirmed = map.mapdata.state_specific[id].New_Confirmed ;
    var Total_Confirmed = map.mapdata.state_specific[id].Total_Confirmed ;

    var New_Recovered = map.mapdata.state_specific[id].New_Recovered ;
    var Total_Recovered = map.mapdata.state_specific[id].Total_Recovered ;

    var New_Deaths = map.mapdata.state_specific[id].New_Deaths ;
    var Total_Deaths = map.mapdata.state_specific[id].Total_Deaths ;


    document.getElementById("countryName").value = Country_Name;
    document.getElementById("lastUpdated").value = Last_updated



    document.getElementById("newConfirmed").value = New_Confirmed;
    document.getElementById("totalConfirmed").value = Total_Confirmed;

    document.getElementById("newRecovered").value = New_Recovered;
    document.getElementById("totalRecovered").value = Total_Recovered;

    document.getElementById("newDeaths").value = New_Deaths;
    document.getElementById("totalDeaths").value = Total_Deaths;



    document.getElementById("countryDetails").scrollIntoView({behavior: 'smooth'});
  }

</script>
@endsection



@section('scripts')
<script src="{{asset('/js/mapdata.js')}}"></script>
<script src="{{asset('/js/worldmap.js')}}"></script>
<script type="text/javascript">
  var map=simplemaps_worldmap.create();
</script>


{{-- function will hide the flash message after 2 seconds --}}
<script>
    $(function () { 
    var duration = 2000; // 2 seconds
    setTimeout(function () { $('.alert').hide(); }, duration);
});  

</script>
@endsection

