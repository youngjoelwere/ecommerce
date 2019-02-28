<div class="modal fade details-3" id="details-3" tableindex="-1" role="dialog" aria-labelledby="details-3" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true"&times;></span>
        </button>
          <h4 class="modal-title text-center">Level Wedding</h4>
      </div>
      <div class="modal-body">
        <div class="container fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="img/img3.png" class="details img-responsive"/>
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p>Do you want a weird but amazing<br/> wedding outfit?.Get it made for you at an <br/>affordable price.</p>
              <hr/>
              <p>Price:$24.99</p>
              <p>Material: soft tissue</p>
              <form action="add_cart.php" method="post">
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity"/>
                  </div><br/><br/></br/>
                  <div class="form-group">
                    <label for="size">Size:</label>
                    <select name="size" id="size" class="form-control">
                      <option value=""></option>
                      <option value="28">28</option>
                      <option value="32">32</option>
                      <option value="36">36</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>

      </div>
    </div>
  </div>
</div>
