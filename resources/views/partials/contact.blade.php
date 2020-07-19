<!-- Contact Section -->
<div id="contact" class="text-center">
    <div class="container">
      <div class="section-title text-center">
        <h2>Contact US</h2>
        <hr>
        <p>Kami akan selalu memberikan yang terbaik untuk customer. jika ada pertanyaan bisa hubungi nomor dibawah, atau bisa kirim pesan melalui form yang ada dibawah.</p>
      </div>
      <div class="row contact-info">      
        @foreach ($branches as $item)            
          <div class="col-md-4">                 
              <div class="contact-address">                     
                <i class="fa-3x fas fa-map-marker-alt"></i>
                <h5><strong> {{ $item->branch_name }}</strong></h5>
                <address> {{ $item->address }} </address>
                <p><a>{{ $item->phone_number }}</a></p>
              </div>
            </div>          
        @endforeach
      </div>             
      <div class="row text-center-justify">    
        <div class="col">                 
            <div class="contact-email">                     
              <i class="fa-2x far fa-envelope"></i>                    
              <h3>Email</h3>                     
              <p><a href="mailto:info@example.com">martabakrobby@gmail.com</a></p>                 
            </div>             
          </div>   
      </div>      
  
      <div class="col-md-10 col-md-offset-1">
        <form enctype="multipart/form-data" action="{{ route('admin.message.store') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </div>
      </form>
     </div>
    </div>
  </div>
   