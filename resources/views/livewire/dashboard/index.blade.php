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
    const map = L.map('map').setView([-6.1229985, 106.5413239], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    let marker;
    @foreach($activities as $activity)
      @php
        $lat = explode(';',$activity->location)[0];
        $lng = explode(';',$activity->location)[1];
      @endphp
      marker = new L.marker([{{$lat}}, {{$lng}}]);
      marker.bindPopup(`
      Nama Kegiatan: <strong>{{{$activity->name}}}</strong>
      <br/>
      Total Kontrak: <strong>{{{"Rp " . number_format($activity->amount,2,',','.')}}}</strong>
      <br/>
      Tahun: <strong>{{{$activity->start}}}</strong>
      <br/>
      Jenis Pengadaan: <strong>{{{$activity->activity_type->name}}}</strong>
      <br/>
      Desa: <strong>{{{$activity->village->name}}}</strong>
      <br/>
      Volume: <strong>{{{$activity->volume}}}</strong>
      <br/>
      Sumber Dana: <strong>{{{$activity->founding}}}</strong>`);
      map.addLayer(marker);
    @endforeach
  </script>
</div>
