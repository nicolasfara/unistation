<h4 class="center">Riepilogo ordini</h4>
<ul class="collapsible popout">
@forelse($orders as $order)
  <li id="order-{{ $order->id }}">
    <div class="collapsible-header">
      Ordine numero: #{{ $order->id }}
      @if($order->delivered == false)
      <span id="badge-{{ $order->id }}" class="new badge"></span>
      @endif
    </div>
    <div class="collapsible-body">
      <div class="row">
        <table class="striped">
          <thead>
            <tr>
              <th>Nome prodotto</th>
              <th>Quantità</th>
            </tr>
          </thead>

          <tbody>
            @foreach($order->products as $prod)
            @if(in_array($prod->id, $avail_prod))
            <tr>
              <td>{{ $prod->name }}</td>
              <td>{{ $prod->pivot->quantity }}</td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="row">
        @php
          $date = Carbon::parse($order->delivery_info)
        @endphp
        <h5>Informazioni spedizione</h5>
        <table class="striped">
          <thead>
            <tr>
              <th>Giorno</th>
              <th>Ora</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $date->day }} {{ $date->locale('it')->monthName }} {{ $date->year }}</td>
              <td>{{ $date->format('H:i') }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        @if($order->delivered == false)
        <a onclick="delivered({{ $order->id }})" class="btn">Spedisci</a>
        @else
        <a class="btn disabled">Spedisci</a>
        @endif
      </div>
    </div>
  </li>
@empty
<h4>Non ci sono ordini al momento...</h4>
@endforelse
</ul>
