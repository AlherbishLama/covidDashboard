<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>



    <title>{{config('app.name', 'Covid-19 Dashboard') }}</title>


    @yield('styles')

    @yield('scripts')

    @yield('map_on_click')

    @yield('map_data')


</head>
<body class="antialiased is-boxed has-animations">
    <div id="app" class="body-wrap boxed-container">

        <header class="site-header">
        </header>

        @include('flashMessage')


        <main>

         <section class="hero text-light text-center">
            <app-name-and-map></app-name-and-map>

        </section>

        <section class="features section text-center"> 
            <add-country-view>
            </add-country-view>
        </section>

        <section class="features section text-center">
          @include('editCountryForm')

      </section>

      <section class="features section text-center">
         <country-details-view></country-detailes-view>

         </section>




     </main>
 </div>
 
</body>
<script src= "{{ mix('js/app.js') }}"></script>
</html>
