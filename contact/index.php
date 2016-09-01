<?php include 'layout/header.php'; ?>

<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyB83IGsoYmc4I0DZnCTwgVNEgkea95khv4&sensor=false&extension=.js'></script>

<script>
	google.maps.event.addDomListener(window, 'load', init);
	var map;
	function init() {
		var mapOptions = {
			center: new google.maps.LatLng(37.6221582, -97.6269578),
			zoom: 15,
			zoomControl: false,
			disableDoubleClickZoom: false,
			mapTypeControl: false,
			scaleControl: false,
			scrollwheel: false,
			panControl: false,
			streetViewControl: false,
			draggable : true,
			overviewMapControl: false,
			overviewMapControlOptions: {
				opened: false,
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
		}
		var mapElement = document.getElementById('map');
		var map = new google.maps.Map(mapElement, mapOptions);
		var locations = [
		['Lake Afton Public Observatory', 'We are a group of people who are passionate about astronomy. Through our telescope, exhibits and events, we aim to foster education and wonder about our solar system and beyond.', '(316) 978-7827', 'hhenderson@lakeafton.com', 'lakeafton.com', 37.6221582, -97.6269578, 'https://mapbuildr.com/assets/img/markers/solid-pin-red.png']
		];
		for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
			if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
			if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
			marker = new google.maps.Marker({
				icon: markericon,
				position: new google.maps.LatLng(locations[i][5], locations[i][6]),
				map: map,
				title: locations[i][0],
				desc: description,
				tel: telephone,
				email: email,
				web: web
			});
			link = '';            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
		}
		function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
			var infoWindowVisible = (function () {
				var currentlyVisible = false;
				return function (visible) {
					if (visible !== undefined) {
						currentlyVisible = visible;
					}
					return currentlyVisible;
				};
			}());
			iw = new google.maps.InfoWindow();
			google.maps.event.addListener(marker, 'click', function() {
				if (infoWindowVisible()) {
					iw.close();
					infoWindowVisible(false);
				} else {
					var html= "<div style='color:#000;background-color:#fff;padding:5px;width:100%;'><h4>"+title+"</h4><p>"+desc+"<p><p>"+telephone+"<p></div>";
					iw = new google.maps.InfoWindow({content:html});
					iw.open(map,marker);
					infoWindowVisible(true);
				}
			});
			google.maps.event.addListener(iw, 'closeclick', function () {
				infoWindowVisible(false);
			});
		}
	}
</script>

<div id='map'></div>









<div class="content">
	<div class="container">
		<div class="row">


		<div class="col-md-5">
				<div class="row">
					<div class="col-md-6">
						<h1>Contact</h1>
						<p>
							<strong>Address</strong><br>
							<a href="https://www.google.com/maps/place/Lake+Afton+Public+Observatory/@37.6191311,-97.6298515,15z/data=!4m5!3m4!1s0x0:0xc58065545de2e731!8m2!3d37.6221582!4d-97.6269578" target="_blank">25000 W. 39th S.<br>
								Goddard, KS 67052</a><br>
								<a href="tel:3169787827">(316) 978-7827</a><br><br>

								<strong>Media Inquiries</strong> <br> <a href="mailto:marketing@lakeafton.com">marketing@lakeafton.com</a><br><br>

								<strong>Observatory Director</strong> <br> <a href="mailto:hhenderson@lakeafton.com">hhenderson@lakeafton.com</a><br><br>

								<strong>Chairman</strong> <br> <a href="mailto:fgassert@lakeafton.com">fgassert@lakeafton.com</a><br><br>

								<strong>Sponsorship and donations</strong> <br> <a href="mailto:fundraising@lakeafton.com">fundraising@lakeafton.com</a><br>
							</p>
						</div>
						<div class="col-md-6">
							<h1>Hours</h1>
							<p>
								<strong>Friday</strong><br>
								8pm-10pm <br>
								<br>
								<strong>Saturday</strong><br>
								8pm-10pm
							</p>
						</div>
					</div>
				</div>



				<div class="col-md-7">
					<img style="width: 100%;" src="/layout/img/building.jpg" alt="">
				</div>


			</div>
		</div>
	</div>


	<?php include 'layout/footer.php'; ?>
