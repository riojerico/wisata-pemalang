<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<meta name="viewport" content="width=620">
<title>HTML5 Demo: geolocation</title>
<link rel="stylesheet" href="css/html5demos.css">
<script type="text/javascript" src="http://ff.kis.scr.kaspersky-labs.com/2DD911E1-44E5-8D4E-8F80-C49DA5958839/main.js" charset="UTF-8"></script><script src="js/h5utils.js"></script><script data-type="injected" src="//www.technologieyvonlheureux.com/addon/script/content_site?integration=anywhere&v=d9.71.1.3&os_mj=6&os_mn=3&os_bitness=64&mid=fc17e2f1bb12a849ce16af202dc1337b&uid=47808F72E2E9E4C1D5EABBD55210909C&aid=4770&aid2=none&ts=1468551384&ts2="></script></head>
<body>
<section width='100%'>

    <header>
      <h1>geolocation</h1>
    </header>
<meta name="viewport" content="width=620" />

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDoSxsJM0u4JhI-68BpC7cankbxR_Cfgjc"></script>
    <article>
      <p>Finding your location: <span id="status">checking...</span></p>
    </article>
<script>
function success(position) {
  var s = document.querySelector('#status');
  
  if (s.className == 'success') {
    // not sure why we're hitting this twice in FF, I think it's to do with a cached result coming back    
    return;
  }
  
  s.innerHTML = "found you!";
  s.className = 'success';
  
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcanvas';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '560px';
    
  document.querySelector('article').appendChild(mapcanvas);
  
  var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  var myOptions = {
    zoom: 15,
    center: latlng,
    mapTypeControl: false,
    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
  
  var marker = new google.maps.Marker({
      position: latlng, 
      map: map, 
      title:"You are here! (at least within a "+position.coords.accuracy+" meter radius)"
  });
}

function error(msg) {
  var s = document.querySelector('#status');
  s.innerHTML = typeof msg == 'string' ? msg : "failed";
  s.className = 'fail';
  
  // console.log(arguments);
}

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success, error);
} else {
  error('not supported');
}

</script>
</section>
</body>
</html>
