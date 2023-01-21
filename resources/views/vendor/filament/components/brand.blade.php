@if (filled($brand = config('filament.brand')))
    <div @class([
        'filament-brand text-xl font-bold tracking-tight',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
        {{-- {{ $brand }} --}}

        <img src="{{ asset('https://viva.com.do/wp-content/themes/viva-3/img/logo-base.png') }}" alt="Logo" class="h-10">
    </div>
@endif
