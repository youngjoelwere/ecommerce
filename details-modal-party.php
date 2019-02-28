<div class="modal fade details-4" id="details-4" tableindex="-1" role="dialog" aria-labelledby="details-4" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true"&times;></span>
        </button>
          <h4 class="modal-title text-center">Fabric Art Dresses</h4>
      </div>
      <div class="modal-body">
        <div class="container fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="img/img4.png" class="details img-responsive"/>
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p>How my design rocks the runway.<br/> Make your order right away!</p>
              <hr/>
              <p>Price:$24.99</p>
              <p>Brand:contemporary fabric</p>
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
