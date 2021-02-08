$(document).ready(function() {
    //kontroll wich video is  played
        var video_step =$('.stepp').val();
        if(video_step==1){
            videoStep="video"
        }else{
            videoStep="video1"
        }
    var video = document.getElementById(videoStep);
    var timeStarted = -1;
    var timePlayed = 0;
    var duration = 0;
    // remember time user started the video
    function videoStartedPlaying() {
        //get the data now and controll if has strted before
        timeStarted = new Date().getTime() / 1000;

        var controll_time = $('.timeHold').val();

        if (controll_time == 0) {
            $('.timeHold').val(timeStarted);
        }
        var object1 = {
            "stepp": $('.stepp').val(),
            "time_started": timeStarted,

        }
                //update tthe new date  is strated
        $.post("dashboard.php", object1, function(response) {

        })
    }

            //reatch the event
    video.addEventListener("play", videoStartedPlaying);

    $("#continua1,#continua2").click(function() {
                            //make the math to find  if he can save or not
        var date1_ms = $('.timeHold').val();
        var date2_ms = (new Date().getTime() / 1000);
        var difference_ms = date2_ms - date1_ms;
        if(date1_ms == 0 ){
            difference_ms = 0;
        }else{
            difference_ms = Math.round(difference_ms);

        }
          
        if (difference_ms > 5700) {
            var the_step = $('.stepp').val();
            if (the_step == 1) {

                    var answer1 = $('.first_answer:checked').val();
                    var answer2 = $('.second_answer:checked').val();

                if(answer1 == undefined || answer2 == undefined ){
                         //if not fire this
                            Swal.fire({
                                title: "Attenzione!",
                                text: "Per pasare nel altro video dovete prima rispondere alle domande",
                                type: "warning",
                                confirmButtonClass: "btn btn-confirm btn-warning mt-2"
                            });
                }else {

                    $('#question_one_form').modal({
                        backdrop: 'static',
                        keyboard: false
                    });

                }

            } else if (the_step == 2) {

                var answer3 = $('.thirt_answer:checked').val();
                var answer4 = $('.forth_answer:checked').val();
                if(answer3 == undefined || answer4 == undefined ){ 
                       //if not fire this
                       Swal.fire({
                        title: "Attenzione!",
                        text: "Per pasare nel altro video dovete prima rispondere alle domande",
                        type: "warning",
                        confirmButtonClass: "btn btn-confirm btn-warning mt-2"
                    });
                    
                     } else {

                        $('#question_two_form').modal({
                            backdrop: 'static',
                            keyboard: false
                        });

                     }
                 }
        } else {    
            //if not fire this
            Swal.fire({
                title: "Attenzione!",
                text: "Per rispondere alle domande prima si dovra vedere il video intero",
                type: "warning",
                confirmButtonClass: "btn btn-confirm btn-warning mt-2"
            });
        }
    })

})