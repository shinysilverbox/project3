$(document).ready(function () {
  $("#trivia_form").on("submit", function() {
    formValid = true;


    answer1IsValid = $("#answer1").prop("validity").valid;
    if(answer1IsValid) {
      $("#answer1Error").hide();
    } else {
      $("#answer1Error").show();
      formValid = false;
    }

    answer2IsValid = $(".answer2").prop("validity").valid;
    if(answer2IsValid) {
      $("#answer2Error").hide();
    } else {
      $("#answer2Error").show();
      formValid = false;
    }

    answer3IsValid = $(".answer3").prop("validity").valid;
    if(answer3IsValid) {
      $("#answer3Error").hide();
    } else {
      $("#answer3Error").show();
      formValid = false;
    }

    answer4IsValid = $(".answer4").prop("validity").valid;
    if(answer4IsValid) {
      $("#answer4Error").hide();
    } else {
      $("#answer4Error").show();
      formValid = false;
    }

    answer5IsValid = $(".answer5").prop("validity").valid;
    if(answer5IsValid) {
      $("#answer5Error").hide();
    } else {
      $("#answer5Error").show();
      formValid = false;
    }

    answer6IsValid = $(".answer6").prop("validity").valid;
    if(answer6IsValid) {
      $("#answer6Error").hide();
    } else {
      $("#answer6Error").show();
      formValid = false;
    }

    answer7IsValid = $(".answer7").prop("validity").valid;
    if(answer7IsValid) {
      $("#answer7Error").hide();
    } else {
      $("#answer7Error").show();
      formValid = false;
    }

    answer8IsValid = $(".answer8").prop("validity").valid;
    if(answer8IsValid) {
      $("#answer8Error").hide();
    } else {
      $("#answer8Error").show();
      formValid = false;
    }

    answer9IsValid = $(".answer9").prop("validity").valid;
    if(answer9IsValid) {
      $("#answer9Error").hide();
    } else {
      $("#answer9Error").show();
      formValid = false;
    }

    answer10IsValid = $(".answer10").prop("validity").valid;
    if(answer10IsValid) {
      $("#answer10Error").hide();
    } else {
      $("#answer10Error").show();
      formValid = false;
    }

    answer11IsValid = $(".answer11").prop("validity").valid;
    if(answer11IsValid) {
      $("#answer11Error").hide();
    } else {
      $("#answer11Error").show();
      formValid = false;
    }

    answer12IsValid = $(".answer12").prop("validity").valid;
    if(answer12IsValid) {
      $("#answer12Error").hide();
    } else {
      $("#answer12Error").show();
      formValid = false;
    }

    answer13IsValid = $(".answer13").prop("validity").valid;
    if(answer13IsValid) {
      $("#answer13Error").hide();
    } else {
      $("#answer13Error").show();
      formValid = false;
    }

    answer14IsValid = $(".answer14").prop("validity").valid;
    if(answer14IsValid) {
      $("#answer14Error").hide();
    } else {
      $("#answer14Error").show();
      formValid = false;
    }

    answer15IsValid = $(".answer15").prop("validity").valid;
    if(answer15IsValid) {
      $("#answer15Error").hide();
    } else {
      $("#answer15Error").show();
      formValid = false;
    }

    answer16IsValid = $("#answer16").prop("validity").valid;
    if(answer16IsValid) {
      $("#answer16Error").hide();
    } else {
      $("#answer16Error").show();
      formValid = false;
    }

    answer17IsValid = $(".answer17").prop("validity").valid;
    if(answer17IsValid) {
      $("#answer17Error").hide();
    } else {
      $("#answer17Error").show();
      formValid = false;
    }

    answer18IsValid = $(".answer18").prop("validity").valid;
    if(answer18IsValid) {
      $("#answer18Error").hide();
    } else {
      $("#answer18Error").show();
      formValid = false;
    }

    answer19IsValid = $(".answer19").prop("validity").valid;
    if(answer19IsValid) {
      $("#answer19Error").hide();
    } else {
      $("#answer19Error").show();
      formValid = false;
    }

    answer20IsValid = $("#answer20").prop("validity").valid;
    if(answer20IsValid) {
      $("#answer20Error").hide();
    } else {
      $("#answer20Error").show();
      formValid = false;
    }

    answer21IsValid = $(".answer21").prop("validity").valid;
    if(answer21IsValid) {
      $("#answer21Error").hide();
    } else {
      $("#answer21Error").show();
      formValid = false;
    }

    return formValid;
  })
});
