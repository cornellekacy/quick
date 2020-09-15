<?php include 'header.php'; ?>
    <div id="tp-page-header" class="tp-page-header">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Get Quote Form</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div id="tp-breadcrumb" class="tp-breadcrumb">
        <!-- breadcrumb -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li class="active">Get Quote Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.breadcrumb -->
    <div id="main-container" class="main-container">
        <!-- main container -->
        <div id="tp-get-quote" class="tp-get-quote">
            <!-- Get Quote -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 left-sidebar">
                        <!-- left sidebar -->
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Quote Details</h1>
                            </div>
                            <div class="quote-form">
                                <!-- quote form -->
                                <form id="quote-form" method="post" action="http://www.ease-design.com/html/trucking/get-quote.php">
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fname">First Name</label>
                                            <input id="fname" name="fname" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="lname">Last Name</label>
                                            <input id="lname" name="lname" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="email">E-mail</label>
                                            <input id="email" name="email" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="phone">Phone</label>
                                            <input id="phone" name="phone" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fax">Fax</label>
                                            <input id="fax" name="fax" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Select Basic -->
                                            <label class="control-label" for="service">Select Servic</label>
                                            <select id="service" name="service" class="form-control" required>
                                                <option value="">Service</option>
                                                <option value="Truck Transport">Truck Transport</option>
                                                <option value="Semi Trailer">Semi Trailer</option>
                                                <option value="Heavy Haulage">Heavy Haulage</option>
                                                <option value="Warehousing">Warehousing</option>
                                                <option value="Air Transport">Air Transport</option>
                                                <option value="Sea Transport">Sea Transport</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h2>Pick Up Point</h2>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address1">Address</label>
                                            <input id="address1" name="address1" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="state">State</label>
                                            <select id="state" name="state" placeholder="State" class="form-control" required>
                                                <option value="state">State</option>
                                                <option value="Andra Pradesh">Andra Pradesh</option>
                                                <option value="California">California</option>
                                                <option value="Delaware">Delaware</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Hawaii ">Hawaii </option>
                                                <option value="Indiana ">Indiana </option>
                                                <option value="Kansas  ">Kansas </option>
                                                <option value="Maine ">Maine </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="zipcode1">Zip Code</label>
                                            <input id="zipcode1" name="zipcode1" type="text" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="" for="preferredday">Availiability</label>
                                            <div class="input-group">
                                                <input id="preferredday" name="preferredday" type="text" placeholder="Availiability" class="form-control" required>
                                                <span class="input-group-addon" id="preferredday"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Select Basic -->
                                            <label class="control-label" for="picktime">Pick Up Time</label>
                                            <select id="picktime" name="picktime" class="form-control" required>
                                                <option value="Time">Time</option>
                                                <option value="10:00 to 11:00">10:00 to 11:00</option>
                                                <option value="11:00 to 12:00">11:00 to 12:00</option>
                                                <option value="12:00 to 13:00">12:00 to 13:00</option>
                                                <option value="13:00 to 14:00">13:00 to 14:00</option>
                                                <option value="14:00 to 15:00">14:00 to 15:00</option>
                                                <option value="15:00 to 16:00">15:00 to 16:00</option>
                                                <option value="16:00 to 17:00">16:00 to 17:00</option>
                                                <option value="17:00 to 18:00">17:00 to 18:00</option>
                                                <option value="18:00 to 19:00">18:00 to 19:00</option>
                                                <option value="19:00 to 20:00">19:00 to 20:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h2>Delivery Point</h2>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address2">Address</label>
                                            <input id="address2" name="address2" type="text" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="state">State</label>
                                            <select id="state" name="state" class="form-control" required>
                                                <option value="">State</option>
                                                <option value="Andra Pradesh">Andra Pradesh</option>
                                                <option value="California">California</option>
                                                <option value="Delaware">Delaware</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Hawaii ">Hawaii </option>
                                                <option value="Indiana ">Indiana </option>
                                                <option value="Kansas  ">Kansas </option>
                                                <option value="Maine ">Maine </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="zipcode2">Zip Code</label>
                                            <input id="zipcode2" name="zipcode2" type="text" placeholder="" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Text Area</label>
                                            <textarea class="form-control" rows="7" id="textarea" name="textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-default">Get A Quote</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.quote form -->
                        </div>
                    </div>
                    <!-- /.left sidebar -->
                    <div class="col-md-4 right-sidebar">
                        <!-- right sidebar -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget">
                                    <!-- block -->
                                    <div class="tp-bg-border tp-bg-box">
                                        <!-- bg border -->
                                        <h2>Contact Details</h2>
                                    </div>
                                    <!-- /.bg border -->
                                    <div class="tp-bg-box">
                                        <!-- bg box -->
                                        <address>
                                            <div class="add">Quick Logistics. 8901
                                                <br> 250 Hartford Avenue, Bellingham MA 2019 USA
                                                <br>
                                                  <br> Rajasthan, india
                                            </div>
                            
                                           <div class="phone"><strong>Phone: </strong> +1 (213) 340-7803</div>
                                            <div class="mailto"><strong>Fax: </strong> +1 (916) 234-0109</div>
                                                        <div class="mailto"><strong>Email : </strong> info@quicklogistics.org</div>
                                                           <div class="mailto"><strong>Email : </strong> info@quicklogistics.org</div>
                                            <div class="mailto"><strong>Email : </strong> support@quicklogistics.org</div>
                                            <strong>Opening Time : </strong>
                                            <br>
                                            <div class="mailto">Mon to Sat 9:00 am - 7:00pm</div>
                                        </address>
                                        <div class="manager-info">
                                            <!-- manager-info -->
                                            <h3>Steve Mathone <small>( Dep. Manager )</small></h3>
                                            <p class="email">info@quicklogistics.org</p>
                                        </div>
                                        <!-- /.manager-info -->
                                    </div>
                                    <!-- /.bg box -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="widget">
                                    <!-- block -->
                                    <div class="tp-bg-border tp-bg-box">
                                        <!-- bg border -->
                                        <h2>Why Choose Transport?</h2>
                                    </div>
                                    <!-- /.bg border -->
                                    <div class="tp-bg-box">
                                        <!-- bg box -->
                                        <p>We have created a service transportation company &amp; will keep you up to date as things move along. </p>
                                        <a href="#" class="btn btn-default">read more</a> </div>
                                    <!-- /.bg box -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="widget">
                                    <!-- block -->
                                    <div class="tp-bg-border tp-bg-box">
                                        <!-- bg border -->
                                        <h2>Transportation Services</h2>
                                    </div>
                                    <!-- /.bg border -->
                                    <div class="tp-bg-box">
                                        <!-- bg box -->
                                        <p>The company offers specialized logistics services and excellent management.</p>
                                        <a href="#" class="btn btn-default">read more</a> </div>
                                    <!-- /.bg box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.right sidebar -->
                </div>
            </div>
        </div>
        <!-- /.Get Quote -->
    </div>
   <?php include 'footer.php'; ?>