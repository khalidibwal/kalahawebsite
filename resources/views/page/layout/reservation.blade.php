<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);"></div>
            <div class="col-lg-8 p-5">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <small>CLOSE </small><span aria-hidden="true">&times;</span>
              </button>
              <h1 class="mb-4">Reserve A Table</h1>
              @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
              </div>
            @endif  
              @yield('mail_reservation')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- END Modal -->