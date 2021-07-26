@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>

@endif

<div class="container">
<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Have quotation number</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Quotation Number</label>
                                                <input id="cc-pament" name="payment-quotatation" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Payment
                                                    amount</label>
                                                <input id="cc-pament" name="cc-payment" type="text" class="form-control"
                                                    aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Name on card</label>
                                                <input id="cc-name" name="cc-name" type="text"
                                                    class="form-control cc-name valid" data-val="true"
                                                    data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                                    aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid"
                                                    data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Card number</label>
                                                <input id="cc-number" name="cc-number" type="tel"
                                                    class="form-control cc-number identified visa" value=""
                                                    data-val="true" data-val-required="Please enter the card number"
                                                    data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number"
                                                    data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp"
                                                            class="control-label mb-1">Expiration</label>
                                                        <input id="cc-exp" name="cc-exp" type="tel"
                                                            class="form-control cc-exp" value="" data-val="true"
                                                            data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year"
                                                            placeholder="MM / YY" autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp"
                                                            data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Security
                                                        code</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="x_card_code" type="tel"
                                                            class="form-control cc-cvc" value="" data-val="true"
                                                            data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code"
                                                            autocomplete="off">
                                                        <div class="input-group-addon">
                                                            <span class="fa fa-question-circle fa-lg"
                                                                data-toggle="popover" data-container="body"
                                                                data-html="true" data-title="Security Code"
                                                                data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                                data-trigger="hover"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="/checkout">
                                                <button id="payment-button" type="submit"
                                                    class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>
                                                    <span id="payment-button-amount">Pay $100.00</span>
                                                    <span id="payment-button-sending"
                                                        style="display:none;">Sending…</span>
                                                </button>
                                                </a>
                                            </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->    
                     
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Want Quotation</strong></div>
                            
                            <div class="card-body ">
                               <form action="/userproducts_details" method="post">
                               @csrf    
                                <div class="form-group">
                                   <label >Product Name</label>
                                   <input type="text" name="product_name" class="form-control" aria-describedby="emailHelp" placeholder="Product Name">

                                </div>
                                
                                <div class="form-group">
                                  <label>Product Type</label>
                                  <select name="type" class="form-control">
                                   <option >Product Type</option>
                                   <option value="Pick">Pick</option>
                                   <option value="Pack">Pack</option>
                                   <option value="Ship">Ship</option>
                                   <option value="Delivered">Delivered</option>
                                  </select>
                                </div>
                                
                                <div class="form-group">
                                  <label >Product Address</label>
                                   <input type="text" name="product_address" class="form-control" aria-describedby="emailHelp" placeholder="Product Address"> 
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="email" name="quotation_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your working email address! We will send quotation/estimate cost">
                                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                 <label for="exampleInputEmail1">Phone Number</label>
                                 <input type="text" name="quotation_mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your working mobile number! We will send quotation/estimate cost">
                                 <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
                                </div>
                                

                                <div>
                                   <button id="payment-button" type="submit"
                                                    class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-dot-circle-o"></i>
                                                    <span id="payment-button-amount">Submit</span>
                                                    
                                                </button>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
</div>   
</div>


                    
@endsection
