<?php 
  $db = mysqli_connect('localhost', 'root', '', 'Cooperate-for-ideas');

	$sqlget = "SELECT * from ideas";
	$sqldata = mysqli_query($db, $sqlget); 
 ?>
 
  <?php $iterator = 0; ?>
  <?php while ($element = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) : ?>
    <div class="modal fade" id="modal-details<?php echo $iterator; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title custom-title-size"><?php echo $element['title']; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5>About the project: </h5>
            <label><?php echo $element['about']; ?></label>
            <hr>
            <h5>Contact: </h5>
            <a href="mailto:<?php echo $element['eml']; ?>?body=%0D%0A%0D%0AThis%20message%20was%20sent%20from%20Cooperate%20for%20ideas"><?php echo $element['eml']; ?></a>
            <hr>
            <div class="form-group">
              <h5>People working on the project:</h5>
              <ul>
                <li>To do</li>
              </ul>
            </div>
            <hr>
            <div class="form-group">
              <h5>Give us feedback</h5>
              <textarea class="form-control" rows="3" placeholder="Tell us what you think about our idea"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-dark" data-dismiss="modal">Submit feedback</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-application<?php echo $iterator; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title custom-title-size">Apply for <?php echo $element['title']; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Full name</label>
              <input type="text" class="form-control" placeholder="Enter first name and last name" name="full_name">
            </div>
            <div class="form-group">
              <label>E-mail</label>
              <input type="email" class="form-control" placeholder="Enter e-mail" name="e-mail">
            </div>
            <div class="form-group">
              <label>Phone number</label>
              <input type="number" class="form-control" placeholder="Enter phone number" name="phone_num">
            </div>
            <div class="form-group">
              <label>Why you want to join?</label>
              <textarea class="form-control" rows="3" placeholder="Tell us what motivates you" name="motivation"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-dark" data-dismiss="modal">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <?php if ($iterator % 3 == 0) : ?>
      <div class="row">
    <?php endif ?>
    <div class="col">
      <div class="card custom-card-margin">
        <div class="card-header custom-title-size"><?php echo $element['title']; ?></div>
        <div class="card-body">
          <h5>About the project: </h5>
          <label><?php echo $element['about']; ?></label>
          <hr>
          <h5>Contact: </h5>
          <a href="mailto:<?php echo $element['eml']; ?>?body=%0D%0A%0D%0AThis%20message%20was%20sent%20from%20Cooperate%20for%20ideas"><?php echo $element['eml']; ?></a>
          <hr>
          <div class="form-group">
            <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#modal-details<?php echo $iterator; ?>">More details</button>
            <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#modal-application<?php echo $iterator; ?>">Apply</button>
          </div>
        </div>
      </div>
    </div>
    <?php $iterator++; ?>
    <?php if ($iterator % 3 == 0) : ?>
      </div>
    <?php endif ?>
  <?php endwhile ?>