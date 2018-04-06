function initMap() {
    const brooklynLocation = {lat: 40.6782, lng: -73.9442}
    const manhattanLocation = {lat: 40.7831, lng: -73.9712}
    const longIslandLocation = {lat: 40.7891, lng: -73.1350}
    const queensLocation = {lat: 40.7282, lng: -73.7949}

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 9,
        center: brooklynLocation, manhattanLocation
    });

    let brooklyn = new google.maps.Marker({
        position: brooklynLocation,
        map: map
    });
    
    let manhattan = new google.maps.Marker({
        position: manhattanLocation,
        map: map
    });

    let longIsland = new google.maps.Marker({
        position: longIslandLocation,
        map: map
    });

    let queens = new google.maps.Marker({
        position: queensLocation,
        map: map
    });

}