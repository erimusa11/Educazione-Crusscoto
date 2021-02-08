<!-- Right bar overlay-->
<div class="/rightbar-overlay"></div>

<!-- Vendor js -->
<script src="/assets/js/vendor.min.js"></script>

<!-- App js-->
<script src="/assets/js/app.min.js"></script>

<!-- Tost-->
<script src="/assets/libs/jquery-toast/jquery.toast.min.js"></script>

<!-- toastr init js-->
<script src="/assets/js/pages/toastr.init.js"></script>

<script src="/assets/libs/jquery-nice-select/jquery.nice-select.min.js"></script>
<script src="/assets/libs/switchery/switchery.min.js"></script>
<!--
<script src="/assets/libs/select2/select2.min.js"></script> -->
<script src="/assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

<!-- Init js
<script src="/assets/js/pages/form-advanced.init.js"></script> -->

<!-- Plugin js-->
<script src="/assets/libs/parsleyjs/parsley.min.js"></script>

<!-- Validation init js
<script src="/assets/js/pages/form-validation.init.js"></script>-->

<!-- Plugins js-->
<script src="/assets/libs/moment/moment.min.js"></script>
<script src="/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="/assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/assets/libs/daterangepicker/daterangepicker.js"></script>

<!-- Init js-->
<script src="/assets/js/pages/form-pickers.init.js"></script>


<!-- Plugins js-->
<script src="/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- Init js-->
<script src="/assets/js/pages/form-wizard.init.js"></script>


<!-- Plugins js -->
<script src="/assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
<script src="/assets/libs/autonumeric/autoNumeric-min.js"></script>

<!-- Init js-->
<script src="/assets/js/pages/form-masks.init.js"></script>



<!-- Datatables init 
<script src="/assets/js/pages/datatables.init.js"></script> -->

<!-- Sweet Alerts js -->
<script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="/assets/js/pages/sweet-alerts.init.js"></script>

<!-- Tour page js -->
<script src="/assets/libs/hopscotch/hopscotch.min.js"></script>

<!-- Tour init js-->
<script src="/assets/js/pages/tour.init.js"></script>
<script src="/assets/js/formulas.js"></script>

<script>
$(document).ready(function() {
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }


    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
        return this.href == url;
    }).addClass('text-style');

    // for treeview
    $('ul.nav-treeview a').filter(function() {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active1');


    // Jquery draggable
    $('.modal-dialog').draggable({
        handle: ".modal-header"
    });

});
</script>

<!--**********************************************************************************************************************************************************************************************************


  This site was  Developed By 
                              //******  You can find us on ****//

                      //!  Eri Musa  
           //? Website  : http://dilavermusa.com/
           //? Linkedin : https://www.linkedin.com/in/eri-musa-681332181/


                  //!    Alban Delishi 
         //?  Linkedin : :https://www.linkedin.com/in/alban-delishi-22b485186
 

 ********************************************************************************************************************************************************************************************************** --->