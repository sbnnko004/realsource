jQuery(document).ready(function($) {
    var step = eval(new URLSearchParams(window.location.search).get('step'));
    calNumberOfWords();
    
    $('input[type=checkbox]').prop("checked", false);
    function sendUserData(step, userInput){
        if(step==3){
            //loadPayfastForm();
            $("#step-form").submit();
            console.log("form submit");
        }
        else{
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var jsondata = JSON.stringify(userInput);
            console.log(userInput);
            if(step==2){
                if(!userInput['upload_later']){
                    manualUploader.uploadStoredFiles();
                }
            }
            $.ajax({
                url: '/manage/order',
                type: 'POST',
                data: {_token: CSRF_TOKEN, step: step, message: jsondata},
                dataType: 'JSON',
                success: function(response, textStatus, jqXHR) {
                    $(location).attr('href',"?step="+(++step));      
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(errorThrown)               
                }
            });
        }
        
    }   
 
    $(document).on('click', '.btn-step', function(event) {
        event.preventDefault();
        var button = $(".btn-step");
        var userInput = {};

        //  validate form
        

        function greaterThanZero(){
            console.log($(this));
            return false;
        }

        // get input fields from form
        var form = $( "form#step-form" );
        form.validate({
            errorClass: "is-invalid",
            validClass: "is-valid",
            errorElement: "span",
            rules: {
                writer_by_order_id : { greaterThanZero : true }
            }

        });
        $("form#step-form :input[type=radio]:checked").each(function() {
            var input = $(this); 
            if (typeof input.attr('name') !== "undefined")
                userInput[input.attr('name')] = input.val();
        });
     
        $("form#step-form select").each(function() { 
            var select = $(this);
            if (typeof select.attr('name') !== "undefined") {
                var option = $(this).children("option:selected"); 
                userInput[select.attr('name')] = option.val();
            }
        });
     
        $("form#step-form :input[type=number]").each(function() {
            var input = $(this); 
            if (typeof input.attr('name') !== "undefined")
                userInput[input.attr('name')] = input.val(); 
        });
        
        $("form#step-form :input[type=text]").each(function() {
            var input = $(this);
            if (typeof input.attr('name') !== "undefined")
                userInput[input.attr('name')] = input.val(); 
        });
        $("form#step-form :input[type=checkbox]").each(function() {
            var input = $(this);
            
            if (typeof input.attr('name') !== "undefined"){
                userInput[input.attr('name')] = input.prop("checked");
            }
        });
        $("form#step-form textarea").each(function() {
            var input = $(this);
            if (typeof input.attr('name') !== "undefined")
                userInput[input.attr('name')] = input.val(); 
        });
    
        


        if(form.valid()){
            sendUserData(step, userInput);    
        }
    });
   
    

    $('input[name="writer_preference"]').change(function(){
        if($('#by-order-id').prop('checked')){
            $('#writer_by_order_id').show();
        }else{
            $('#writer_by_order_id').hide();
        }
    });
    $('input[name="page_count"]').change(function(){
        calNumberOfWords();
    });
    $('input[name="line_spacing"]').change(function(){
        calNumberOfWords();
    });
    function calNumberOfWords(){
        var page_count=eval($('input[name=page_count]').val());
        var spacing=eval($('input[name=line_spacing]').prop("checked"));

        var lpp = 0;
        if(spacing==1){
             lpp = 600;
        }
        else{
             lpp = 300;
        }
        var word_count = lpp * page_count;
        $('.word-count-results').html(word_count+" words");
    }
    if(screen.width>600){
        $("#user-tabs").tabs();
        $( "#user-tabs" ).tabs( "option", "active", 1 );
    }
    else{
        //$("#user-tabs").tabs();
        //$("#user-tabs").tabs("disable");
    }
    

    $('#testimonial-carousel').owlCarousel({
        center: false,
        items: 1,
        loop: false,
        margin: 10,
        responsive: {
            1200: {
                items: 3
            },
            700: {
                items: 2
            }
        }
    });
    
    $('#offers-carousel').owlCarousel({
        center: false,
        items: 1,
        loop: false,
        margin: 10,
        responsive: {
            1200: {
                items: 3
            },
            700: {
                items: 2
            }
        }
    });
    $('#offers2-carousel').owlCarousel({
        center: false,
        items: 1,
        loop: false,
        margin: 10,
        responsive: {
            1200: {
                items: 3
            },
            700: {
                items: 2
            }
        }
    });
    $('.toggole-boxs').accordion({
        active: true,
        collapsible: true
    });
    
    $("#page-count").InputSpinner();
    
    $("#datepicker").datepicker({
        minDate: new Date(),
        dateFormat: "dd-mm-yy",
        onSelect: function(date) {
            $today = new Date();
            if (parseInt(date.split("-")[0]) == $today.getDate() &&
            (parseInt(date.split("-")[1]) - 1) == $today.getMonth() &&
            (parseInt(date.split("-")[2])) == ($today.getUTCFullYear())) {
                $('input#timepicker').timepicker('option', 'minTime', $today);
            } else {
                $('input#timepicker').timepicker('option', 'minTime', null);
            }
        }
    });
    $('input#timepicker').timepicker({
        timeFormat: 'h:mm p'
    });

    $(function () {
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 10000, // Speed back to top (ms)
          animation: 'slide', // Fade, slide, none
          animationInSpeed: 200, // Animation in speed (ms)
          animationOutSpeed: 200, // Animation out speed (ms)
          scrollText: ' ', // Text for element
          activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });

    /* FILE UPLOADED JAVASCRIPT */
    
    var totalAllowedSize = 10485760, 
        totalSizeSoFar = 0,
        upload_later_checkbox = $("#upload-later")
        file_upload_trigger = $("#fine-uploader-manual-trigger");    

        
    upload_later_checkbox.change(function() {
        if($(this).prop("checked")){
            file_upload_trigger.hide();
            manualUploader.clearStoredFiles ();
        }
        else{
            file_upload_trigger.show();
        }

    });

    
    if(typeof step!=="undefined" && step==2)
    {
        var manualUploader = new qq.FineUploader({
            element: document.getElementById('fine-uploader-manual-trigger'),
            template: 'qq-template-manual-trigger',
            request: {
                endpoint: '/server/uploads'
            },
            //thumbnails: {
            //placeholders: {
            //waitingPath: '/source/placeholders/waiting-generic.png',
            //notAvailablePath: '/source/placeholders/not_available-generic.png'
            //}
            //},
            callbacks: {
                onValidate: function(data) {
                    var f_error = false;
                    if (totalSizeSoFar + data.size > totalAllowedSize) {
                        if(data.size > totalAllowedSize){
                            $("#file-validate").html("File Too Big!");
                        }
                        else
                            $("#file-validate").html("Overall size of uploaded files too big!");
                        f_error = true;
                    }
                    if(f_error){
                        $("#file-validate").fadeIn('slow').animate({opacity: 1.0},1500).fadeOut('slow').animate({opacity: 0},4000);
                        return false;
                    }
                    totalSizeSoFar += data.size;
                }
            },
            autoUpload: false,
            debug: true
        });
    }
    

    //TODO one submit form, upload {{ change this part }} 
    //qq(document.getElementById("trigger-upload")).attach("click", function() {
    //    manualUploader.uploadStoredFiles();
    //});   
});
function update(val) {
    //console.log(val);
}