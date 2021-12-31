<x-modal>
  <x-slot name="title">Tambah Pengadaan</x-slot>
  <x-slot name="content">
    <form wire:submit.prevent="submit">
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Nama Pengadaan</span>
        <input type="text" placeholder="Nama Pengadaan" class="bg-transparent border-gray-200 rounded-md" wire:model="activity.name"/>
      </label>
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Nilai Kontrak</span>
        <input type="number" placeholder="Nilai Kontrak" class="bg-transparent border-gray-200 rounded-md" wire:model="activity.amount"/>
      </label>
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Desa</span>
        <select type="text" placeholder="Desa" class="bg-transparent border-gray-200 rounded-md" wire:model="activity.village_id">
          <option>Pilih Desa</option>
          @foreach ($villages as $village)
          <option value="{{$village->id}}">{{$village->name}}</option>
          @endforeach
        </select>
      </label>
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Volume</span>
        <input type="number" placeholder="Volume" class="bg-transparent border-gray-200 rounded-md" wire:model="activity.volume"/>
      </label>
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Sumber Dana</span>
        <input type="text" placeholder="Sumber Dana" class="bg-transparent border-gray-200 rounded-md" wire:model="activity.founding"/>
      </label>
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Tahun</span>
        <input type="number" placeholder="Tahun" class="bg-transparent border-gray-200 rounded-md" wire:model="activity.start"/>
      </label>
      <label class="w-full rounded-md border-2 border-dashed p-8 mb-4 flex flex-col justify-center items-center">
        @if($attachment)
        <img src="{{$attachment->temporaryUrl()}}" alt="Aktifitas Pengadaan">
        @else
        <span class="text-gray-600 text-sm mb-1">Foto Pengadaan</span>
        @endif
        <input id="attachment" type="file" placeholder="attachment" class="hidden" wire:model="attachment"/>
      </label>
      <div class="flex flex-col gap-4">
        <button type="submit" class="px-4 py-2 rounded-md bg-green-200 hover:bg-green-300 text-green-800">Save</button>
        <button type="button" onclick="Livewire.emit('closeModal')" class="px-4 py-2 rounded-md bg-yellow-200 hover:bg-yellow-300 text-yellow-800">Cancel</button>
      </div>
    </form>
  </x-slot>
</x-modal>
