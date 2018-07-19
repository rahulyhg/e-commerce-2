@extends('start')


@section('banners')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('start') }}">{{ __('validation.sections.'.'Home') }}</a><span>|</span></li>
                <li>{{ __('validation.sections.'.'Payment') }}</li>
            </ul>
        </div>
    </div>
    @parent
@endsection



@section('slider-brands')

    <div class="w3l_banner_nav_right">
        <!-- payment -->
        <div class="privacy about">
            <h3>{{ __('validation.sections.'.'Payment') }}</h3>

            <div class="checkout-right">
                <!--Horizontal Tab-->
                <div id="parentHorizontalTab">
                    <ul class="resp-tabs-list hor_1">
                        <li>{{ __('validation.other.'.'Cash on delivery') }}</li>
                        <li>{{ __('validation.other.'.'Credit') }}</li>
                        <li>Netbanking</li>
                        <li>Paypal {{ __('validation.other.'.'Account') }}</li>
                    </ul>
                    <div class="resp-tabs-container hor_1">

                        <div>
                            <div class="vertical_post check_box_agile">
                                <h5>COD</h5>
                                <div class="checkbox">
                                    <div class="check_box_one cashon_delivery">
                                        <label class="anim">
                                            <input type="checkbox" class="checkbox">
                                            <span> {{ __('validation.other.'.'We also accept Credit/Debit card on delivery. Please Check with the agent.') }}</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>
                            <form action="#" method="post" class="creditly-card-form agileinfo_form">
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">{{ __('validation.other.'.'Name on Card') }}</label>
                                                <input class="billing-address-name form-control" type="text" name="name" placeholder="{{ __('validation.other.'.'John Smith') }}">
                                            </div>
                                            <div class="w3_agileits_card_number_grids">
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">{{ __('validation.other.'.'Card Number') }}</label>
                                                        <input class="number credit-card-number form-control" type="text" name="number"
                                                               inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                               placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">
                                                        <label class="control-label">CVV</label>
                                                        <input class="security-code form-control"Â·
                                                               inputmode="numeric"
                                                               type="text" name="security-code"
                                                               placeholder="&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">{{ __('validation.other.'.'Expiration Date') }}</label>
                                                <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="{{ __('validation.other.'.'MM / YY') }}">
                                            </div>
                                        </div>
                                        <button class="submit"><span>{{ __('validation.other.'.'Make a payment') }} </span></button>
                                    </div>
                                </section>
                            </form>

                        </div>
                        <div>
                            <div class="vertical_post">
                                <form action="#" method="post">
                                    <h5>{{ __('validation.other.'.'Pick from Popular Banks') }}</h5>
                                    <div class="swit-radio">
                                        {{-- small banks list --}}
                                        <div class="check_box_one"> <div class="radio_one"> <label><input type="radio" name="radio" checked=""><i></i>{{ __('validation.other.'.'Bank') }}</label> </div></div>
                                    </div>
                                    <h5>{{ __('validation.other.'.'Or PICK OTHER BANK') }}</h5>
                                    <div class="section_room_pay">
                                        {{-- BIG banks list --}}
                                        <select class="year"><option value="">=== {{ __('validation.other.'.'Other Banks') }} ===</option><option value="ALB-NA">...</option></select>
                                    </div>
                                    <input type="submit" value="{{ __('validation.sections.'.'Payment') }}">
                                </form>
                            </div>
                        </div>
                        <div>
                            <div id="tab4" class="tab-grid" style="display: block;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
                                        <p>{{ __('validation.other.'.'Important: You will be redirected to PayPal\'s website to securely complete your payment.') }}</p><a class="btn btn-primary">Checkout via Paypal</a>
                                    </div>
                                    <div class="col-md-6">
                                        <form class="cc-form">
                                            <div class="clearfix">
                                                <div class="form-group form-group-cc-number">
                                                    <label>{{ __('validation.other.'.'Card Number') }}</label>
                                                    <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text"><span class="cc-card-icon"></span>
                                                </div>
                                                <div class="form-group form-group-cc-cvc">
                                                    <label>CVV</label>
                                                    <input class="form-control" placeholder="xxxx" type="text">
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="form-group form-group-cc-name">
                                                    <label>{{ __('validation.other.'.'Card Holder Name') }}</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group form-group-cc-date">
                                                    <label>{{ __('validation.other.'.'Valid Thru') }}</label>
                                                    <input class="form-control" placeholder="{{ __('validation.other.'.'MM / YY') }}" type="text">
                                                </div>
                                            </div>
                                            <div class="checkbox checkbox-small">
                                                <label>
                                                    <input class="i-check" type="checkbox" checked="">{{ __('validation.other.'.'Add to My Cards') }}</label>
                                            </div>
                                            <input class="btn btn-primary submit" type="submit" class="submit" value="Proceed Payment">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!--Plug-in Initialisation-->

                <!-- // Pay -->

            </div>

        </div>
        <!-- //payment -->
    </div>
    <div class="clearfix"></div>
    </div>

@endsection

@section('scripts')
    @parent
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
    <!-- //easy-responsive-tabs -->
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <script type="text/javascript" src="js/creditly.js"></script>
    <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

    <script type="text/javascript">
        $(function() {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function(e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });
    </script>
@endsection