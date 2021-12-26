<x-modal>
  <x-slot name="title">Import Pengadaan</x-slot>
  <x-slot name="content">
    <form wire:submit.prevent="import" class="flex flex-col">
      <label class="w-full rounded-md border-2 border-dashed p-8 mb-4 flex flex-col justify-center items-center">
        <input type="file" wire:model="csv" class="hidden">
        <h1><span class="font-bold">Upload CSV</span> or <button wire:click="download" class="text-blue-800 font-semibold underline">Download Template</button></h1>
      </label>
      <div class="flex flex-col gap-4">
        <button type="submit" class="px-4 py-2 rounded-md bg-green-200 hover:bg-green-300 text-green-800">Submit</button>
        <button type="button" onclick="Livewire.emit('closeModal')" class="px-4 py-2 rounded-md bg-yellow-200 hover:bg-yellow-300 text-yellow-800">Cancel</button>
      </div>
    </form>
  </x-slot>
</x-modal>
