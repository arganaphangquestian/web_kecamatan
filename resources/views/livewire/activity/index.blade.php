<div>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __("Activity") }}
    </h2>
  </x-slot>

  <div>
    <!-- Header -->
    <div class="flex justify-end mb-8">
      <button
        type="button"
        class="
          px-4
          py-2
          bg-green-100
          hover:bg-green-200 hover:text-green-500
          transition
          text-green-400
          rounded-md
        "
      >
        Add
      </button>
    </div>
    <!-- Table -->
    <div class="-my-2 overflow-x-auto">
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
              Foto Pengadaan
            </th>
            <th scope="col" class="relative px-6 py-3">
              <span class="sr-only">Opsi</span>
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
                {{$activity->activity_type}}
              </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              {{$activity->village}}
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

            <td class="px-6 py-4 whitespace-nowrap">
              <img
                class="
                  w-12
                  h-12
                  object-cover
                  overflow-hidden
                  shadow
                  rounded-full
                "
                src="{{$activity->attachment ?? 'https://ui-avatars.com/api/?name='.$activity->name.'&color=7F9CF5&background=EBF4FF'}}"
                alt="Kegiatan {{$activity->name}}"
              />
            </td>
            <td
              class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
            >
              <div class="flex gap-4">
                <button
                  onclick="Livewire.emit('openModal', 'activity.edit', {{ json_encode(['id' => $activity->id]) }})"
                  href="#"
                  class="text-indigo-600 hover:text-indigo-900"
                >
                  Edit
                </button>
                <button
                  onclick="Livewire.emit('openModal', 'activity.delete', {{ json_encode(['activity_id' => $activity->id]) }})"
                  class="text-red-600 hover:text-red-900"
                >
                  Delete
                </button>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="mt-10">
      {{$activities->links()}}
    </div>
  </div>
</div>
