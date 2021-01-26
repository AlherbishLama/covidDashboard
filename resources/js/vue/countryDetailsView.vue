<template>
<div class="container">
    <div class="features-inner section-inner">
        <h2 id="countryDetails" class="section-title mt-0">Country Details</h2>
        <div class="feature-inner">
            <div class="form-div">

                <form name="userForm" method="POST" action="">

                    <div class="form_countries_data" layout="row" layout-sm="column">

                        <label>Country Name: </label>
                        <input id="countryName" class="Country_Details" placeholder="Country Name" disabled>

                        <label>Last Updated: </label>
                        <input id="lastUpdated" class="Country_Details" placeholder="Last Updated" disabled>

                    </div>


                    <div class="form_data" layout="row" layout-sm="column">

                        <label>New Confirmed: </label>
                        <input id="newConfirmed" class="Country_Details" placeholder="New Confirmed" disabled>

                        <label>Total Confirmed: </label>

                        <input id="totalConfirmed" class="Country_Details" placeholder="Total Confirmed" disabled>

                    </div>



                    <div class="form_data" layout="row" layout-sm="column">

                        <label>New Recovered: </label>
                        <input id="newRecovered" class="Country_Details" placeholder="New Recovered" disabled>

                        <label>Total Recovered: </label>
                        <input id="totalRecovered" class="Country_Details" placeholder="Total Recovered" disabled>

                    </div>



                    <div class="form_data" layout="row" layout-sm="column">

                        <label>New Deaths: </label>
                        <input id="newDeaths" class="Country_Details" placeholder="New Deaths" disabled>

                        <label>Total Deaths: </label>
                        <input id="totalDeaths" class="Country_Details" placeholder="Total Deaths" disabled>

                    </div>


                </form>

            </div>
        </div>
    </div>
</div>
</template>

<style scoped>
input.Country_Details {
    width: 20%;
    margin: 4px 10px;
    border: none;
    border-bottom: 1px solid #1890ff;
    box-sizing: border-box;
    text-align: center;
    background: transparent;
}

@media (min-width: 481px) {

    input.Country_Details {
        width: 60%;
    }
}

@media (min-width: 641px) {
    input.Country_Details {
        width: 20%;
    }
}
</style>
