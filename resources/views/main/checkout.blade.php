<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #F8F8F8;">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <a href="{{url('/')}}" class="nav-link">Home ></a>
                <h2 style="display: inline;">Checkout</h2>
            </div>

            <div class="row g-5 display-flex justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing Address</h4>
                    <form class="needs-validation" method="post" action="{{url('/place_order')}}">
                        @csrf

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" name="firstname" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" name="lastname" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="phone" class="form-label">Phone</label>
                                <div class="input-group has-validation">
                                    <input type="number" class="form-control" id="phone" name="phone" required>
                                    <div class="invalid-feedback">
                                        Your phone is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="" required>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="" required>

                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">
                        <input type="submit" name="submit" value="Place Order" style="margin: 0px 300px;" class="w-25 btn btn-dark btn-lg">
                </div>

                </form>
            </div>
    </div>
    </main>
    <div class="footer" style="height: 200px;">

    </div>

</body>

</html>