import { Controller } from "@hotwired/stimulus";

export default class extends Controller {

    connect() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                // Envoyer les coordonnées au serveur via AJAX ou un formulaire
                console.log(latitude);
                console.log(longitude);
            });
        } else {
            // Gestion de l’absence de prise en charge de la géolocalisation par le navigateur
        }
    }

}
