<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
    <div class="section-title text-center center" style="background-image: url({{asset('img/menu-bg.jpg')}});">
      <div class="overlay">
        <h2>Menu</h2>
        <hr>
        <p>Martabak Robby mempunyai 3 Menu, Yaitu Martabak Manis, Martabak Telur Ayam, dan Martabak Telur Bebek</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title ">Martabak Manis Sedang</h2>
            <hr>
            @foreach ($menus as $item)
            @if($item->category == "Manis Sedang")
            <div class="menu-item">
              <div class="menu-item-name"> {{ $item->product_name }} </div>
              <div class="menu-item-price"> {{ $item->product_price }} </div>
              <div class="menu-item-description"> {{ $item->description }}</div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Martabak Manis Besar</h2>
            <hr>
            @foreach ($menus as $item)
            @if($item->category == "Manis Jumbo")
            <div class="menu-item">
              <div class="menu-item-name"> {{ $item->product_name }} </div>
              <div class="menu-item-price"> {{ $item->product_price }} </div>
              <div class="menu-item-description"> {{ $item->description }}</div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
    </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Martabak Telur Ayam</h2>
            <hr>
            @foreach ($menus as $item)
            @if($item->category == "Telur Ayam")
            <div class="menu-item">
              <div class="menu-item-name"> {{ $item->product_name }} </div>
              <div class="menu-item-price"> {{ $item->product_price }} </div>
              <div class="menu-item-description"> {{ $item->description }}</div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Martabak Telur Bebek</h2>
            <hr>
            @foreach ($menus as $item)
            @if($item->category == "Telur Bebek")
            <div class="menu-item">
              <div class="menu-item-name"> {{ $item->product_name }} </div>
              <div class="menu-item-price"> {{ $item->product_price }} </div>
              <div class="menu-item-description"> {{ $item->description }}</div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End Menu Section -->