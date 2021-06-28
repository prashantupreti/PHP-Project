<!-- Compose Modal -->
    <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Compose Email</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="comp_process.php">
            <div class="form-control"><label>To</label> <input type="text" name="to"></div><br/>
            <div class="form-control"><label>CC</label> <input type="text" name="cc"></div><br/>
            <div class="form-control"><label>Subject</label> <input type="text" name="subject"></div><br/>
            <div class="form-control"><label>Message</label> <textarea id="mytextarea" name="message"></textarea></div><br/>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Discard</button>
            <input type="submit" class="btn btn-success" name="submit" value="Send">
            </form>
          </div>
        </div>
      </div>
    </div>