@extends('layouts.site')
@section('content')
    <!-- Page Banner Section -->
    {{-- <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('asset2/images/background/bg-banner-1.jpg')"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Checkout</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>

    </section> --}}
    <!--End Banner Section -->

    <!--CheckOut Page-->
    <section class="checkout-page">
        <div class="auto-container">

            <!--Checkout Details-->
            <div class="checkout-form">
                <form id="paymentForm">
                    <script src="https://js.paystack.co/v1/inline.js"></script>
                    <div class="billing-detail">
                        <div class="row clearfix">
                            <div class="billing-column col-lg-6 col-md-12 col-sm-12">
                                <h3 class="checkout-title">Billing Details</h3>
                                <div class="row clearfix">
                                    <!--Form Group-->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-label">Fullname Name<sup>*</sup></div>
                                        <input type="text" name="customerName" id="customerName" placeholder="Full name">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-label">Email Address<sup>*</sup></div>
                                        <input type="email" name="customerEmail" id="customerEmail"
                                            placeholder="Email address">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-label">Phone Number<sup>*</sup></div>
                                        <input type="text" name="customerPhone" id="customerPhone"
                                            placeholder="Phone number">
                                    </div>
                                    <input type="hidden" id="amount" value="{{ $product->price }}">
                                    <input type="hidden" id="productName" value="{{ $product->name }}">
                                    <div id="msg" style="color: red; font-size: 1rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="checkout-title">Your Order</h3>

                    <div class="order-detail">
                        <div class="cart-outer">
                            <table class="cart-table">
                                <tbody>
                                    <tr>
                                        <td class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb"><img class="lazy-image"
                                                        src="{{ asset('asset2/images/resource/image-spacer-for-validation.png') }}"
                                                        data-src="/storage/{{ $product->image }}" alt="">
                                                </figure>
                                                <h4 class="prod-title">{{ $product->name }}</h4>
                                            </div>
                                        </td>
                                        <td class="sub-total">&#8358;{{ number_format($product->price, 2) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                    <!--Payment Options-->
                    <div class="payment-options">
                        <h3>Payment Proccess</h3>
                        <ul>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-1" checked>
                                    <label for="payment-1"><strong>Online payment</strong><span class="small-text">Make your
                                            payment directly into our bank account. Please use
                                            your Order ID as the payment reference. Your order will not be shipped until the
                                            funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3">
                                    <label for="payment-3"><strong>Bitcoin <img
                                                src="https://softwaremasta.com/wp-content/plugins/blockonomics-bitcoin-payments/img/bitcoin-icon.png"
                                                alt="Bitcoin" /></strong></label>
                                </div>
                            </li>
                        </ul>
                        <div class="btn-box">
                            <button type="submit" class="theme-btn btn-style-one place-order"><span class="btn-title">Place
                                    Order</span></button>
                        </div>
                    </div>
                    <!--End Place Order-->
                </form>
            </div>
        </div>
    </section>
    <!-- End Checkout Page -->

    {{-- Make payment with paystack iframe --}}
    <script>
        var customerName;
        var customerEmail;
        var customerPhone;
        var amount;
        var productName;
        let paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener('submit', makePayment, false);

        function makePayment(e) {
            e.preventDefault();
            customerName = document.getElementById('customerName').value;
            customerEmail = document.getElementById('customerEmail').value;
            customerPhone = document.getElementById('customerPhone').value;
            amount = document.getElementById('amount').value;
            productName = document.getElementById('productName').value;

            if (customerName === '' || typeof customerName === 'undefined') {
                let msg = document.getElementById('msg');
                msg.innerHTML = 'All fields are required';
                return
            }

            if (customerEmail === '' || typeof customerEmail === 'undefined') {
                let msg = document.getElementById('msg');
                msg.innerHTML = 'All fields are required';
                return
            }

            if (customerPhone === '' || typeof customerPhone === 'undefined') {
                let msg = document.getElementById('msg');
                msg.innerHTML = 'All fields are required';
                return
            }
            payWithPaystack()
        }
        // var paymentForm = document.getElementById('paymentForm');
        // paymentForm.addEventListener('submit', payWithPaystack, false);

        function payWithPaystack() {
            // Test
            var key = 'pk_test_febf50e506edb99c276dfbada46e05a18251a4eb';
            // Live
            // var key = "pk_live_c7f4e231cd33ad338a29d2cacbf48609d93e7803";
            var handler = PaystackPop.setup({
                amount: amount *
                    100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                key: key, // Replace with your public key
                // email: document.getElementById('customerEmail').value,
                email: customerEmail,
                currency: 'USD', // Use GHS for Ghana Cedis or USD for US Dollars
                customerName: customerName,
                customerPhone: customerPhone,
                ref: '' + Math.floor((Math.random() * 1000000000) +
                    1), // Replace with a reference you generated
                metadata: {
                    custom_fields: [{
                            display_name: "Customer Name",
                            variable_name: "customerName",
                            value: customerName
                        },
                        {
                            display_name: "Customer Email",
                            variable_name: "customerEmail",
                            value: customerEmail
                        },
                        {
                            display_name: "Customer Phone",
                            variable_name: "customerPhone",
                            value: customerPhone
                        },
                        {
                            display_name: "Product Name",
                            variable_name: "productName",
                            value: productName
                        },
                    ]
                },
                callback: function(response) {
                    //this happens after the payment is completed successfully
                    var reference = response.reference;
                    alert('Payment successfully! Product will be sent to your email');
                    window.location.href = '/verify-transactions/' + reference
                },
                onClose: function() {
                    alert('Transaction was not completed.');
                },
            });
            handler.openIframe();
        }

    </script>
@endsection
