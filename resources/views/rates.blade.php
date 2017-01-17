@extends('layout')

@section('title')
Rates
@stop

@section('content')

          <div>
            <table class="bordered striped">
            <thead>
                <tr>
                    <th > 
                    </th>
                    <th data-field="nightly" > Nightly
                    </th>
                    <th data-field="weekly" > Weekly 
                    </th>
                    <th data-field="monthly" > Monthly 
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> 30 AMP
                    </th>
                    <td> $35.00
                    </td>
                    <td> $155.00
                    </td>
                    <td> $335.00 *
                    </td>
                </tr>
                <tr>
                    <th> 50 AMP
                    </th>
                    <td> $37.00
                    </td>
                    <td> $170.00
                    </td>
                    <td> $335.00 *
                    </td>
                </tr>
                <tr>
                    <th> Cabin **
                    </th>
                    <td> $95.00
                    </td>
                    <td> $395.00
                    </td>
                    <td> $795.00 *
                    </td>
                </tr>
                <tr>
                    <th> Per Extra Person
                    </th>
                    <td> $7.00
                    </td>
                    <td> $30.00
                    </td>
                    <td> $60.00
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <div>
            <ol>
                <li> For monthly stays there is a $100 security deposit for RV spaces and a $200 security deposit for cabins.  The security deposit is refundable upon checkout.</li><br>
                <li> For monthly guests rent and electric are due each month based on your arrival date, ex. if you arrive on October 16th your next payment will be due on November 16th. The billing cycle for each month is on the 23rd of each month, when you receive an invoice the due date is your arrival date even though you received an invoice on the 23rd.</li><br> 
                <li> Electricity is .11 per KWH for RV spaces and .15 per KWH for cabins.</li><br>
            </ol>
            <ul>
                <li> * Electric is NOT included for monthly stays</li><br>
                <li> ** Maximum occupancy for the cabins is 2 adults</li><br>
            </ul>
        </div>

@stop