import { Loader } from '@googlemaps/js-api-loader';

class Map {
  constructor() {
    this.loader = new Loader({
      apiKey: '',
      version: 'weekly',
    });
    this.events();
  }

  events() {
    this.initMap();
  }

  initMap() {
    this.loader.load().then(() => {
      const pp = { lat: 51.51627490961902, lng: -0.1475950851144213 };
      const icon = document.querySelector('[data-marker]').dataset.marker;
      const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: pp,
        streetViewControl: false,
        styles: [
          {
            featureType: 'all',
            elementType: 'labels.text.fill',
            stylers: [
              {
                saturation: 36,
              },
              {
                color: '#333333',
              },
              {
                lightness: 40,
              },
            ],
          },
          {
            featureType: 'all',
            elementType: 'labels.text.stroke',
            stylers: [
              {
                visibility: 'on',
              },
              {
                color: '#ffffff',
              },
              {
                lightness: 16,
              },
            ],
          },
          {
            featureType: 'all',
            elementType: 'labels.icon',
            stylers: [
              {
                visibility: 'off',
              },
            ],
          },
          {
            featureType: 'administrative',
            elementType: 'geometry.fill',
            stylers: [
              {
                color: '#fefefe',
              },
              {
                lightness: 20,
              },
            ],
          },
          {
            featureType: 'administrative',
            elementType: 'geometry.stroke',
            stylers: [
              {
                color: '#fefefe',
              },
              {
                lightness: 17,
              },
              {
                weight: 1.2,
              },
            ],
          },
          {
            featureType: 'landscape',
            elementType: 'geometry',
            stylers: [
              {
                color: '#f5f5f5',
              },
              {
                lightness: 20,
              },
            ],
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [
              {
                color: '#f5f5f5',
              },
              {
                lightness: 21,
              },
            ],
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [
              {
                color: '#dedede',
              },
              {
                lightness: 21,
              },
            ],
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.fill',
            stylers: [
              {
                color: '#ffffff',
              },
              {
                lightness: 17,
              },
            ],
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [
              {
                color: '#ffffff',
              },
              {
                lightness: 29,
              },
              {
                weight: 0.2,
              },
            ],
          },
          {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [
              {
                color: '#ffffff',
              },
              {
                lightness: 18,
              },
            ],
          },
          {
            featureType: 'road.local',
            elementType: 'geometry',
            stylers: [
              {
                color: '#ffffff',
              },
              {
                lightness: 16,
              },
            ],
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [
              {
                color: '#f2f2f2',
              },
              {
                lightness: 19,
              },
            ],
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [
              {
                color: '#e9e9e9',
              },
              {
                lightness: 17,
              },
            ],
          },
        ],
      });
      // The marker, positioned at Uluru
      const marker = new google.maps.Marker({
        position: pp,
        map: map,
        icon: icon,
      });
    });
  }
}

export default Map;
