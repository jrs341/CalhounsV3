@extends('layout')

@section('title')
Reservation
@stop

@section('content')
  <h1>Make a Reservation Page</h1>
  <!-- Need a form to ask cabin or RV number of people and how many pets/breed-->
  <div class="row">
            <div class="col-md-offset-1 col-md-5">
                <form  name="makeReservation" id="reservationRequest" novalidate>

                    <div class="control-group form-group"> 
                    	<label>Would you like to reserve a cabin or an RV space?</label>
                    <div class="form-check form-check-inline"> 
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="rvSpace" value="option1"> RV Space
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="cabin" value="option2"> Cabin
					  </label>
					</div>
                    <div class="form-group">
					  <label for="example-number-input" class="col-2 col-form-label">Number of adults in your group?</label>
					  <div class="col-sm-2">
					    <input class="form-control" type="number" value="1" id="example-number-input">
					  </div>
					</div>
					<div class="form-group">
					  <label for="example-number-input" class="col-2 col-form-label">Number of children in your group?</label>
					  <div class="col-sm-2">
					    <input class="form-control" type="number" value="1" id="example-number-input">
					  </div>
					</div>
					<div class="form-check form-check-inline">
					  	<label>
					  	Will you be bringing any pets?</label>
					  	</br>
					  	<label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="petYes" value="option1"> Yes
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="petNo" value="option2"> No
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  	<label>
					  	Are any of your pets dogs?</label>
					  	</br>
					  	<label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="petYes" value="option1"> Yes
					  </label>
					</div>
					<div class="form-check form-check-inline">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="petNo" value="option2"> No
					  </label>
					</div>
					<div class="form-group">
					    <label for="exampleSelect1">Are any of the dogs pure bred or mixed with any of the following breeds?
					    <select class="form-control" id="exampleSelect1">
					      <option>Pit Bull Terriers</option>
					      <option>Staffordshire Terriers</option>
					      <option>Rottweilers</option>
					      <option>German Shepherds</option>
					      <option>Presa Canarios</option>
						  <option>Chows Chows</option>
						  <option>Doberman Pinschers</option>
						  <option>Akitas</option>
					      <option>Wolf-hybrids</option>
						  <option>Mastiffs</option>
						  <option>Cane Corsos</option>
						  <option>Alaskan Malamutes</option>
						  <option>Siberian Huskies</option>
					    </select>
					</div>
                    
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
  </div>
@stop