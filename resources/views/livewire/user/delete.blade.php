<x-modal>
  <x-slot name="title">Hapus Staff</x-slot>
  <x-slot name="content">
    <h4 class="mb-4">Hapus <span class="font-extrabold">{{$user->name}}</span>?</h4>
    <div class="flex flex-col gap-4">
      <button type="button" wire:click="submit" class="px-4 py-2 rounded-md bg-red-200 hover:bg-red-300 text-red-800">Delete</button>
      <button type="button" onclick="Livewire.emit('closeModal')" class="px-4 py-2 rounded-md bg-yellow-200 hover:bg-yellow-300 text-yellow-800">Cancel</button>
    </div>
  </x-slot>
</x-modal>
