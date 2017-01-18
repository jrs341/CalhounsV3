@extends('layout')

@section('title')
Admin
@stop

@section('content')

<form action="#">
    <p>Choose meters to update
    </br>
      <input type="checkbox" id="rvSpaceKWH" />
      <label for="rvSpaceKWH">RV Space</label>
    </p>
    <p>
      <input type="checkbox" id="cabinKWH" />
      <label for="cabinKWH">Cabin</label>
    </p>
    <p>
      <input type="checkbox" id="cabinKWH" />
      <label for="cabinKWH">Cabin</label>
    </p>
</form>
 
<table id="rvReadings" class="bordered striped">
    <thead>
                <tr>
                    <th data-field="updateReading"> Check to update
                    </th>
                    <th data-field="previousReading" > Previous Reading
                    </th>
                    <th data-field="currentReading" > Current Reading 
                    </th>
                    <th data-field="totalUsage" > KWH
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Akwh" />
      					<label for="Akwh">A</label>
                    </th>
                    <td> 
                    <!-- this will have to get data from data base -->
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    <!-- some magic here to subtract current from previous reading -->
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Bkwh" />
      					<label for="Bkwh">B</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Ckwh" />
      					<label for="Ckwh">C</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Dkwh" />
      					<label for="Dkwh">D</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Ekwh" />
      					<label for="Ekwh">E</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Fkwh" />
      					<label for="Fkwh">F</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Gkwh" />
      					<label for="Gkwh">G</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td>
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Hkwh" />
      					<label for="Hkwh">H</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="Ikwh" />
      					<label for="Ikwh">I</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 	
                    	<input type="checkbox" id="Jkwh" />
      					<label for="Jkwh">J</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
    </tbody>
</table>

<table id="cabinReadings" class="bordered striped">
    <thead>
                <tr>
                    <th data-field="updateReading"> Check to update
                    </th>
                    <th data-field="previousReading" > Previous Reading
                    </th>
                    <th data-field="currentReading" > Current Reading 
                    </th>
                    <th data-field="totalUsage" > KWH
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> 
                    	<input type="checkbox" id="1kwh" />
      					<label for="1kwh">1</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="2kwh" />
      					<label for="2kwh">2</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="3kwh" />
      					<label for="3kwh">3</label>
                    </th>
                    <td> 
                    	
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="4kwh" />
      					<label for="4kwh">4 </label>
                    </th>
                    <td> 
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
   </tbody>
</table>   

<table id="cplReadings" class="bordered striped">
    <thead>
                <tr>
                    <th data-field="updateReading"> Check to update
                    </th>
                    <th data-field="previousReading" > Previous Reading
                    </th>
                    <th data-field="currentReading" > Current Reading 
                    </th>
                    <th data-field="totalUsage" > KWH
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> 
                    	<input type="checkbox" id="1kwh" />
      					<label for="1kwh">meter 1</label>
                    </th>
                    <td> 
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="2kwh" />
      					<label for="2kwh">meter 2</label>
                    </th>
                    <td> 
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="3kwh" />
      					<label for="3kwh">meter 3</label>
                    </th>
                    <td> 
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
                </tr>
                <tr>
                    <th> 
                    	<input type="checkbox" id="4kwh" />
      					<label for="4kwh">meter 4</label>
                    </th>
                    <td> 
                    </td>
                    <td> 
                    	<div class="input-field">
          					<input placeholder="meter reading" id="Akwh" type="text" class="validate">
        				</div>
                    </td>
                    <td> 
                    </td>
   </tbody>
</table>          
        
@stop