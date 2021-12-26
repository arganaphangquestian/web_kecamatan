<x-modal>
  <x-slot name="title">Import Pengadaan</x-slot>
  <x-slot name="content">
    <form wire:submit.prevent="import">
      <input type="file" wire:model="csv">
      <button type="submit">Submit</button>
    </form>
  </x-slot>
</x-modal>
