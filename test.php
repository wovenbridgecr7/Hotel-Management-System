          
<!doctype html>
<html data-brackets-id='7706' lang="en">
  <head data-brackets-id='7707'>
    <meta data-brackets-id='7708' charset="utf-8">
    <meta data-brackets-id='7709' name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta data-brackets-id='7710' name="description" content="">
    <meta data-brackets-id='7711' name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta data-brackets-id='7712' name="generator" content="Jekyll v3.8.5">
    <title data-brackets-id='7713'>Checkout example · Bootstrap</title>

    <link data-brackets-id='7714' rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link data-brackets-id='7715' href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style data-brackets-id='7716'>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link data-brackets-id='7717' href="" rel="stylesheet">
<link data-brackets-id='7718' href="page2style.css" rel="stylesheet">
  </head>
  <body data-brackets-id='7719' class="bg-light">
        <div data-brackets-id='7720' class="navbar navbar-dark bg-dark shadow-sm" id="bark">
    <div data-brackets-id='7721' class="container d-flex justify-content-between">
         <a data-brackets-id='7722' href="page-1.html" class="navbar-brand d-flex align-items-center">
        <strong data-brackets-id='7723' id="linkmod">WOVEN PICKED</strong>
        </a>
          <a data-brackets-id='7724' href="#" class="navbar-brand d-flex align-items-center">
        <strong data-brackets-id='7725' id="linkmo">SIGN UP NOW</strong>
        </a>
        
            </div>
      </div>
    <div data-brackets-id='7726' class="container" id="kashish">
  <div data-brackets-id='7727' class="py-5 text-center">
    <!--<img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
    <h2 data-brackets-id='7728'>Give your details and enjoy fast bookings when you revisit our site</h2>
    <p data-brackets-id='7729' class="lead">Fill all the mandatory fields given below all the details are saved to us as an company policy and then you can just sign in to book your desired destinanation </p>
  </div>

  <div data-brackets-id='7730' class="row" id="good">
   <!-- <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>-->
    <!--<div class="col-md-8 order-md-1" >-->
        <div data-brackets-id='7731' id="good">
        
      <h4 data-brackets-id='7732' class="mb-3">Personal-Info</h4>
      <form data-brackets-id='7733' class="needs-validation" novalidate action=insert.php method="post">
          <div data-brackets-id='7734' id="test">
        <div data-brackets-id='7735' class="row">
          <div data-brackets-id='7736' class="col-md-6 mb-3">
            <label data-brackets-id='7737' for="password">First name</label>
            <input data-brackets-id='7738' type="text" class="form-control" id="password" placeholder="First name" value="" required name="fname">
            <div data-brackets-id='7739' class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div data-brackets-id='7740' class="col-md-6 mb-3">
            <label data-brackets-id='7741' for="lastName">Last name</label>
            <input data-brackets-id='7742' type="text" class="form-control" id="lastName" placeholder="Last name" value="" required name="lname">
            <div data-brackets-id='7743' class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div data-brackets-id='7744' class="mb-3">
          <label data-brackets-id='7745' for="username">Username</label>
          <div data-brackets-id='7746' class="input-group">
            <div data-brackets-id='7747' class="input-group-prepend">
              <span data-brackets-id='7748' class="input-group-text">@</span>
            </div>
            <input data-brackets-id='7749' type="text" class="form-control" id="username" placeholder="Username" required name="username">
            <div data-brackets-id='7750' class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div data-brackets-id='7751' class="mb-3">
          <label data-brackets-id='7752' for="email">Email <span data-brackets-id='7753' class="text-muted">(Optional)</span></label>
          <input data-brackets-id='7754' type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
          <div data-brackets-id='7755' class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div data-brackets-id='7756' class="mb-3">
          <label data-brackets-id='7757' for="address">Address</label>
          <input data-brackets-id='7758' type="text" class="form-control" id="address" placeholder="1234 Main St" required name="address">
          <div data-brackets-id='7759' class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <!--<div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>-->
          <div data-brackets-id='7760' class="row">
          <div data-brackets-id='7761' class="col-md-5 mb-3">
            <label data-brackets-id='7762' for="country">Country</label>
            <select data-brackets-id='7763' class="custom-select d-block w-100" id="country" required name="country">
              <option data-brackets-id='7764' value="">Choose...</option>
              <option data-brackets-id='7765'>United States</option>
                <option data-brackets-id='7766'>Spain</option>
                <option data-brackets-id='7767'>Italy</option>
                <option data-brackets-id='7768'>Finland</option>
                <option data-brackets-id='7769'>India</option>
                <option data-brackets-id='7770'>United Kingdom</option>
                <option data-brackets-id='7771'>Australia</option>
                <option data-brackets-id='7772'>France</option>
                                <option data-brackets-id='7773'>Germany</option>

            </select>
            <div data-brackets-id='7774' class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div data-brackets-id='7775' class="col-md-4 mb-3" id="shift">
            <label data-brackets-id='7776' for="state">State</label>
            <select data-brackets-id='7777' class="custom-select d-block w-100" id="state" required name="state">
              <option data-brackets-id='7778' value="">Choose...</option>
              <option data-brackets-id='7779'>California</option>
            </select>
            <div data-brackets-id='7780' class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <!--<div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>-->
        </div>
           <!--<div data-brackets-id='7781' class="col-md-6 mb-3" id="right">
            <label data-brackets-id='7782' for="firstName" > Confirm Password</label>
            <input data-brackets-id='7783' type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div data-brackets-id='7784' class="invalid-feedback">
              Valid password is required.
            </div>
          </div>-->
                <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
        
            <!-- <div data-brackets-id='7785' class="col-md-6 mb-3">
            <label data-brackets-id='7786' for="password"> Create Password</label>
            <input data-brackets-id='7787' type="text" class="form-control" id="password" placeholder="" value="" required>
            <div data-brackets-id='7788' class="invalid-feedback">
              Valid password is required.
            </div>
          </div>-->
                <div class="form-group">
    <label for="exampleInputPassword1"> Create Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
        
          </div>
       
       

        
        <!--<hr data-brackets-id='7789' class="mb-4">-->
        <div data-brackets-id='7790' class="custom-control custom-checkbox">
          <input data-brackets-id='7791' type="checkbox" class="custom-control-input" id="same-address">
          <label data-brackets-id='7792' class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div data-brackets-id='7793' class="custom-control custom-checkbox">
          <input data-brackets-id='7794' type="checkbox" class="custom-control-input" id="save-info">
          <label data-brackets-id='7795' class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <!--<hr data-brackets-id='7796' class="mb-4">-->
          <div data-brackets-id='7797' id="test">
              <br><br><br>
        <h4 data-brackets-id='7798' class="mb-3">Payment-Info</h4>

        <div data-brackets-id='7799' class="d-block my-3">
          <div data-brackets-id='7800' class="custom-control custom-radio">
            <input data-brackets-id='7801' id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label data-brackets-id='7802' class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div data-brackets-id='7803' class="custom-control custom-radio">
            <input data-brackets-id='7804' id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label data-brackets-id='7805' class="custom-control-label" for="debit">Debit card</label>
          </div>
         <!-- <div data-brackets-id='7806' class="custom-control custom-radio">
            <input data-brackets-id='7807' id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label data-brackets-id='7808' class="custom-control-label" for="paypal">PayPal</label>
          </div>-->
        </div>
        <div data-brackets-id='7809' class="row">
          <div data-brackets-id='7810' class="col-md-6 mb-3">
            <label data-brackets-id='7811' for="cc-name">Name on card</label>
            <input data-brackets-id='7812' type="text" class="form-control" id="cc-name" placeholder="" required>
            <small data-brackets-id='7813' class="text-muted">Full name as displayed on card</small>
            <div data-brackets-id='7814' class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div data-brackets-id='7815' class="col-md-6 mb-3">
            <label data-brackets-id='7816' for="cc-number">Credit card number</label>
            <input data-brackets-id='7817' type="text" class="form-control" id="cc-number" placeholder="" required>
            <div data-brackets-id='7818' class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div data-brackets-id='7819' class="row">
          <div data-brackets-id='7820' class="col-md-3 mb-3">
            <label data-brackets-id='7821' for="cc-expiration">Expiration</label>
            <input data-brackets-id='7822' type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div data-brackets-id='7823' class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div data-brackets-id='7824' class="col-md-3 mb-3">
            <label data-brackets-id='7825' for="cc-cvv">CVV</label>
            <input data-brackets-id='7826' type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div data-brackets-id='7827' class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr data-brackets-id='7828' class="mb-4">
        <button data-brackets-id='7829' class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Submit Details</button>
              <br><br>
          </div>
      </form>
    </div>
  </div>
      </div>

 <footer class="text-muted" id="test1">
    
  <div class="container" id="importy">
    <p class="float-right" id="newmat">
      CONTACT : 8279912542
    </p>
    <p id="newmat">web-site &copy;  kashish upadhyay</p>
   <!-- <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>-->
  </div>
    
</footer>
<script data-brackets-id='7839' src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script data-brackets-id='7840'>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script data-brackets-id='7841' src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script data-brackets-id='7842' src="form-validation.js"></script></body>
</html>
