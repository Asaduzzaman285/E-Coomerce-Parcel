<!DOCTYPE html>
<html>
<head>
    <title>Stripe Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        #card-element {
            height: 50px;
            padding-top: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-5">
                    <h3 class="card-header p-3">Stripe Payment</h3>
                    <div class="card-body">
                        @session('success')
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endsession

                        <form id='checkout-form' method='post' action="{{ route('stripe.post') }}">
                            @csrf
                            <strong>Name:</strong>
                            <input type="input" class="form-control" name="name" placeholder="Enter Name" required>
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>
                            <input type='hidden' name='amount' value="{{ $totalprice }}"> <!-- Add hidden amount -->
                            <br>
                            <div id="card-element" class="form-control"></div>
                            <button
                                id='pay-btn'
                                class="btn btn-success mt-3"
                                type="button"
                                style="margin-top: 20px; width: 100%; padding: 7px;"
                                onclick="createToken()">PAY ${{ $totalprice }} <!-- Display total price -->
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        function createToken() {
            document.getElementById("pay-btn").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    document.getElementById("pay-btn").disabled = false;
                    alert(result.error.message);
                } else {
                    document.getElementById("stripe-token-id").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
</body>
</html>
