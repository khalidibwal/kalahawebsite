<section class="ftco-section bg-light" id="section-contact">
    <div class="container">
      <div class="row">

        <div class="col-md-12 text-center mb-5 ftco-animate">
          <h2 class="display-4">Contact Us</h2>
          <div class="row justify-content-center">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
              <strong>{{ $message }}</strong>
            </div>
          @endif
          </div>

        </div>
        

        <div class="col-md mb-5 ftco-animate">
          <form action="/fnb/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name" class="sr-only">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" required="required" name="names">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter your email" required="required" name="email">
            </div>
            <div class="form-group">
              <label for="message" class="sr-only">Message</label>
              <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message" required="required" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
  <div id="map"></div>
  <!-- END section -->