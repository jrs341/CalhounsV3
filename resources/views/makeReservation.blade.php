@extends('layout')

@section('title')
Reservation
@stop

@section('content')
  <form action="#">
    <p>Would you like to reserve a cabin or an RV space?
    </br>
      <input type="checkbox" id="rvSpace" />
      <label for="rvSpace">RV Space</label>
    </p>
    <p>
      <input type="checkbox" id="cabin" />
      <label for="cabin">Cabin</label>
    </p>
  </form>
  <form action="#">
    <p>How would you like to rent the cabin or RV space?
    </br>
      <input type="checkbox" id="daily" />
      <label for="daily">Nightly</label>
    </p>
    <p>
      <input type="checkbox" id="weekly" />
      <label for="weekly">Weekly</label>
    </p>
    <p>
      <input type="checkbox" id="monthly" />
      <label for="monthly">Monthly</label>
  </form>
  <form>
  <div class="input-field col s12 m6">
    <select class="icons">
      <option value="" disabled selected>Choose your option</option>
      <option value="" data-icon="images/sample-1.jpg" class="circle">example 1</option>
      <option value="" data-icon="images/office.jpg" class="circle">example 2</option>
      <option value="" data-icon="images/yuna.jpg" class="circle">example 1</option>
    </select>
    <label>Images in select</label>
  </div>
  <div class="input-field col s12 m6">
    <select class="icons">
      <option value="" disabled selected>Choose your option</option>
      <option value="" data-icon="images/sample-1.jpg" class="left circle">example 1</option>
      <option value="" data-icon="images/office.jpg" class="left circle">example 2</option>
      <option value="" data-icon="images/yuna.jpg" class="left circle">example 3</option>
    </select>
    <label>Images in select</label>
  </div>
  </form>
  <!-- Need a form to ask cabin or RV number of people and how many pets/breed-->
            <!-- <div class="col-md-offset-1 col-md-5"> -->
               <!--  <form  name="makeReservation" id="reservationRequest" novalidate>
                <div> -->
                    <!-- <div class="control-group form-group"> -->
                    <!-- <div class="row"> 
                    	<label>Would you like to reserve a cabin or an RV space?</label>
                    </div>
                    <div class="form-check"> 
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="rvSpace" value="option1"> RV Space
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="cabin" value="option2"> Cabin
					  </label>
					</div>
				</div>
				<div class="row">
					<div class="form-check"> 
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="rvSpace" value="option1"> Daily
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="cabin" value="option2"> Weekly
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" id="cabin" value="option2"> Monthly
					  </label>
					</div>
				</div>
				<div class="row">
                    <div class="form-group">
					  <label for="example-number-input" class="col-2 col-form-label">Number of adults in your group?</label>
					  <div class="col-sm-2">
					    <input class="form-control" type="number" value="1" id="example-number-input">
					  </div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
					  <label for="example-number-input" class="col-2 col-form-label">Number of children in your group?</label>
					  <div class="col-sm-2">
					    <input class="form-control" type="number" value="1" id="example-number-input">
					  </div>
					</div>
				</div>
				<div class="row">
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
				</div>
				<div class="row">
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
				</div>
					<div class="form-group row">
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
					<div class="form-group row">
					  <label for="example-date-input" class="col-2 col-form-label">Date</label>
					  <div class="col-10">
					    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
					  </div>
					</div>
                    
                    <div id="success"></div> -->
                    <!-- For success/fail messages -->
                   <!--  <button type="submit" class="btn btn-primary">Send Message</button>
                </form> -->
            <!-- </div> -->
@stop