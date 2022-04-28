<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Codeigniter Google Autocomplete Address Search Example</title>
	<meta name="description" content="The tiny framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
	  .container {
		max-width: 500px;
	  }
	</style>
</head>
<body>
<div class="container mt-4">
<div class="form-group mb-3">
   <h3 class="mb-3"> Find Address or Location</h3>
   <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Choose Location">
</div>
<div class="form-group mb-3" id="latitudeArea">
   <label>Latitude</label>
   <input type="text" class="form-control" name="latitude" id="latitude">
</div>
<div class="form-group mb-3" id="longtitudeArea">
   <label>Longitude</label>
   <input type="text" class="form-control" name="longitude" id="longitude">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyB34M9Upe8AtZtwSogFYuy31rzUhjHXb3Q&libraries=places&callback=initAutocomplete"></script>
<script>
    $(document).ready(function() {
        $("#latitudeArea").addClass("d-none");
        $("#longtitudeArea").addClass("d-none");
    }); 
	
    google.maps.event.addDomListener(window, 'load', initialize);
	function initialize() {
		var input = document.getElementById('autocomplete');
		var autocomplete = new google.maps.places.Autocomplete(input);
		
		autocomplete.addListener('place_changed', function() {
			var place = autocomplete.getPlace();
			
			$('#latitude').val(place.geometry['location'].lat());
			$('#longitude').val(place.geometry['location'].lng());
			changeMap(place.geometry['location'].lat(), place.geometry['location'].lng())
			$("#latitudeArea").removeClass("d-none");
			$("#longtitudeArea").removeClass("d-none");
		});
	} 
</script>
</div>

<style>

</style>
<div id="map_canvas"  style="width:500px;height:380px;margin: 0 auto;"></div>

<script type="text/javascript"
            src="http://maps.google.com/maps/api/js?sensor=true">
    </script>


    <script>

      function changeMap(lat, long){
            var myLatlng = new google.maps.LatLng(lat, long);
            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                disableDefaultUI: true
            }
            const uluru = { lat, lng: long };

            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
      }


        window.onload = function WindowLoad(event) {
            var myLatlng = new google.maps.LatLng(-6.2087634, 106.845599);
            var myOptions = {
                zoom: 8,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                disableDefaultUI: true
            }
            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        }

       
      
    </script>

</body>
</html>