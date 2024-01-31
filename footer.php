<!--Start of Footer-->
<footer id="siteFooter">
    <div class="container">
      <div class="row g-2">
        <!--User Sign In Form-->
        <div class="col-sm-5 col-md-6"><h4 class="fa-1.5x">Order Sign-In</h4>
        
          <form class="row">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
              <label for="inputAddress2" class="form-label">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-8">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>TN</option>
                <option>GA</option>
                <option>FL</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck" id="gridLabel">
                  Agree to Terms
                </label>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </div>
      <!--End of User Sign In Form-->
      <!--Start of Order Form-->
        <div class="col-sm-5 offset-sm-1 col-md-5 offset-md-1 col-lg-5 offset-lg-1">
          <h4 class="fa-1.5x">Select Your Dish ToGo</h4>
          <label class="form-label">Select your Main Entree'</label>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Select Entree' Dish</option>
            <option value="1">Fish</option>
            <option value="2">Steak</option>
            <option value="3">Veggies</option>
          </select>
          <label class="form-label">Select your Side Dish</label>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Select Side Dish</option>
            <option value="1">Fries</option>
            <option value="2">Salad</option>
            <option value="3">Rice</option>
          </select>
          <label class="form-label">Select your Drink</label>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Select Drink</option>
            <option value="1">Water</option>
            <option value="2">Soda</option>
            <option value="3">Beer</option>
          </select>
        </div>
        

        </div>
      </div>
      
    </div>
    <!--End Order Form-->
  </footer>
  
  <?php wp_footer(); ?>
    
  </body>
</html>