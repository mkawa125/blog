var notification_type = "";

$(function(){
  $("#type").click(function(){
    $("#error-alert").fadeOut(0);
  });
  $(":text").keydown(function() {
    $("#error-alert").fadeOut(0);
  });
  $("#news").keydown(function() {
    $("#error-alert").fadeOut(0);
  });
});

function generalNews(){
  var type = parseInt($("#type").val());
  if (type == 0) {
      $("#notification_title").fadeOut(0);
      $("#general_news").fadeOut(0);
      $("#general-users").fadeOut(0);
  }
  else if (type == 1){
      $("#notification_title").fadeOut(0);
      $("#general_news").fadeOut(0);
      $("#general-users").fadeOut(0);
  }
  else if (type == 2){
      $("#notification_title").fadeIn(0);
      $("#general_news").fadeIn(0);
      $("#general-users").fadeIn(0);
      $("#country-group").fadeOut(0);
      $("#device-group").fadeOut(0);
  }
}
function generalGroups() {
    var group = parseInt($("#group").val());
    if (group == 1) {
        $("#notification_title").fadeIn(0);
        $("#general_news").fadeIn(0);
        $("#general-users").fadeIn(0);
        $("#country-group").fadeOut(0);
        $("#device-group").fadeOut(0);
    }else if (group == 2){
        $("#notification_title").fadeIn(0);
        $("#general_news").fadeIn(0);
        $("#general-users").fadeIn(0);
        $("#country-group").fadeIn(0);
        $("#device-group").fadeOut(0);
    }else if (group == 3){
        $("#notification_title").fadeIn(0);
        $("#general_news").fadeIn(0);
        $("#general-users").fadeIn(0);
        $("#country-group").fadeOut(0);
        $("#device-group").fadeIn(0);
    }
}

function sendNotification(){
  type = $("#type").val();

  if(type == "" || type == null){
    $("#error-alert-type").text("** Please select a notification type");
    $("#error-alert-type").fadeIn(0);
  }
  else if(type == 0){
    notification_type = type;
    sendVersionUpdates();
  }
  else if(type == 1){
      notification_type = type;
      sendProductsUpdates();
  }
  else if (type == 2){
    notification_type = type;
    sendNewsNotification();
  }
}
function sendVersionUpdates() {
    version = $("#version").val();
    type = $("#type").val();
    if (version == ""){
        $("#error-alert-version").text("** Please select user device os type");
        $("#error-alert-version").fadeIn(0);
    } else{
        notification_type = type;
        send();
    }
}

function sendProductsUpdates() {
    product = $("#product").val();
    type = $("#type").val();
    if (product == ""){
        $("#error-alert-p-country").text("** Please select country");
        $("#error-alert-p-country").fadeIn(0);
    } else{
        notification_type = type;
        send();
    }
}

function sendNewsNotification(){
  var title = news = version = countries = "";
    title = ($("#title").val());
    version = ($("#g-version").val());
   group = ($("#group").val());
    countries = ($("#g-countries").val());
  news = ($("#news").val()).trim();
  if(title == "" || title == null) {
    $("#error-alert-title").text("** Please enter notification title");
    $("#error-alert-title").fadeIn(0);
    // $("#error-alert-news").text("** Please enter the news");
    // $("#error-alert-news").fadeIn(0);
    // $("#error-alert-g-version").text("** Please select the device type");
    // $("#error-alert-g-version").fadeIn(0);
    // $("#error-alert-g-countries").text("** choose country for this news");
    // $("#error-alert-g-countries").fadeIn(0);
  }
  else if(news == "" || news == null) {
    $("#error-alert-news").text("** Please enter the news");
    $("#error-alert-news").fadeIn(0);
  }
  else if(title == "" || title == null) {
      $("#error-alert-title").text("** Please enter notification title");
      $("#error-alert-title").fadeIn(0);
  }
  else if(group == "" || group == null) {
      $("#error-alert-g-version").text("** Please select the notification group");
      $("#error-alert-g-version").fadeIn(0);
  }
  else {
    send();
  }
}

function send() {
  $.ajax({
    type: 'post',
    url: '/notifications',
    data: $("#notification_form").serialize(),
    success: function(status) {
      $(".my_loader").fadeOut(0);
      $(".btn-success").prop("disabled", false);
      if(status) {
        $("#success-alert").text("Notification sent successfully to user");
        $("#success-alert").fadeIn(0, function() {
          $("#success-alert").fadeOut(2000);
        });
        clearData();
      }
      else {
        $("#error-alert").text("Sending failed");
        $("#error-alert").fadeIn(0, function() {
          $("#error-alert").fadeOut(1500);
        });
      }
    },
    error: function(error) {
      $(".my_loader").fadeOut(0);
      $(".btn-success").prop("disabled", false);
      console.log(error);
    }
  });
  $(".my_loader").fadeIn(0);
  $(".btn-success").prop("disabled", true);
}

function clearData() {
  $("form").find('select, input, textarea').each(function () {
    $(this).val("");
  });
}
