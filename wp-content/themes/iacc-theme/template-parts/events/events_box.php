<div class="row row-event member-box-nav">
  <div class="col-md-12">

      <ul class="nav nav-pills mb-3 event-nav" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#senior" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="click_upcoming()">Upcoming Events</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#sustaining" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="click_past()">Past Events</button>
        </li>
      </ul>
    
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade" id="senior" role="tabpanel" aria-labelledby="senior">
    
        <div class="row row-member-box">
  
          <?php include (TEMPLATEPATH . "/template-parts/events/events-listing/upcoming_events.php"); ?>


        </div>
      </div>
      <div class="tab-pane fade" id="sustaining" role="tabpanel" aria-labelledby="sustaining">
    
        <div class="row row-member-box">
  
          
          <?php include (TEMPLATEPATH . "/template-parts/events/events-listing/past_events.php"); ?>

        </div>


      </div>
  
    </div>
  </div>
  </div>
  </div>
</div>