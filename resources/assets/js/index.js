var React = require("react");
var ReactDOM = require("react-dom");

var App = React.createClass({
  render: function() {
    return (
    <div>
      <header id="header" className="headerImage">
		<div className="center-align">
		    <div className="preloader-wrapper active">
		        <div className="spinner-layer spinner-red-only">
		            <div className="circle-clipper left">
		                <div className="circle">
		                </div>
		            </div>
		            <div className="gap-patch">
		                <div className="circle">
		                </div>
		            </div>
		            <div className="circle-clipper right">
		                <div className="circle">
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		</header>

		<main>
		<div className="row">
		    <div className="col-lg-12">
		        <h1 className="page-header">
		            Your Front Row Seat to a Texas Gem, The Guadalupe River
		        </h1>
		        <p>
		            Calhoun’s Riverside RV Retreat offers visitors the best of the Guadulupe River. Just outside Tivoli, Texas, and a short drive from Victoria, Port O'Connor and Point Comfort, Calhoun’s is centrally located and filled 
		            with wildlife. Once you see it you’ll know: Calhoun’s is unlike any other Texas RV park. Here, visitors can take advantage of some of the best fishing, bow fishing, boating, and canoing and kayaking in Texas, or simply enjoy the river from their RV! Just 17 miles from Port Lavaca, 30 miles from Rockport and Victoria, Calhoun’s offers a peaceful RV camping experience nestled beneath giant oak trees.
		            <br>
		            </br>
					Forget trying to get a spot on the bay, Calhoun’s is just 5 short miles by boat from the San Antonio Bay. The river is plenty deep enough to accommodate larger boats, and with Calhoun’s private boat ramp, getting there is easy. Located in the center of the Crescent Coast, visitors can boat their way to the Gulf of Mexico, while enjoying an abundancy of wildlife.
					<br>
					</br>
					Calhoun’s offers more than a little something for everyone. Whether you enjoy deer, water fowel or feral hog hunting, this is a sportsmen’s paradise. If you’re a Winter Texan looking for an alternative to the crowds, Calhoun’s is a unique Texas RV Park centrally located to the region’s historic and resort towns. Tired of RV parks without a tree in sight? Wanting a little room to get comfortable? Seeking a little adventure on the river? Calhoun’s is a different kind of place. Paddle down the river one day, take a drive to Corpus Christi the next and enjoy all the variety in this quiet corner of the Crescent Coast.
					<br> 
					</br>
					Owned and operated by a U.S. Army veteran, Calhoun’s is all about providing sportsmen, Winter Texans and families with a great place to experience the best of Texas!
					<br>
					</br>
					Need lodging? We have cabins!
					<br>
					</br>
		        </p>
		    </div>
		</div>
		</main>
		<div className="row">
			<div className="col-md-4">
		    	<div className="panel panel-default">
		        	<div className="panel-heading">
		            	<h4><i className="fa fa-fw fa-check"></i> Contact </h4>
		        	</div>
		        	<div class="panel-body">
		            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
		            	<a href="#" className="btn btn-default">Learn More</a>
		        	</div>
		    	</div>
		    </div>
		    <div className="col-md-4">
		        <div className="panel panel-default">
		            <div className="panel-heading">
		                <h4><i className="fa fa-fw fa-gift"></i>Amenities</h4>
		            </div>
		            <div class="panel-body">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
		                <a href="#" className="btn btn-default">Learn More</a>
		            </div>
		        </div>
		    </div>
		    <div className="col-md-4">
		        <div className="panel panel-default">
		            <div className="panel-heading">
		                <h4><i className="fa fa-fw fa-compass"></i>Park Map</h4>
		            </div>
		            <div className="panel-body">
		            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
		            <a href="#" className="btn btn-default">Learn More</a>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
    )
  }
})

ReactDOM.render(<App />, document.getElementById("app"));