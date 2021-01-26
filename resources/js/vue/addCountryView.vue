<template>
<div class="container">
    <div class="features-inner section-inner">
        <h2 class="section-title mt-0">Add Country</h2>
        <div class="feature-inner">
            <div class="form-div">

                <form name="userForm" method="POST" action="/create">
                    <input type="hidden" name="_token" :value="csrf">

                    <div class="form_countries_data" layout="row" layout-sm="column">
                        <label class="text-sm">Country Name: </label>
                        <select id="country" name="Country_Name">
                            <option v-for="country in countries">{{ country }}</option>
                        </select>
                    </div>


                    <div class="form_data" layout="row" layout-sm="column">
                        <label>New Confirmed: </label>
                        <input name="New_Confirmed" required type="number" min="0" placeholder="New Confirmed">
                        <label>Total Confirmed: </label>
                        <input name="Total_Confirmed" required type="number" min="0" placeholder="Total Confirmed">
                    </div>



                    <div class="form_data" layout="row" layout-sm="column">
                        <label>New Recovered: </label>
                        <input name="New_Recovered" required type="number" min="0" placeholder="New Recovered">
                        <label>Total Recovered: </label>
                        <input name="Total_Recovered" required type="number" min="0" placeholder="Total Recovered">
                    </div>



                    <div class="form_data" layout="row" layout-sm="column">
                        <label>New Deaths: </label>
                        <input name="New_Deaths" required type="number" min="0" placeholder="New Deaths">
                        <label>Total Deaths: </label>
                        <input name="Total_Deaths" required type="number" min="0" placeholder="Total Deaths">
                    </div>



                    <div class="pricing-table-cta">
                        <button id="submit" name="submit" class="button button-primary button-block">ADD</button>
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data: () => ({
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

        countries: ['Afghanistan', 'Albania', 'Algeria', 'Angola', 'Antigua and Barbuda', 'Argentina',
            'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados',
            'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia And Herzegovina',
            'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cape Verde', 'Cambodia',
            'Cameroon', 'Canada', 'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros',
            'Congo Brazzaville', 'Costa Rica', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Congo Kinshasa', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt',
            'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Fiji', 'Finland',
            'France', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Greece', 'Grenada', 'Guatemala',
            'Guinea', 'Guinea Bissau', 'Guyana', 'Haiti', 'Honduras', 'Hungary', 'Iceland', 'India',
            'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy', 'Ivory Coast', 'Jamaica', 'Japan',
            'Jordan', 'Kazakhstan', 'Kenya', 'Korea South', 'Kuwait', 'Kyrgyzstan', 'Lao Pdr', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Lithuania', 'Luxembourg', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives',
            'Mali', 'Malta', 'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Mongolia', 'Montenegro', 'Morocco',
            'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Zealand',
            'Nicaragua', 'Niger', 'Nigeria', 'North Korea', 'Norway', 'Oman', 'Pakistan', 'Palau',
            'Palestine', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland',
            'Portugal', 'Qatar', 'Romania', 'Russia', 'Rwanda', 'Saint Kitts And Nevis', 'Saint Lucia',
            'Saint Vincent And The Grenadines', 'Samoa', 'San Marino', 'Saudi Arabia', 'Senegal',
            'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands',
            'Somalia', 'South Africa', 'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Sweden',
            'Switzerland', 'Syria', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor Leste', 'Togo', 'Tonga',
            'Trinidad And Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukraine',
            'United Arab Emirates', 'United Kingdom', 'United States', 'Uruguay', 'Uzbekistan', 'Vanuatu',
            'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
        ],
    }),
}
</script>
