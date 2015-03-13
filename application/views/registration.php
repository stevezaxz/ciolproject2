<h3>Supplier Netzwerk Registration form</h3>

<div class="container">
    <div class="stepwizard  ">

        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>

    </div>
    <form role="form" method="POST" action="<?php echo site_url('regc/register'); ?>">
        <div class="row setup-content" id="step-1">
            <div class="col-xs-10">
                <div class="col-md-10">
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Company Details</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Registrant's Name</label>
                                <div class="col-md-10">
                                    <input required type="text" id="registrants_name" name="registrants_name" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Username</label>
                                <div class="col-md-10">
                                    <input required type="text" id="username" name="username" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Password</label>
                                <div class="col-md-10">
                                    <input required type="password" id="password" name="password" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput"> Retype-Password</label>
                                <div class="col-md-10">
                                    <input required type="password" id="repassword" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Business Trade Name</label>
                                <div class="col-md-10">
                                    <input required type="text" id="business_trade_name" name="business_trade_name" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">TIN No.</label>
                                <div class="col-md-10">
                                    <input required type="text" id="tin_no" name="tin_no" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">BIR Registration No.</label>
                                <div class="col-md-4">
                                    <input required type="text" id="bir" name="bir" class="form-control" >
                                </div>

                                <!--                    <label class="col-md-2 control-label" for="textinput">Website</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Post Code" class="form-control">
                                                    </div>-->
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Website</label>
                                <div class="col-md-10">
                                    <input required type="text" id="website" name="website" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Overview/ Brief History</label>
                                <div class="col-md-10">
            <!--                        <input type="textarea" placeholder="City" class="form-control" row='5' col='5'>-->
                                    <textarea required class='form-control' name="overview_history"  id="overview_history" cols="10" rows="10"></textarea>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Contact Person</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput"><h4>Sales</h4></label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Name</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_sales_name" name="contact_person_sales_name" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Telephone No.</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_sales_telephone" name="contact_person_sales_telephone" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Fax no.</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_sales_fax" name="contact_person_sales_fax" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Email</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_sales_email" name="contact_person_sales_email" class="form-control" >
                                </div>


                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Mobile 1</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_sales_mobile_1" name="contact_person_sales_mobile_1" class="form-control" >
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Mobile 2</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_sales_mobile_2" name="contact_person_sales_mobile_2" class="form-control"/>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput"><h4>Procurement</h4></label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Name</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_procurement_name" name="contact_person_procurement_name" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Telephone No.</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_procurement_telephone" name="contact_person_procurement_telephone" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Fax no.</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_procurement_fax" name="contact_person_procurement_fax" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Email</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_procurement_email" name="contact_person_procurement_email" class="form-control" >
                                </div>


                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Mobile 1</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_procurement_mobile_1" name="contact_person_procurement_mobile_1" class="form-control" > 
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Mobile 2</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_procurement_mobile_2" name="contact_person_procurement_mobile_2" class="form-control" >
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput"><h4>Accounting</h4></label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Name</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_account_name" name="contact_person_account_name" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Telephone No.</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_account_telephone" name="contact_person_account_telephone" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Fax no.</label>
                                <div class="col-md-10">
                                    <input type="text" id="contact_person_account_fax" name="contact_person_account_fax" class="form-control" >
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Email</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_account_email" name="contact_person_account_email" class="form-control" >
                                </div>


                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Mobile 1</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_account_mobile_1" name="contact_person_account_mobile_1" class="form-control" >
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">Mobile 2</label>
                                <div class="col-md-4">
                                    <input type="text" id="contact_person_account_mobile_2" name="contact_person_account_mobile_2" class="form-control"    >
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-10">
                <div class="col-md-10">
                    <div class="form-horizontal" role="form" >
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Branches</h4>
                            <div class="branchhere" id="thisform"> 

                                <div id="clonebranch" class="clonebranchremove_0">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> <h4>Branch 1</h4>  </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> Contact Person </label>
                                        <div class="col-md-10">
                                            <input  type="text" id="branches_contact_person_0" name="branches_contact_person_0" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> Address</label>
                                        <div class="col-md-10">
                                            <input   type="text" id="branches_address_0" name="branches_address_0" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> City/Municpality</label>
                                        <div class="col-md-10">
                                            <input type="text" id="branches_city_municipality_0" name="branches_city_municipality_0" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> Province</label>
                                        <div class="col-md-4">
                                            <input type="text" id="branches_province_0" name="branches_province_0" class="form-control">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> Region</label>
                                        <div class="col-md-10">
                                            <input type="text" id="branches_region_0" name="branches_region_0" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> Zip Code</label>
                                        <div class="col-md-10">
                                            <input type="text" id="branches_zip_0" name="branches_zip_0" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> Telephone no.</label>
                                        <div class="col-md-10">
                                            <input type="text" id="branches_telephone_0" name="branches_telephone_0" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> Fax no.</label>
                                        <div class="col-md-10">
                                            <input type="text" id="branches_fax_0" name="branches_fax_0" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput"> Email</label>
                                        <div class="col-md-10">
                                            <input type="text" id="branches_email_0" name="branches_email_0" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <input type="hidden" id="hook" name="hook" value="0" />
                    <button class="btn btn-primary btn-small col-lg-6" id="add_branches">Add More Branches</button>
                    <button class="btn btn-danger col-lg-6" id="remove_branches">Remove</button>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-10">
                <div class="col-md-10">

                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Mechanical</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Pumps, Fans and Blowers" /> Pumps, Fans and Blowers </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Automotive and heavy equipments and parts" /> Automotive and heavy equipments and parts </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupling" /> Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupling</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Lubricants, grease, engine oil, hydraulic oil, transmission oils" /> Lubricants, grease, engine oil, hydraulic oil, transmission oils</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Gasket, oil seal, mechanical seal, packing, bush"/> Gasket, oil seal, mechanical seal, packing, bush </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts" /> Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Pneumatics and Hydraulics equipment and parts" />Pneumatics and Hydraulics equipment and parts </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Pipes, Tubes, Valves and other piping components" /> Pipes, Tubes, Valves and other piping components </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Bearings (roller, thrust, plummer, pillow block)"/> Bearings (roller, thrust, plummer, pillow block) </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Power tools,machine shop,fabrication and welding equipments,tools and consumables" /> Power tools,machine shop,fabrication and welding equipments,tools and consumables</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Engineering materials"/> Engineering materials </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Adhesive, Sealants, Solvents, and Removers"/> Adhesive, Sealants, Solvents, and Removers </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Internal combustion engines, parts, and accessories" />Internal combustion engines, parts, and accessories</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Mechanical#Boiler and HRSG components and pressure parts"/> Boiler and HRSG components and pressure parts </label>
                            </div>

                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Electrical</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Electrical#Circuit breakers, power supply, contactors, relays, timer, switch, transducers" /> Circuit breakers, power supply, contactors, relays, timer, switch, transducers</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Electrical#Transformers, fuses, capacitors, resistors, surge suppressor, UPS system, panels" /> Transformers, fuses, capacitors, resistors, surge suppressor, UPS system, panels </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Electrical#Lighting (CFL, LED, HID, incandescent), lighting controls, ballast, batteries and fixtures" /> Lighting (CFL, LED, HID, incandescent), lighting controls, ballast, batteries and fixtures</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Electrical#Induction motors, gearmotors, definite and general purpose motors and HVAC motors"/> Induction motors, gearmotors, definite and general purpose motors and HVAC motors</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Eletrical#Induction motors, gearmotors, definite and general purpose motors and HVAC motors" /> Induction motors, gearmotors, definite and general purpose motors and HVAC motors </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Electrical#Wires and cables, connectors, terminal lugs, fittings, fasteners, receptacle and panels" /> Wires and cables, connectors, terminal lugs, fittings, fasteners, receptacle and panels</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Instrumentation</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Instrumentation#Meters, Gauges, Transmitters and other measuring equipments"/> Meters, Gauges, Transmitters and other measuring equipments</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Instrumentation#Laboratory testing, measuring and analyzing equipments" /> Laboratory testing, measuring and analyzing equipments </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Instrumentation#Medical testing, measuring and analyzing equipments" /> Medical testing, measuring and analyzing equipments</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subbat[]" value="Instrumentation#Controls, automation and monitoring systems and equipments"/> Controls, automation and monitoring systems and equipments</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Construction</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Construction#Construction and other hardware materials"/> Construction and other hardware materials</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Construction#Prefabricated walls, precast concrete, hardiflex, precast post and beams"/> Prefabricated walls, precast concrete, hardiflex, precast post and beams </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Construction#Roofing materials"/> Roofing materials</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Construction#Plumbing and piping materials"/> Plumbing and piping materials</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Construction#Painting and finishing materials" /> Painting and finishing materials</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Chemicals</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Chemicals#Pesticide, Fertilizers, Herbicides, and other agrochemicals"/> Pesticide, Fertilizers, Herbicides, and other agrochemicals</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Checmicals#Water and waste treatment chemicals" /> Water and waste treatment chemicals </label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Chemicals#Cleaning and sanitation chemicals"/> Cleaning and sanitation chemicals</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Chemicals#Compressed gases and specialty gases" /> Compressed gases and specialty gases</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Safety and Security</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Safety and Security#Personal Protection Equipment and kits" /> Personal Protection Equipment and kits</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Safety and Security#Electronic Access Devices, CCTV, security surveilance and detection equipments" /> Electronic Access Devices, CCTV, security surveilance and detection equipments</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Safety and Security#Fire and smoke detection and alarm equipments and parts" /> Fire and smoke detection and alarm equipments and parts</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Safety and Security#First aid, emergency and rescue equipments and kits" /> First aid, emergency and rescue equipments and kits</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Storage and Cleaning</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Storage and Cleaning#Storage racks, shelves, bin, cabinets, and baskets"/> Storage racks, shelves, bin, cabinets, and baskets</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Storage and Cleaning#Pallets, skids, guard rails, labels and signages"/> Pallets, skids, guard rails, labels and signages</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Storage and Cleaning#Forklift, cranes, pallet trucks, lift trucks and other material handling equipments" /> Forklift, cranes, pallet trucks, lift trucks and other material handling equipments</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Storage and Cleaning#Facilities cleaning and maintenance"/> Facilities cleaning and maintenance</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Electronics</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Electronics#Computers, monitors,speakers, printers and other office equipments"/> Computers, monitors,speakers, printers and other office equipments</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Eletronics#Electronic communication devices" /> Electronic communication devices</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Eletronics#Consumer Electronics" /> Consumer Electronics</label>
                            </div>

                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Home</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Home#Towels, blankets, mattresses, textile and clothing"/> Towels, blankets, mattresses, textile and clothing</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Home#Kitchen and dining wares" /> Kitchen and dining wares</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Home#Furnitures and decors"/> Furnitures and decors</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Home#Home Appliances"/> Home Appliances</label>
                            </div>

                        </fieldset>
                    </div>
                    <div class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <h4>Agriculture</h4>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-xs-1"></div>   <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Agriculture#Fruits"/> Fruits</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subact[]" value="Agriculture#Vegetables and spices"/> Vegetables and spices</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Agriculture#Livestock and meat"/> Livestock and meat</label>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-1"></div>  <label class="col-md-7 " for="textinput"><input type="checkbox" name="subcat[]" value="Agriculture#Tractors and other agricultural equipments, machines and tools"/> Tractors and other agricultural equipments, machines and tools</label>
                            </div>

                        </fieldset>
                    </div>
                    <div class="form-group">
                        <h3>Other Services</h3>
                        <!--<label class="col-md-2 control-label" for="textinput">Other Services</label>-->
                        <!--                        <div class="col-md-10 here">
                                                    <div id="clonethis" class="clonediv"><input type="text" id="other_services" class="form-control clear"> <br/></div> 
                                                </div>
                                                <div class="col-md-2"></div><button class="btn btn-primary btn-small" id="add_services">Add</button>
                                                <div class="col-md-2"></div> <button class="btn btn-danger" id="remove_services">x</button>-->
                        <div class="form-horizontal" role="form" >
                            <fieldset>
                                <!-- Form Name -->

                                <div class="serviceshere" id="thisform"> 
                                    <div id="cloneservices" class="cloneservicesremove_0">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="textinput"> Other Services </label>
                                            <div class="col-md-10">
                                                <input  type="text" id="other_services_0" name="other_services[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <input type="hidden" id="hookservices" value="0" />
                        <button class="btn btn-primary btn-small col-lg-6" id="add_services">Add More Services</button>
                        <button class="btn btn-danger col-lg-6" id="remove_services">Remove</button>
                    </div>
                    <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
<style type="text/css">
    body{ 
        margin-top:40px; 
    }

    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 70%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function () {
            if ($("#password").val() != $("#repassword").val()) {
                alert("Password did not match");
            } else {
                var curStep = $(this).closest(".setup-content"),
                        curStepBtn = curStep.attr("id"),
                        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                        curInputs = curStep.find("input[type='text'],input[type='url']"),
                        isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>
<script type="text/javascript" src="<?php echo base_url('public/add_other_services_button.js'); ?>"></script>
</html>