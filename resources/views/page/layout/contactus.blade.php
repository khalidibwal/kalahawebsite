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
          @yield('formcontact')
        </div>
        
      </div>
    </div>
  </section>
  <div id="map"></div>
  <!-- END section -->