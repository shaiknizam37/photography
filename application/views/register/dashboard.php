<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Photography Club Registration</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="colorlib.com">
      <!-- MATERIAL DESIGN ICONIC FONT -->
      <link rel="stylesheet" href="<?php echo URL; ?>/registration/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
      <!-- DATE-PICKER -->
      <link rel="stylesheet" href="<?php echo URL; ?>/registration/vendor/date-picker/css/datepicker.min.css">
      <!-- STYLE CSS -->
      <link rel="stylesheet" href="<?php echo URL; ?>/registration/css/style.css">
   </head>
   <body>
      <div class="wrapper">
         <form action="http://cctcabs.com/index.php/register/dashboard/register" id="wizard" style="padding-bottom:100px;" method="post">
            <?php echo validation_errors(); ?>  
            <?php echo form_open('form'); ?>  
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
               <h3>Basic details</h3>
               <div class="form-row">
                  <div class="form-holder">
                     <i class="zmdi zmdi-account"></i>
                     <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                  </div>
                  <div class="form-holder">
                     <i class="zmdi zmdi-account"></i>
                     <input type="text" class="form-control" placeholder="Last Name" name="lastt_name" required>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-holder">
                     <i class="zmdi zmdi-smartphone-android"></i>
                     <input type="text" class="form-control" placeholder="Phone Number" name="mobile_no" required>
                  </div>
                  <div class="form-holder">
                     <i class="zmdi zmdi-email"></i>
                     <input type="email" class="form-control" placeholder="Email ID" name="email" required>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-holder">
                     <i class="zmdi zmdi-map"></i>
                     <input type="text" class="form-control" placeholder="Area" name="area" required>
                  </div>
                  <div class="form-group">
                     <div class="form-holder">
                        <i class="zmdi zmdi-pin"></i>
                        <input type="number" class="form-control" placeholder="Pincode" name="pincode" required>
                     </div>
                     <div class="form-holder">
                        <i class="zmdi zmdi-pin-drop"></i>
                        <input type="text" class="form-control" placeholder="City" name="city" required>
                     </div>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-holder">
                     <i class="zmdi zmdi-map"></i>
                     <input type="text" class="form-control" placeholder="Country" name="country" required>
                  </div>
                  <div class="form-holder">
                     <i class="zmdi zmdi-pin"></i>
                     <input type="text" class="form-control" placeholder="State" name="state" required>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="New Password" name="password" required>
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Confirm New Password" name="confirm_password" required>
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
            </section>
            <!-- SECTION 2 -->
            <h4></h4>
            <section>
               <h3>Step - 2</h3>
               <span style="font-size: 16px;color: #000;padding-bottom: 20px;">Select the category</span>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder w-100">
                     <select class="form-control" name="category">
                        <option value="volvo">Wedding (Pre and Post)</option>
                        <option value="saab">Pre Wedding only</option>
                        <option value="mercedes">Post Wedding Only</option>
                        <option value="audi">Birthday</option>
                        <option value="audi">Pre Maternity</option>
                        <option value="audi">Post Maternity</option>
                        <option value="audi">Corporate Event</option>
                        <option value="audi">Local event</option>
                        <option value="audi">Product Photography</option>
                        <option value="audi">Modelling</option>
                        <option value="audi">Fashion Photography</option>
                        <option value="audi">Candid</option>
                        <option value="audi">Portrait</option>
                        <option value="audi">School/College</option>
                        <option value="audi">Sports</option>
                        <option value="audi">Landscape</option>
                        <option value="audi">Wildlife</option>
                        <option value="audi">Architecture</option>
                        <option value="audi">Arial Photography</option>
                        <option value="audi">Underwater</option>
                        <option value="audi">Nature</option>
                        <option value="audi">Art</option>
                     </select>
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <span style="font-size: 16px;color: #000;padding-bottom: 20px;">Select past exposure</span>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder">
                     <select class="form-control" name="past_exposure">
                        <option value="volvo">Beginner</option>
                        <option value="saab">Casual</option>
                        <option value="mercedes">Trained</option>
                        <option value="audi">Professional</option>
                     </select>
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Experience for above selection" name="experience">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-holder" >
                     <label>Do you have a website?<br></lable>
                     <label>
                     <input type="radio" name="shipping" checked name="website"> Yes
                     <input type="radio" name="shipping" name="website"> No
                     </label>
                  </div>
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Enter the URL" name="url">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-holder" >
                     <label>Do you have facebook Page for business?<br></lable>
                     <label>
                     <input type="radio" name="shipping" checked name="facebook"> Yes
                     <input type="radio" name="shipping" name="facebook"> No
                     </label>
                  </div>
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Enter the URL" name="face_url">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-holder">
                     <label>Do you have Instagram Page for business?<br></lable>
                     <label>
                     <input type="radio" name="shipping" checked name="instagram"> Yes
                     <input type="radio" name="shipping" name="instagram"> No
                     </label>
                  </div>
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Enter the URL" name="insta_url">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <span style="font-size: 16px;color: #000;padding-bottom: 20px;">What is your current marketing options in terms of % ? (Total in 100%) </span>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Orders from friends and families (%)" name="family_orders">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Word of mouth (%)" name="word_of_mouth">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Outbound Marketing (%)" name="outbound_market">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Social Media Unpaid Marketing (%)" name="social_media_unpaid">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder">
                     <input type="password" class="form-control" placeholder="Social Media paid marketing (%)" name="social_media_paid">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <span style="font-size: 16px;color: #000;padding-bottom: 20px;">Choose your company format</span>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder w-100">
                     <label>
                     <input type="radio" name="c_format" checked> Not Registered
                     <input type="radio" name="c_format"> Proprietorship
                     <input type="radio" name="c_format"> Partnership
                     <input type="radio" name="c_format"> LLP
                     <input type="radio" name="c_format"> Private Limited
                     </label>
                  </div>
               </div>
               <span style="font-size: 16px;color: #000;padding-bottom: 20px;">Do you have GST number?</span>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder w-100">
                     <input type="Input" class="form-control" placeholder="GST Number" name="gst">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <span style="font-size: 16px;color: #000;padding-bottom: 20px;">Approximate monthly turnover?</span>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder w-100">
                     <input type="Input" class="form-control" placeholder="Turnover" name="turnover">
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
               <span style="font-size: 16px;color: #000;padding-bottom: 20px;">Select the certification level</span>
               <div class="form-row" style="margin-top:20px;">
                  <div class="form-holder w-100">
                     <select class="form-control" name="certification_level">
                        <option value="volvo">Foundation - New aspiring photographers who wants to know what is photography.</option>
                        <option value="saab">Practitioner - This is for those who take up photography as passion and their second source of income</option>
                        <option value="mercedes">Professional Level 1 - This is for those who take up photography as profession but are at early stage (0-2 years)</option>
                        <option value="audi">Professional Level 2 - This is for those who take up photography as profession with experience (2-5 years)</option>
                        <option value="audi">Professional Level 3 - This is for experts in photography with good knowledge and past success of the projects</option>
                        <option value="audi">International- Foundation - Training conducted internationally for begineers</option>
                        <option value="audi">International- Practitioner - Training conducted internationally and practice</option>
                        <option value="audi">International- Professional - Professionals trained internationally</option>
                     </select>
                     <i class="zmdi zmdi-lock-open"></i>
                  </div>
               </div>
            </section>
            <!-- SECTION 3 -->
            <h4></h4>
            <section>
               <h3>Payments</h3>
               <div class="cart_totals">
                  <table cellspacing="0" class="shop_table shop_table_responsive">
                     <tr class="cart-subtotal">
                        <th>Select the course type</th>
                        <td data-title="Subtotal">
                           <div class="form-holder">
                              <select class="form-control w-100" name="course_type">
                                 <option value="volvo">Workshop Only</option>
                                 <option value="saab">Workshop + Online Course</option>
                                 <option value="mercedes">Workshop + Online Course + Certification</option>
                              </select>
                           </div>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Name</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Rahul Ishwar</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Email</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Rahul@gmail.com</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Category</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Nature</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Past Exposure</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Professional</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Certification Level</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Foundation</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="order-total border-0">
                        <th>Amount</th>
                        <td data-title="Total">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">$</span>64.69
                           </span>
                        </td>
                     </tr>
                  </table>
               </div>
            </section>
            <!-- SECTION 4 -->
            <h4></h4>
            <section>
               <h3 style="color:green">Payment successfully Paid.</h3>
               <div class="cart_totals">
                  <table cellspacing="0" class="shop_table shop_table_responsive">
                     <tr class="cart-subtotal">
                        <th>Name</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Rahul Ishwar</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Email</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Rahul@gmail.com</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Course</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Workshop Only</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Date of Payment</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">20-April-2019</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Invoice No.</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">NDKSH3842587354</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="cart-subtotal">
                        <th>Payment Method.</th>
                        <td data-title="Subtotal">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">Debit Card</span>
                           </span>
                        </td>
                     </tr>
                     <tr class="order-total border-0">
                        <th>Total</th>
                        <td data-title="Total">
                           <span class="woocommerce-Price-amount amount">
                           <span class="woocommerce-Price-currencySymbol">$</span>64.69
                           </span>
                        </td>
                     </tr>
                     <tr class="order-total border-0">
                        <td><button type="submit" class="btn btn-success">Download Invoice</button></td>
                        <td><button class="btn btn-success">Log in</button></td>
                     </tr>
                  </table>
               </div>
            </section>
            <input type="submit" value="Submit"/>
         </form>
      </div>
      <script src="<?php echo URL; ?>registration/js/jquery-3.3.1.min.js"></script>
      <!-- JQUERY STEP -->
      <script src="<?php echo URL; ?>registration/js/jquery.steps.js"></script>
      <script src="<?php echo URL; ?>registration/js/main.js"></script>
      <!-- Template created and distributed by Colorlib -->
   </body>
</html>