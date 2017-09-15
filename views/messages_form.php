<div class="container">
  <div class="row" id="Send-message" style="padding-top:20px;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">CREATE MESSAGE</h3>
        </div>
        <div class="panel-body">
          <form action="index.php" method="post">
            <input type="hidden" class="form-control" name="page" value="send_message">
            <div class="form-group">
              <label for="receivers">To:</label>
              <input type="text" class="form-control" name="receivers" id="receivers" placeholder="Receivers(separated by comma)">
            </div>
            <div class="form-group">
              <label for="message">Enter Message:</label>
              <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default btn-block" id="sendMessageButton">
                 Send  <i class="glyphicon glyphicon-send"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
