<!-- Gallery Section -->
<section id="Gallery">
    <div class="container">
      <div class="row">
        <div class="col-xs-11 col-md-10 col-centered text-center">
          <a>Martabak Robby and Customers </a>
          <br><a>Gallery</a>
    

          <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
            <div class="carousel-inner">
              <div class="item active">
                @foreach ($galleries as $item)
                <div class="carousel-col">
                  <div class="row"><a href="{{ asset('uploads/gallery/' . $item->input_picture) }}"><img src="{{ asset('uploads/gallery/' . $item->input_picture) }}" class="img-fluid"
                    alt="" width="100%"></a></div>  
                  </div>
                  @endforeach
                </div>
            </div>
    
            <!-- Controls -->
            <div class="left carousel-control">
              <a href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            </div>
            <div class="right carousel-control">
              <a href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
    
        </div>
      </div>
    </div> 
  </section>
<!-- End Gallery Section -->