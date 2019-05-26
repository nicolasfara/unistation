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

Preparati alle: {{ $order->delivery_info }}, uno dei nostri ti aspetterà per la consegna!

Grazie,<br>
{{ config('app.name') }}
@endcomponent
