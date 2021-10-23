<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
{{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Mercado"> --}}
<img src="{{asset('images/icons/icons/Logo Mercado.ico')}}" class="logo" alt="Mercado Tzununya">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
