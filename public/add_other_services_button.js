//$("#add_services").click(function() {
//    $("#clonethis").clone().appendTo('.here');
////    $(".clear").val("");
//});
//
//$("#remove_services").click(function() {
//    if ($(".clonediv").last().index() == 0) {
//    }
//    else {
//        $("#clonethis").last().remove();
//    }
//
//});
//
//$("#add_branches").click(function() {
////    alert(1);
//    $("#clonebranch").clone().appendTo('.branchhere')
//});
//
//$("#remove_branches").click(function() {
////    alert($(".clonebranchremove").last().index());
//    if ($(".clonebranchremove").last().index() == 0) {
//    }
//    else {
//        $('#clonebranch').last().remove();
//    }
//});
//
//


//$("#add_services").click(function() {
//    $("#clonethis").clone().appendTo('.here');
////    $(".clear").val("");
//});
////$("#add_services").on("click", function() {
////    $("#clonethis").clone().appendTo('.here');
////    $(".clear").val("");
////});
//
//
//$("#remove_services").click(function() {
//    if ($(".clonediv").last().index() == 0) {
//    }
//    else {
//        $("#clonethis").last().remove();
//    }
//
//});

$("#add_services").click(function (e) {
    e.preventDefault();
    var other_services = $("input[id^='other_services_']").last().attr('id');
    var arr_other_services = other_services.split("_");
    var last_num_other_services = arr_other_services[arr_other_services.length - 1];
    var int_last_num_other_services = parseInt(last_num_other_services);
    int_last_num_other_services += 1;
//    alert(arr[arr.length - 1]);
    $("#hookservices").val(int_last_num_other_services);

    $(".serviceshere").append('\
                    <div id="cloneservices" class="cloneservicesremove_' + int_last_num_other_services + '">\n\
                         <div class="form-group">\n\
                            <label class="col-md-2 control-label" for="textinput"> Other Services </label>\n\
                                <div class="col-md-10"><input  type="text" id="other_services_' + int_last_num_other_services + '" class="form-control">\n\
                                </div>\n\
                        </div>\n\
                    </div>');
});
$("#remove_services").click(function (e) {
    e.preventDefault();
    var cloneservicesremove = $("div[class^='cloneservicesremove_']").last().attr('class');
    var arr_cloneservicesremove = cloneservicesremove.split("_");
    var arr_cloneservicesremove_last_num = arr_cloneservicesremove[arr_cloneservicesremove.length - 1];
    var int_arr_cloneservicesremove_last_num = parseInt(arr_cloneservicesremove_last_num);
//    alert(int_arr_cloneservicesremove_last_num);
    if (int_arr_cloneservicesremove_last_num != 0) {
        $("div[class^='cloneservicesremove_" + int_arr_cloneservicesremove_last_num + "']").remove();
        $("#hookservices").val(int_arr_cloneservicesremove_last_num);
//        alert($("#hook").val());
    }

});

$("#add_branches").click(function (e) {
//    alert(1);
//    $("#clonebranch").clone().appendTo('.branchhere');
    e.preventDefault();
    var branches_contact_person = $("input[id^='branches_contact_person_']").last().attr('id');
    var arr = branches_contact_person.split("_");
    var last_num = arr[arr.length - 1];
    var int_last_num = parseInt(last_num);
    int_last_num += 1;
//    alert(arr[arr.length - 1]);
    $("#hook").val(int_last_num);
//    alert($("#hook").val());
//    $(".branchhere").append('<div class="form-group"><label class = "col-md-2 control-label" for="textinput"> Address </label><div class="col-md-10"> <input type="text" id="branches_address_' + int_last_num + '" class="form-control"> </div></div>');
//    $(".branchhere").append('<div class="form-group"><label class="col-md-2 control-label" for="textinput"> Contact Person </label><div class="col-md-10"><input type="text" id="branches_contact_person_' + int_last_num + '"" class="form-control"></div></div>');
    $(".branchhere").append('<div id="clonebranch" class="clonebranchremove_' + int_last_num + '">\n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput">\n\
                                     <h4>Branch ' + (int_last_num + 1) + '</h4></label>\n\
                            </div>\n\
                            <div class="form-group">\n\
                                <label class="col-md-2 control-label" for="textinput"> Contact Person </label>\n\
                                    <div class="col-md-10">\n\
                                          <input  type="text" id="branches_contact_person_' + int_last_num + '" name="branches_contact_person_' + int_last_num + '" class="form-control">\n\
                                    </div>\n\
                            </div>\n\
                  \n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput"> Address</label>\n\
                            <div class="col-md-10">\n\
                                <input type="text" id="branches_address_' + int_last_num + '" name="branches_address_' + int_last_num + '" class="form-control">\n\
                            </div>\n\
                    </div>\n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput"> City/Municpality</label>\n\
                            <div class="col-md-10">\n\
                                <input type="text" id="branches_city_municipality_' + int_last_num + '" name="branches_city_municipality_' + int_last_num + '" class="form-control">\n\
                            </div>\n\
                    </div>\n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput"> Province</label>\n\
                            <div class="col-md-4">\n\
                                <input type="text" id="branches_province_' + int_last_num + '" name="branches_province_' + int_last_num + '"  class="form-control">\n\
                            </div>\n\
                    </div>\n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput"> Region</label>\n\
                            <div class="col-md-10">\n\
                                <input type="text" id="branches_region_' + int_last_num + '" name="branches_region_' + int_last_num + '" class="form-control">\n\
                            </div>\n\
                    </div>\n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput"> Zip Code</label>\n\
                            <div class="col-md-10">\n\
                                <input type="text" id="branches_zip_' + int_last_num + '" name="branches_zip_' + int_last_num + '" class="form-control">\n\
                            </div>\n\
                    </div>\n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput"> Telephone no.</label>\n\
                            <div class="col-md-10">\n\
                                <input type="text" id="branches_telephone_' + int_last_num + '" name="branches_telephone_' + int_last_num + '" class="form-control">\n\
                            </div>\n\
                    </div>\n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput"> Fax no.</label>\n\
                           <div class="col-md-10">\n\
                               <input type="text" id="branches_fax_' + int_last_num + '" name="branches_fax_' + int_last_num + '" class="form-control">\n\
                            </div>\n\
                    </div>\n\
                    <div class="form-group">\n\
                        <label class="col-md-2 control-label" for="textinput"> Email</label>\n\
                            <div class="col-md-10">\n\
                                <input type="text" id="branches_email_' + int_last_num + '" name="branches_email_' + int_last_num + '" class="form-control">\n\
                            </div>\n\
                    </div></div>');
});
$("#remove_branches").click(function (e) {
//    alert($(".clonebranchremove").last().index());
//    if ($(".clonebranchremove").last().index() == 0) {
//    }
//    else {
//        $('#clonebranch').last().remove();
//    }
    e.preventDefault();
    var clonebranchremove = $("div[class^='clonebranchremove_']").last().attr('class');
    var arr_clonebranchremove = clonebranchremove.split("_");
    var arr_clonebranchremove_last_num = arr_clonebranchremove[arr_clonebranchremove.length - 1];
    var int_arr_clonebranchremove_last_num = parseInt(arr_clonebranchremove_last_num);
//    alert(int_arr_clonebranchremove_last_num);
    if (int_arr_clonebranchremove_last_num != 0) {
        $("div[class^='clonebranchremove_" + int_arr_clonebranchremove_last_num + "']").remove();
        $("#hook").val(int_arr_clonebranchremove_last_num);
//        alert($("#hook").val());
    }

});


