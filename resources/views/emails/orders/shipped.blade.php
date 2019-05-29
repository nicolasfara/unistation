@component('mail::message')
# Il tuo cibo sta arrivando!

Hai ordinato:

@component('mail::table')
| Prodotto             | Quantita                      | Prezzo                     |
| -------------------- | ----------------------------: | --------------------------:|
@foreach($order->products as $p)
| {{ $p->name }}       | {{ $p->pivot->quantity }}     | {{ $p->price }}&euro;      |
@endforeach
| **Totale:**          |                               | {{ $order->total }}&euro;  |
@endcomponent

Preparati alle: {{ $date->hour }}:{{ $date->minute }} del {{ $date->day }} {{ $date->month }}, uno dei nostri ti aspetterà per la consegna!

Grazie,<br>
{{ config('app.name') }}
@endcomponent
