<div>
  <style>
    #map {
      height: 560px;
    }
  </style>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __("Dashboard") }}
    </h2>
  </x-slot>
  <div>
    <div id="map"></div>
  </div>
  <script>
    var map = L.map('map').setView([-6.1229985, 106.5413239], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
  </script>
</div>
