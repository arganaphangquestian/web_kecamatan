<x-modal>
  <x-slot name="title">Ubah Staff</x-slot>
  <x-slot name="content">
    <div class="flex flex-col">
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Name</span>
        <input type="text" placeholder="John Doe" class="bg-transparent border-gray-200 rounded-md" wire:model="user.name"/>
      </label>
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Email</span>
        <input type="email" placeholder="johndoe@mail.com" class="bg-transparent border-gray-200 rounded-md" wire:model="user.email"/>
      </label>
      <label class="flex flex-col mb-4">
        <span class="text-gray-600 text-sm mb-1">Password</span>
        <input type="password" placeholder="********" class="bg-transparent border-gray-200 rounded-md" wire:model="password"/>
      </label>
      <div class="flex flex-col gap-4">
        <button type="button" wire:click="submit" class="px-4 py-2 rounded-md bg-green-200 hover:bg-green-300 text-green-800">Update</button>
        <button type="button" onclick="Livewire.emit('closeModal')" class="px-4 py-2 rounded-md bg-yellow-100 hover:bg-yellow-200 text-yellow-800">Cancel</button>
      </div>
    </div>
  </x-slot>
</x-modal>
