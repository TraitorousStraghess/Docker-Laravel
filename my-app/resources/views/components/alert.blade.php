<div class="flex flex-col gap-y-2">
  <div class="bg-secondary text-sm text-secondary-foreground rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-dark-label">
    <span id="hs-solid-color-dark-label" class="font-bold">Dark</span> alert! You should check in on some of those fields below.
  </div>
{{-- bg-gray-800 text-sm text-white rounded-lg p-4 --}}
  <div {{ $attributes->merge([
    'class' => 'text-sm text-white rounded-lg p-4 ' . $bg
  ]) }} role={{ $role }}>
    @isset($title)
        <span class="font-bold">{{ $title }}</span>
    @endisset
    {{ $slot }}
  </div>
</div>