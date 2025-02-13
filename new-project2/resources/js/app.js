import './bootstrap';
var visible= false;


function show(){
 
    Swal.fire({
        title: "Click able links!",
        text: "Clickable links are Contact and about us!",
        icon: "success"
      });
}
window.onload = getLocation;
function getLocation() {
  // Check if geolocation is available
  if (navigator.geolocation) {
      // Get the current position
      navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else {
      document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  const latitude = position.coords.latitude;
  const longitude = position.coords.longitude;

  const apiUrl = `https://nominatim.openstreetmap.org/reverse?lat=${latitude}&lon=${longitude}&format=json`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const country = data.address.country;
                document.getElementById("location").innerHTML = 
                    `<br>Country: ${country}`;
            })
            .catch(error => {
                document.getElementById("location").innerHTML = "Error in fetching country data.";
                console.error(error);
            });
    
}
function showError(error) {
  switch(error.code) {
      case error.PERMISSION_DENIED:
          document.getElementById("location").innerHTML = "User denied the request for Geolocation.";
          break;
      case error.POSITION_UNAVAILABLE:
          document.getElementById("location").innerHTML = "Location information is unavailable.";
          break;
      case error.TIMEOUT:
          document.getElementById("location").innerHTML = "The request to get user location timed out.";
          break;
      case error.UNKNOWN_ERROR:
          document.getElementById("location").innerHTML = "An unknown error occurred.";
          break;
  }
}
navigator.geolocation.watchPosition(showPosition, showError);