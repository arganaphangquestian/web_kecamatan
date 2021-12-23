<div class="h-full flex flex-col py-6 bg-white shadow-xl overflow-y-scroll">
  <div class="px-4 sm:px-6">
    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
      {{ $title }}
    </h2>
  </div>
  <div class="mt-6 relative flex-1 px-4 sm:px-6">
    <!-- Replace with your content -->
    <div class="absolute inset-0 px-4 sm:px-6">
      <div
        class="h-full border-2 border-dashed border-gray-200"
        aria-hidden="true"
      >
        {{ $content }}
      </div>
    </div>
    <!-- /End replace -->
  </div>
</div>
