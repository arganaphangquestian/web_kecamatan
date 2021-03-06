<div>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __("Manajemen Staff") }}
    </h2>
  </x-slot>

  <div>
    <!-- Header -->
    <div class="flex justify-between mb-8">
      <div class="flex-1">
        <input
          type="text"
          placeholder="Search"
          wire:model="search"
          class="rounded border-2 border-gray-200 ring-0 px-4 py-2"
        />
      </div>
      <div>
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
          onclick="Livewire.emit('openModal', 'user.create')"
        >
          Tambah Staff
        </button>
      </div>
    </div>

    <!-- Grid -->
    <div
      class="
        grid grid-cols-1
        md:grid-cols-2
        lg:grid-cols-3
        xl:grid-cols-4
        px-8
        py-8
        gap-8
      "
    >
      <!-- Card -->
      @foreach($users as $user)
      <div class="rounded-md shadow">
        <div class="flex px-4 py-2">
          <div class="flex-1 pr-4 overflow-hidden">
            <h1 class="text-lg font-semibold truncate">
              {{$user->name}}
            </h1>
            <p class="text-sm text-gray-600 truncate">
              {{$user->email}}
            </p>
          </div>
          <img
            class="w-12 h-12 rounded-full object-cover"
            src="{{$user->profile_photo_path ?? 'https://ui-avatars.com/api/?name='.$user->name.'&color=7F9CF5&background=EBF4FF'}}"
            alt=""
          />
        </div>
        <div class="flex border-t">
          <button
            type="button"
            onclick="Livewire.emit('openModal', 'user.edit', {{ json_encode(['id' => $user->id]) }})"
            class="flex-1 px-4 py-2 border-r text-yellow-400"
          >
            Edit
          </button>
          <button
            type="button"
            onclick="Livewire.emit('openModal', 'user.delete', {{ json_encode(['id' => $user->id]) }})"
            class="flex-1 px-4 py-2 text-red-400"
          >
            Delete
          </button>
        </div>
      </div>
      @endforeach
      <!-- End Card -->
    </div>

    <!-- Pagination -->
    <div class="mt-10">
      {{$users->links()}}
    </div>
  </div>
</div>
