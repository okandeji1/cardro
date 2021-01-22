"use strict";
$(function () {
  //Horizontal form basic
  $("#wizard_horizontal").steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onInit: function (event, currentIndex) {
      setButtonWavesEffect(event);
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
      setButtonWavesEffect(event);
    },
  });

  //Vertical form basic
  $("#wizard_vertical").steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
    onInit: function (event, currentIndex) {
      setButtonWavesEffect(event);
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
      setButtonWavesEffect(event);
    },
  });

  //Advanced form with validation
  var form = $("#wizard_with_validation").show();
  form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    onInit: function (event, currentIndex) {
      //Set tab width
      var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
      var tabCount = $tab.length;
      $tab.css("width", 100 / tabCount + "%");

      //set button waves effect
      setButtonWavesEffect(event);
    },
    onStepChanging: function (event, currentIndex, newIndex) {
      if (currentIndex > newIndex) {
        return true;
      }

      if (currentIndex < newIndex) {
        form.find(".body:eq(" + newIndex + ") label.error").remove();
        form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
      }

      form.validate().settings.ignore = ":disabled,:hidden";
      return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
      setButtonWavesEffect(event);
    },
    onFinishing: function (event, currentIndex) {
      form.validate().settings.ignore = ":disabled";
      return form.valid();
    },
    onFinished: function (event, currentIndex) {
      alert("Good job!", "Submitted!", "success");

      // Generate Tracking Id
      function generateTrackingId() {
        var text = "";
        var possible = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        for (var i = 0; i < 12; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
      }
      // assign serial number
      var trackingId = $("#trackingId").val(generateTrackingId());
      // Get other values
      var customerName = $("#customerName").val();
      var customerEmail = $("#customerEmail").val();
      var customerPhone = $("#customerPhone").val();
      var orderCategory = $("#orderCategory").val();
      var pickupRegion = $("#pickupRegion").val();
      var pickupAddress = $("#pickupAddress").val();
      var deliveryRegion = $("#deliveryRegion").val();
      var deliveryAddress = $("#deliveryAddress").val();
      var deliveryContactName = $("#deliveryContactName").val();
      var deliveryContactPhone = $("#deliveryContactPhone").val();
      var estimatedAmount = $("#estimatedAmount").val();
      var amountPaid = $("#amountPaid").val();
      // Process form data
      $.ajax({
        url: '{{url("/create-order")}}',
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",
          customerName: customerName,
          customerEmail: customerEmail,
          customerPhone: customerPhone,
          orderCategory: orderCategory,
          pickupRegion: pickupRegion,
          pickupAddress: pickupAddress,
          deliveryRegion: deliveryRegion,
          deliveryAddress: deliveryAddress,
          deliveryContactName: deliveryContactName,
          deliveryContactPhone: deliveryContactPhone,
          estimatedAmount: estimatedAmount,
          amountPaid: amountPaid,
          trackingId: trackingId,
        },
        success: function (data) {
          console.log(data);
          //window.location.reload();
        },
        error: function (result) {
          console.log(result);
        },
      });
    },
  });

  form.validate({
    highlight: function (input) {
      $(input).parents(".form-line").addClass("error");
    },
    unhighlight: function (input) {
      $(input).parents(".form-line").removeClass("error");
    },
    errorPlacement: function (error, element) {
      $(element).parents(".form-group").append(error);
    },
    // rules: {
    //     'confirm': {
    //         equalTo: '#password'
    //     }
    // }
  });
});

function setButtonWavesEffect(event) {
  $(event.currentTarget).find('[role="menu"] li a').removeClass("waves-effect");
  $(event.currentTarget)
    .find('[role="menu"] li:not(.disabled) a')
    .addClass("waves-effect");
}
