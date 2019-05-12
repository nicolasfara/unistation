<div class="container">
  <h1>Riepilogo ordini</h1>
  @forelse($orders as $order)
  @empty
  <h4>Non ci sono ordini al momento...</h4>
  @endforelse
</div>
