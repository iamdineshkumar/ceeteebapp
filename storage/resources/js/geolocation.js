
function getLocation() {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            // Set the values of the hidden input fields
            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;

        });
    }
    else{
        toastr.error('Could not able to find a Location', 'Error');
        
    }
}
