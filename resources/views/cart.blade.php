@extends('layouts.site')
@section('content')
    <!-- Page Banner Section -->
    {{-- <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('asset2/images/background/bg-banner-1.jpg')"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Shopping Cart</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>

    </section> --}}
    <!--End Banner Section -->

    <!--End Cart Section-->
    <section class="cart-section">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-column">
                    <div class="inner-column">
                        <div class="table-outer">
                            <div class="table-box">
                                <table class="cart-table">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="prod-column">Product</th>
                                            <th>&nbsp;</th>
                                            <th class="price">Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="prod-column">
                                                <div class="column-box">
                                                    <figure class="prod-thumb"><a href="#"><img class="lazy-image"
                                                                src="{{ asset('asset2/images/resource/image-spacer-for-validation.png') }}"
                                                                data-src="/storage/{{ $product->image }}" alt=""></a>
                                                    </figure>
                                                    <h4 class="prod-title">{{ $product->name }}</h4>
                                                </div>
                                            </td>
                                            <td class="price">&#8358;{{ number_format($product->price, 2) }}</td>
                                            <td class="qty">1</td>
                                            <td class="sub-total">&#8358;{{ number_format($product->price, 2) }}</td>
                                            <td class="remove"><a href="#" class="remove-btn"><span
                                                        class="flaticon-delete-1"></span></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="coupon-outer">
                                <div class="content-box clearfix">
                                    <div class="apply-coupon clearfix">
                                        <div class="field-label">Click on a coupon code to apply</div>
                                        <div class="form-group clearfix">
                                            <input type="text" name="coupon-code" value="" placeholder="Apply Coupon Code">
                                        </div>
                                        <div class="form-group clearfix">
                                            <button type="button" class="theme-btn coupon-btn btn-style-one"><span
                                                    class="btn-title">Apply Now</span></button>
                                        </div>
                                    </div>
                                    <div class="link-box">
                                        <button type="button" class="theme-btn btn-style-one cart-btn"><span
                                                class="btn-title">Update Cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="totals-column clearfix">
                    <div class="inner">
                        <div class="cart-total">
                            <h3 class="title">Cart Totals</h3>
                            <!--Totals Table-->
                            <ul class="totals-table">
                                <li class="clearfix">
                                    <span class="col col-title">Sub Total</span>
                                    <span class="col">&#8358;{{ number_format($product->price, 2) }}</span>
                                </li>
                                <li class="clearfix"><span class="col col-title">Order Total</span><span
                                        class="col total-price">&#8358;{{ number_format($product->price, 2) }}</span></li>
                                <li class="clearfix"><a href="/checkout/{{ $product->uuid }}"
                                        class="theme-btn btn-style-one"><span class="btn-title">Procceed To
                                            Checkout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Section-->
@endsection
