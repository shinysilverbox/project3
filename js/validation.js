$(document.ready(function() {
  $("#trivia_form").on("submit", function() {
    formValid = true;

    question1IsValid = $("#question1").prop("validity").valid;
    if(question1IsValid) {
      $("#question1Error").hide();
    } else {
      $("#question1Error").show();
      formValid = false;
    }


  })
});
