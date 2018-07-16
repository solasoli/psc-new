<?php

/* Template Name: Edit Profile 2 */

require_once(ABSPATH.'wp-content/themes/psc/update-profile.php');


?>

<?php get_header(); ?>

<?php get_template_part('parts/dashboard/user'); ?>

<?php if ( !have_posts() ) get_template_part( 'parts/notice/no-posts' ); ?>

<?php while (have_posts()) : the_post(); ?>
<style type="text/css">


.profile-pic {
    display: block;
}

.file-upload {
    display: none;
}
.circle {
    border-radius: 1000px !important;
    overflow: hidden;
    width: 128px;
    height: 128px;
    border: 8px solid rgba(255, 255, 255, 0.7);
    top: 72px;
    margin: 0 auto;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
  margin-left: 50px;
  margin-top: -30px;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #ffcc99;
  border-radius:50%;
  border-color: #ffcc99;
  border
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}

h3 {

	
	padding: 20px;
	background-color: #ccc;
	font: inherit;
	font-size: 20px;
	text-transform: uppercase;
	
}

</style>
	<section id="dashboard-content">
		<div class="container">
		<div class="row">

			<?php get_template_part( 'parts/dashboard/edit-profile/intro' ); ?>

			<?php if( !empty( $_GET['updated'] ) ): ?>
				<div class="success"><?php _e('Profile successfully updated', 'textdomain'); ?></div>
			<?php endif; ?>

			<?php if( !empty( $_GET['validation'] ) ): ?>

				<?php if( $_GET['validation'] == 'emailnotvalid' ): ?>
					<div class="error"><?php _e('The given email address is not valid', 'textdomain'); ?></div>
					<?php elseif( $_GET['validation'] == 'emailexists' ): ?>
						<div class="error"><?php _e('The given email address already exists', 'textdomain'); ?></div>
						<?php elseif( $_GET['validation'] == 'passwordmismatch' ): ?>
							<div class="error"><?php _e('The given passwords did not match', 'textdomain'); ?></div>
							<?php elseif( $_GET['validation'] == 'unknown' ): ?>
								<div class="error"><?php _e('An unknown error accurd, please try again or contant the website administrator', 'textdomain'); ?></div>
							<?php endif; ?>

						<?php endif; ?>

						<?php $current_user = wp_get_current_user(); ?>

						<form method="post" id="adduser" action="<?php the_permalink(); ?>" enctype="multipart/form-data">

							<div class="row" style="position: relative;">
								<div class="col-md-12" style="text-align: center;position: relative;">
									 <div class="circle">
								       <!-- User Profile Image -->
								       <img class="profile-pic" src="http://staging.inspireomedia.pw/psc-wp/wp-content/uploads/2018/06/gravatar.png" />

								       <!-- Default Image -->
								       <!-- <i class="fa fa-user fa-5x"></i> -->
								     </div>
								     <div class="p-image">
								       <i class="fa fa-camera upload-button"></i>
								       	<div class="hide">
								        	<input class="file-upload" type="file" name="photo" accept="image/*"/>
								    	</div>
								     </div>

									<!-- <input class="file-upload" type='file' name='photo' style="margin: 0 auto;">
	 -->
								</div>
							</div>
							<div class="col-md-6">
								<h3 ><?php _e('Personal info', 'textdomain'); ?></h3>

								<div class="form-group row">
										<label for="email" class="col-sm-4 col-form-label"><?php _e('E-mail *', 'textdomain'); ?></label>
										<div class="col-sm-6">
											<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" value="<?php the_author_meta( 'user-email', $current_user->ID ); ?>" />
										</div>
										
				       
									</div>
									<div class="form-group row">
										<label for="first_name" class="col-sm-4 col-form-label">First Name</label>
										<div class="col-sm-6">
											<input type="text" class="form-control woocommerce-Input woocommerce-Input--text input-text" name="account_first_name"id="account_first_name" placeholder="" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="last_name" class="col-sm-4 col-form-label">Last Name</label>
										<div class="col-sm-6">
											<input type="text" class="form-control woocommerce-Input--text woocommerce-Input input-text" name="account_last_name" id="account_last_name" placeholder="" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="birthday_date" class="col-sm-4 col-form-label">Date of Birth</label>
										<div class="col-sm-6">
											<input   type="date" class="form-control woocommerce-Input" id="birthday_date" placeholder="" value="<?php the_author_meta( 'birthday_date', $current_user->ID ); ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="address" class="col-sm-4 col-form-label">Address</label>
										<div class="col-sm-6">
											<input type="text" class="form-control woocommerce-Input--text woocommerce-Input" id="address" placeholder="" value="<?php the_author_meta( 'address', $current_user->ID ); ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="address" class="col-sm-4 col-form-label" style="visibility: hidden;">!@#$%</label>
										<div class="col-sm-2">
											<input type="text" class="form-control woocommerce-Input woocommerce-Input--text" id="zipcode" placeholder="zip" value="<?php the_author_meta( 'zipcode', $current_user->ID ); ?>">
										</div>
									
								

												<div class="col-sm-4">
												<select id="inputState" class="form-control woocommerce-Input--text woocommerce-Input"  value="<?php the_author_meta( 'country', $current_user->ID ); ?>">
													<option selected>Choose...</option>
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
										</div>

										<div class="form-group row">
										<label for="contact" class="col-sm-4 col-form-label">Contact</label>
										<div class="col-sm-6">
											<input type="text" class="form-control woocommerce-Input--text woocommerce-Input" id="address" placeholder="" value="<?php the_author_meta( 'contact', $current_user->ID ); ?>">
										</div>
									</div>
										
								
			




								 <!--<?php 
				        // action hook for plugin and extra fields
								do_action('edit_user_profile', $current_user); 
								?> -->


								

								<!-- <p><?php _e('Upload an image of 150x150', 'textdomain'); ?></p> -->
							</div>

						

							<div class="col-md-6">
								<h3><?php _e('Change password', 'textdomain'); ?></h3>

								<p><?php _e('When both password fields are left empty, your password will not change', 'textdomain'); ?></p>

								<div class="form-group">

									<label for="pass1" class="col-sm-4"><?php _e('Password *', 'profile'); ?> </label>
									<div class="col-sm-6">
									<input class="form-control woocommerce-Input woocommerce-Input--password input-text" name="pass1" type="password" id="pass1" style="margin-bottom: 10px" />
								</div>

								</div>
								<div class="form-password">
									<label for="pass2" class="col-sm-4"><?php _e('Repeat password *', 'profile'); ?></label>
									<div class="col-sm-6">
									<input class="form-control woocommerce-Input woocommerce-Input--password input-text" name="pass2" type="password" id="pass2" />
								</div>
								</div>

							</div>

							

					
					

					
					</div>
</div>
<div class="col-md-12" style="text-align: center;">
	
	<input name="updateuser" type="submit" id="updateuser" class="submit button btn btn-primary" style="font-size: 14px;
    color: #e89740;
    background: #786f67;
    padding: 16px 15px 14px;
    line-height: 20px;
    text-align: center;
    background: #786f67;
    text-transform: uppercase;
    font-size: 16px;
    color: #e89640;
    letter-spacing: 1px;
    display: inline-block;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    border-radius: 25px;
    font-weight: 400;
    font-family: 'Lato-SemiBold';
    border: none;
    min-width: 180px;
    margin-bottom: 50px;
    " value="<?php _e('Update profile', 'textdomain'); ?>" />
</div>
								
								<?php wp_nonce_field( 'update-user' ) ?>
								<input name="honey-name" value="" type="text" style="display:none;"></input>
								<input name="action" type="hidden" id="action" value="update-user"  style="" />
							</div><!-- .form-submit -->



						</form>
					</div>
				</section><!-- #adduser -->
				<script
				  src="https://code.jquery.com/jquery-3.3.1.min.js"
				  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
				  crossorigin="anonymous"></script>
				<script>
				$(document).ready(function() { 
				    var readURL = function(input) {
				        if (input.files && input.files[0]) {
				            var reader = new FileReader();

				            reader.onload = function (e) {
				                $('.profile-pic').attr('src', e.target.result);
				            }
				    
				            reader.readAsDataURL(input.files[0]);
				        }
				    }
				    

				    $(".file-upload").on('change', function(){
				        readURL(this);
				    });
				    
				    $(".upload-button").on('click', function() {
				       $(".file-upload").click();
				    });
				});

				</script>
				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

				<?php get_footer(); ?>
