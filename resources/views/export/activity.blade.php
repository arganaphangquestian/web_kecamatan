<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
</head>
<style>
  * {
    font-family: sans-serif;
    text-align: center;
  }

  table {
    width: 100%;
  }

  img {
    width: 56px;
    height: 56px;
    object-fit: cover;
  }

  th {
    padding: 12px 0;
  }
  .title {
    text-align: center;
  }
  .header {
    display: flex;
    justify-content: center;
  }
</style>

<body>
  <div class="">
    <div class="title">Laporan data {{$description}} Kecamatan Sepatan</div>
    <div class="header">
      <div>
        <h1>PEMERINTAH KABUPATEN TANGERANG</h1>
        <h4>KECAMATAN SEPATAN</h4>
        <h6>Jl. Raya Mauk KM. 11 Sepatan Kabupaten Tangerang Kode Pos 15520</h6>
      </div>
    </div>
    <table border="1px" cellspacing="0" class="">
      <thead class="">
        <tr>
          <th scope="col" class="">
            Nama Pengadaan
          </th>
          <th scope="col" class="">
            Nilai Kontrak
          </th>
          <th scope="col" class="">
            Jenis Pengadaan
          </th>
          <th scope="col" class="">
            Desa
          </th>
          <th scope="col" class="">
            Volume
          </th>
          <th scope="col" class="">
            Sumber Dana
          </th>
          <th scope="col" class="">
            Tahun Mulai
          </th>
        </tr>
      </thead>
      <tbody class="">
        @foreach ($activities as $activity)
        <tr>
          <td class="">
            {{$activity->name}}
          </td>
          <td class="">
            {{"Rp " . number_format($activity->amount,2,',','.')}}
          </td>
          <td class="">
            <span class="
                  bg-{{$activity->activity_type_color}}-100
                  text-{{$activity->activity_type_color}}-800
                ">
              {{$activity->activity_type->name}}
            </span>
          </td>
          <td class="">
            {{$activity->village->name}}
          </td>
          <td class="">
            <span class="">
              {{$activity->volume}} m
            </span>
          </td>

          <td class="">
            <span class="">
              {{$activity->founding}}
            </span>
          </td>

          <td class="">
            <span class="">
              {{$activity->start}}
            </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
