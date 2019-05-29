@component('mail::message')
# Il tuo cibo sta arrivando!

Riepilogo ordine:

@component('mail::table')
| Prodotto             | Quantità                      | Prezzo                     |
| -------------------- | ----------------------------: | --------------------------:|
@foreach($order->products as $p)
| {{ $p->name }}       | {{ $p->pivot->quantity }}     | {{ $p->price }}&euro;      |
@endforeach
| **Totale:**          |                               | {{ $order->total }}&euro;  |
@endcomponent

Preparati alle **{{ $date->format('H:i') }}** del **{{ $date->day }}/{{ $date->month }}**,
uno dei nostri collaboratori ti aspetterà per la consegna!

Grazie,<br>
{{ config('app.name') }}
@endcomponent
