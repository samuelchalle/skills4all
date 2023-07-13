import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
    static targets = [
        "temperature",
    ];

    connect() {
        let temperature = this.temperatureTarget;

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;
                const url = "https://api.open-meteo.com/v1/forecast?latitude=" + latitude + "&longitude=" + longitude + "&current_weather=true&hourly=temperature_2m,relativehumidity_2m,windspeed_10m";

                for (let i = 0; i < 24; i++) {
                    fetch(url)
                        .then((response) => response.json())
                        .then((data) => {
                            temperature.innerHTML = "Température : " + data['current_weather']['temperature'] + "°C";
                        });
                    setTimeout(() => {
                        console.log(temperature);
                    }, 3600000);
                }
            });
        } else {
            temperature.innerHTML = "La géolocalisation n'est pas supportée par ce navigateur.";
        }
    }
}