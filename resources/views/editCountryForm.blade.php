    <div class="container">
        <div class="features-inner section-inner">
            <h2 class="section-title mt-0">Edit Country</h2>
            <div class="feature-inner">
                <div class = "form-div">
                    <form name="userForm" method="POST" action="/update">
                        @method('put')
                        @csrf

                        <div class= "form_countries_data" layout="row" layout-sm="column">
                            <label>Country Name: </label>
                            <select id="country" name="Country_Name">
                                <optgroup>
                              @yield('list_of_existed_countries')
                                <optgroup>


                          </select>
                      </div>
                      <div class= "form_data" layout="row" layout-sm="column">

                        <label>New Confirmed: </label>
                        <input name="New_Confirmed" type="number" min= "0" placeholder="New Confirmed">

                        <label>Total Confirmed: </label>
                        <input name="Total_Confirmed" type="number" min= "0" placeholder="Total Confirmed">


                    </div>

                    <div class= "form_data" layout="row" layout-sm="column">

                        <label>New Recovered: </label>
                        <input name="New_Recovered" type="number" min= "0" placeholder="New Recovered">

                        <label>Total Recovered: </label>
                        <input name="Total_Recovered" type="number" min= "0" placeholder="Total Recovered">


                    </div>

                    <div class= "form_data" layout="row" layout-sm="column">

                        <label>New Deaths: </label>
                        <input name="New_Deaths"  type="number" min= "0" placeholder="New Deaths">

                        <label>Total Deaths: </label>
                        <input name="Total_Deaths" type="number" min= "0" placeholder="Total Deaths">


                    </div>


                    <div class="pricing-table-cta">
                     <button id="submit" name="submit" class="button button-primary button-block">Edit</button>
                 </div>
             </form>

         </div>
     </div>
 </div>
</div>
