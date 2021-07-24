@extends('layouts.master')

@section('content')

<div class="section padding_layout_1 checkout_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="full">
          <div class="tab-info login-section">
            <p>Returning customer? <a href="#login" class="" data-toggle="collapse">Click here to login</a></p>
          </div>
          <div id="login" class="collapse">
            <div class="login-form-checkout">
              <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
              <form action="#">
                <fieldset>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="username">Username or email <span class="required">*</span></label>
                    <input class="input-text" name="username" id="username" required="" type="text">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="password">Password <span class="required">*</span></label>
                    <input class="input-text" name="password" id="password" required="" type="password">
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 btn-login">
                    <button class="bt_main">Login</button>
                    <span class="remeber">
                    <input type="checkbox">
                    Remember me</span> </div>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="tab-info coupon-section">
            <p>Have a coupon? <a href="#cupon" class="" data-toggle="collapse">Click here to enter your code</a></p>
          </div>
          <div id="cupon" class="collapse">
            <div class="coupen-form">
              <form action="#">
                <fieldset>
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <input class="input-text" name="coupon" placeholder="Coupon code" id="coupon" required="" type="text">
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <button class="bt_main">Login</button>
                  </div>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="checkout-form">
          <form action="#">
            <fieldset>
            <div class="row">
              <div class="col-md-6">
                <div class="form-field">
                  <label>First name <span class="red">*</span></label>
                  <input name="firstname" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Last name <span class="red">*</span></label>
                  <input name="lastname" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>Company name</label>
                  <input name="companyname" type="text">
                </div>
              </div>
              {{-- <div class="col-md-12">
                <div class="form-field">
                  <label>Country</label>
                  <select name="cn">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Åland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia, Plurinational State of</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, the Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Réunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin (French part)</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten (Dutch part)</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.S.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                </div>
              </div> --}}
              <div class="col-md-12">
                <div class="form-field">
                  <label>Address <span class="red">*</span></label>
                  <textarea name="address"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>Town / City <span class="red">*</span></label>
                  <input name="city" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>State / County <span class="red">*</span></label>
                  <input name="state" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>Postcode / ZIP <span class="red">*</span></label>
                  <input name="zipcode" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Phone <span class="red">*</span></label>
                  <input name="phone" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Email address <span class="red">*</span></label>
                  <input name="email" type="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <input name="ck" type="checkbox">
                  <span class="crte-ac">Create an account?</span> </div>
              </div>
            </div>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="shopping-cart-cart">
          <table>
            <tbody>
              <tr class="head-table">
                <td><h5>Cart Totals</h5></td>
                <td class="text-right"></td>
              </tr>
              <tr>
                <td><h4>Subtotal</h4></td>
                <td class="text-right"><h4>$42.00</h4></td>
              </tr>
              <tr>
                <td><h5>Estimated shipping</h5></td>
                <td class="text-right"><h4>$6.00</h4></td>
              </tr>
              <tr>
                <td><h3>Total</h3></td>
                <td class="text-right"><h4>$48.00</h4></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="payment-form">
          <div class="col-xs-12 col-md-12">
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
              <div class="panel-heading display-table">
                <div class="display-tr">
                  <h3 class="panel-title display-td">Payment Details</h3>
                  <div class="display-td"> <img class="img-responsive pull-right" src="images/it_service/accepted.png" alt="#"> </div>
                </div>
              </div>
              <div class="panel-body">
                <form id="payment-form" method="POST" action="index.html">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-field">
                        <label>Card Number</label>
                        <div class="form-field cardNumber">
                          <input name="cardNumber" placeholder="Valid Card Number" required="" type="tel">
                          <span class="input-group-addon"><i class="fa fa-credit-card"></i></span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-md-7">
                      <div class="form-field">
                        <label><span class="hidden-xs">Expiration</span><span class="visible-xs-inline">EXP</span> Date</label>
                        <input name="cardExpiry" placeholder="MM / YY" required="" type="tel">
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-5 pull-right">
                      <div class="form-field">
                        <label>CV Code</label>
                        <input name="cardCVC" placeholder="CVC" required="" type="tel">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-field">
                        <label>Coupon Code</label>
                        <input name="couponCode" required="" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 payment-bt">
                      <div class="center">
                        <button class="bt_main">Start Subscription</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection