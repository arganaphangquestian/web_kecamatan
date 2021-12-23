<div>
  @isset($jsPath)
  <script>
    {!! file_get_contents($jsPath) !!}
  </script>
  @endisset @isset($cssPath)
  <style>
    {!! file_get_contents($cssPath) !!}
  </style>
  @endisset

  <div
    class="fixed inset-0 overflow-hidden"
    aria-labelledby="slide-over-title"
    role="dialog"
    aria-modal="true"
    x-data="LivewireUIModal()"
    x-init="init()"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="closeModalOnEscape()"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    style="display: none"
  >
    <div class="absolute inset-0 overflow-hidden">
      <div
        x-show="show"
        x-on:click="closeModalOnClickAway()"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        aria-hidden="true"
        class="fixed inset-0 transition-all transform"
      >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
      <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
        <div
          class="relative w-screen max-w-md"
          x-show="show"
          x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
          x-transition:enter-start="translate-x-full"
          x-transition:enter-end="translate-x-0"
          x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
          x-transition:leave-start="translate-x-0"
          x-transition:leave-end="translate-x-full"
        >
          <div
            x-show="show"
            class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4"
            x-transition:enter="ease-in-out duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in-out duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
          >
            <button
              type="button"
              class="
                rounded-md
                text-gray-300
                hover:text-white
                focus:outline-none focus:ring-2 focus:ring-white
              "
              x-on:click="closeModalOnClickAway()"
            >
              <span class="sr-only">Close panel</span>
              <svg
                class="h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>

          <div
            class="
              h-full
              flex flex-col
              py-6
              bg-white
              shadow-xl
              overflow-y-scroll
            "
          >
            @forelse($components as $id => $component)
            <div
              x-show.immediate="activeComponent == '{{ $id }}'"
              x-ref="{{ $id }}"
              wire:key="{{ $id }}"
              class="h-full"
            >
              @livewire($component['name'], $component['attributes'], key($id))
            </div>
            @empty @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
