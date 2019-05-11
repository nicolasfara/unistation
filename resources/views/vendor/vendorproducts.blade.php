<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
      @foreach($types as $type)
        <li class="tab"><a href="#{{ $type }}">{{ $type }}</a></li>
      @endforeach
    </ul>
    @foreach($types as $type)
      <div id="{{ $type }}" class="col s12">
        <div class="row">
          <ul class="collapsible">
            <!--foreach..-->
            <li>
              <div class="collapsible-header">
                <i class="material-icons">filter_drama</i>
                {{ $type }}
                <span class="new badge">4</span></div>
              <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <!--endforeach-->
          </ul>
        </div>
      </div>
    @endforeach

  </div>
</div>
