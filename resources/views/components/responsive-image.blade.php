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
    $webpUrl = asset('storage/' . $webpPath);
    $smallUrl = asset('storage/' . $smallPath);
    $mediumUrl = asset('storage/' . $mediumPath);
    $hasWebp = in_array($extension, ['jpg', 'jpeg', 'png']) && is_file(storage_path('app/public/' . $webpPath));
    $hasSmall = in_array($extension, ['jpg', 'jpeg', 'png']) && is_file(storage_path('app/public/' . $smallPath));
    $hasMedium = in_array($extension, ['jpg', 'jpeg', 'png']) && is_file(storage_path('app/public/' . $mediumPath));
    $webpSrcset = collect([
        $hasSmall ? $smallUrl . ' 640w' : null,
        $hasMedium ? $mediumUrl . ' 1200w' : null,
        $hasWebp ? $webpUrl . ' 1600w' : null,
    ])->filter()->implode(', ');
    $originalSrcset = collect([
        $hasSmall ? $smallUrl . ' 640w' : null,
        $hasMedium ? $mediumUrl . ' 1200w' : null,
        $originalUrl . ' 1600w',
    ])->filter()->implode(', ');
@endphp
@if($imagePath)
<picture class="responsive-image">
    @if($webpSrcset)
        <source type="image/webp" srcset="{{ $webpSrcset }}" sizes="{{ $sizes }}">
    @endif
    <img src="{{ $originalUrl }}" @if($hasSmall || $hasMedium) srcset="{{ $originalSrcset }}" sizes="{{ $sizes }}" @endif alt="{{ $alt }}" class="{{ $class }}" loading="{{ $loading }}" decoding="async" @if($info) width="{{ $info[0] }}" height="{{ $info[1] }}" @endif>
</picture>
@else
    <span class="responsive-image responsive-image--placeholder" aria-hidden="true"><i class="fa fa-image"></i></span>
@endif
