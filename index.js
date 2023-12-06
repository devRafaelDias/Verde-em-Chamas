/*
let map;

async function initMap() {
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: { lat: -22.9824025, lng: -47.4747237 },
    zoom: 8,
  });
}

initMap();
*/

function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 5,
      center: { lat: -15.7215814, lng: -48.0197588 },
    });
    
    const tourStops = [
      [{ lat: -3.5806426, lng: -57.775902 }, "Pará"],
      [{ lat: -3.0444875, lng: -60.0495051 }, "Manaus"],
      [{ lat: -10.360816, lng: -45.992498 }, "Fronteira Matopiba"], //-10.360816, -45.992498
      [{ lat: -19.0283486, lng: -57.6667402 }, "Pantanal"],
    ];

    const infoWindow = new google.maps.InfoWindow();
  
    tourStops.forEach(([position, title], i) => {
      const marker = new google.maps.Marker({
        position,
        map,
        title: `${i + 1}. ${title}`,
        label: `${i + 1}`,
        optimized: false,
      });
  
      marker.addListener("click", () => {
        infoWindow.close();
        infoWindow.setContent(marker.getTitle());
        infoWindow.open(marker.getMap(), marker);
      });
    });
  }
  
  window.initMap = initMap;