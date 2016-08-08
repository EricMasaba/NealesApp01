	<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Price Quote</h4>
          </div>
          <div class="modal-body">
          	 <h3>&pound;<div style="display: inline-block;" id="tripPrice">3.00</div></h3>
          </div>

	      <div class="modal-body">
            <p>Trip Details</p>
	            <div class="tripDetails" id="Origin"></div>
	            <div class="tripDetails" id="Destination"></div>
                <input type="text" hidden name="fda" value=""/>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

	<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Booking Confirmation</h4>
          </div>
          <div class="modal-body">
            <h5>Confirm this trip and pay?</h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info">Yes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>