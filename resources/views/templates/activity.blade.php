<table class="w-full divide-y divide-gray-200">
  <thead class="bg-gray-50">
    <tr>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Nama Pengadaan
      </th>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Total Kontrak
      </th>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Jenis Pengadaan
      </th>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Desa
      </th>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Volume
      </th>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Sumber Dana
      </th>
      <th
        scope="col"
        class="
          px-6
          py-3
          text-left text-xs
          font-medium
          text-gray-500
          uppercase
          tracking-wider
        "
      >
        Tahun Mulai
      </th>
    </tr>
  </thead>
  <tbody class="bg-white divide-y divide-gray-200">
    @foreach ($activities as $activity)
    <tr>
      <td class="px-6 py-4 whitespace-nowrap">
        {{$activity->name}}
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        {{$activity->amount}}
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        <span
          class="
            px-2
            inline-flex
            text-xs
            leading-5
            font-semibold
            rounded-full
            bg-{{$activity->activity_type_color}}-100
            text-{{$activity->activity_type_color}}-800
          "
        >
          {{$activity->activity_type->name}}
        </span>
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        {{$activity->village->name}}
      </td>
      <td class="px-6 py-4 whitespace-nowrap">
        <span class="text-sm text-gray-600">
          {{$activity->volume}}
        </span>
      </td>

      <td class="px-6 py-4 whitespace-nowrap">
        <span class="text-sm text-gray-600">
          {{$activity->founding}}
        </span>
      </td>

      <td class="px-6 py-4 whitespace-nowrap">
        <span class="text-sm text-gray-600">
          {{$activity->start}}
        </span>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
