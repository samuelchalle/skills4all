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

                // Envoyer les coordonnées à l’api météo


                // Récupérer la température depuis le serveur


                // Afficher la température dans la page
                temperature.innerHTML = "22°C";
            });
        } else {
            // Gestion de l’absence de prise en charge de la géolocalisation par le navigateur
        }
    }

}
