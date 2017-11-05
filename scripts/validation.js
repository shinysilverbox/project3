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

    return formValid;
  })
});
