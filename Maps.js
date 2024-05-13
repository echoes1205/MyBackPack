function iniciarMap()
{
    //31.59926055709333, -106.40630908880503
    var coord = {lat:31.59926055709333 ,lng: -106.40630908880503};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 18,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}