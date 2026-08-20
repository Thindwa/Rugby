@props([
    'path',
    'alt' => '',
    'class' => '',
    'loading' => 'lazy',
    'sizes' => '100vw',
])
@php
    $imagePath = ltrim($path, '/');
    $diskPath = storage_path('app/public/' . $imagePath);
    $info = is_file($diskPath) ? @getimagesize($diskPath) : false;
    $directory = trim(dirname($imagePath), '.\\/');
    $filename = pathinfo($imagePath, PATHINFO_FILENAME);
    $extension = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
    $base = ($directory ? $directory . '/' : '') . $filename;
    $originalUrl = asset('storage/' . $imagePath);
    $webpPath = $base . '.webp';
    $smallPath = $base . '-640.webp';
    $mediumPath = $base . '-1200.webp';
@endphp
@if($imagePath)
<picture class="responsive-image">
    @if(in_array($extension, ['jpg', 'jpeg', 'png']) && is_file(storage_path('app/public/' . $webpPath)))
        <source type="image/webp" srcset="{{ asset('storage/' . $smallPath) }} 640w, {{ asset('storage/' . $mediumPath) }} 1200w, {{ asset('storage/' . $webpPath) }} 1600w" sizes="{{ $sizes }}">
    @endif
    <img src="{{ $originalUrl }}" @if(in_array($extension, ['jpg', 'jpeg', 'png']) && is_file(storage_path('app/public/' . $smallPath))) srcset="{{ asset('storage/' . $smallPath) }} 640w, {{ asset('storage/' . $mediumPath) }} 1200w, {{ $originalUrl }} 1600w" sizes="{{ $sizes }}" @endif alt="{{ $alt }}" class="{{ $class }}" loading="{{ $loading }}" decoding="async" @if($info) width="{{ $info[0] }}" height="{{ $info[1] }}" @endif>
</picture>
@else
    <span class="responsive-image responsive-image--placeholder" aria-hidden="true"><i class="fa fa-image"></i></span>
@endif
