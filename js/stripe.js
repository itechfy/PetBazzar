window.onload = function () {
  var stripe = Stripe(
    "pk_test_51N2vFQD640UpDpFRgo289e2mGDJAxNkB97FQ2RtI0WJ569bWEQkAJiPPi3kMYLOZZIx4vBZ6UpOwGh6EQpKbaPRF00Ao1OdQRf"
  );
  let isMounted = false;
  //generates random order id
  function generateOrderId() {
    const timestamp = new Date().getTime();
    const randomNumber = Math.floor(Math.random() * 1000000);
    const orderNumber = `ORD-${timestamp}-${randomNumber}`;
    return orderNumber;
  }

  //get current products
  function getIdsOfCartItems() {
    const productIds = [];
    const listAA = localStorage.getItem("productsList");
    const productsArr = JSON.parse(listAA) ?? [];

    if (productsArr) {
      for (let i = 0; i < productsArr.length; i++) {
        productIds.push([
          productsArr[i]["productId"],
          productsArr[i]["productQuantity"],
        ]);
      }
    }

    return productIds;
  }

  // Customize which fields are collected by the Payment Element
  // Create a Payment Element instance
  var elements = stripe.elements();
  var cardElement = elements.create("card");

  // Mount the Payment Element to the DOM
  if ($('input[name="payment_type"]').val() === "stripe") {
    cardElement.mount("#card-element");
    isMounted = true;
  } else {
    cardElement.unmount("#card-element");
    isMounted = false;
  }

  $("#card-element").addClass("payment-info-box");

  // Handle form submission
  var form = document.getElementById("stripe-form");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    // Get the form data
    var formData = new FormData(form);

    const date = new Date();

    var userName = formData.get("name");
    var phone = formData.get("phone");
    var email = formData.get("email");
    var country = formData.get("country_name");
    var city = formData.get("city");
    var petNickname = formData.get("nickname");
    var otherCity = formData.get("city_other");
    var address = formData.get("address");
    var additionalInfo = formData.get("additional_info");
    var bill = formData.get("shipping_cost");
    var orderNo = generateOrderId();
    var orderOn =
      date.getDate() + "/" + date.getMonth() + "/" + date.getFullYear();
    var ordered_items = formData.has("buyNow")
      ? formData.get("buyNow")
      : JSON.stringify(getIdsOfCartItems());

    if (
      userName &&
      phone &&
      email &&
      country &&
      city &&
      petNickname &&
      otherCity &&
      address &&
      bill &&
      orderNo &&
      orderOn &&
      ordered_items
    ) {
      //if payment is through Card - include card info
      if (isMounted) {
        stripe
          .createPaymentMethod({
            type: "card",
            card: cardElement,
          })
          .then(function (result) {
            if (result.error) {
              // Display error message
              var errorElement = document.querySelector("#error-message");
              errorElement.textContent = result.error.message;
            } else {
              // Send payment method ID to server for processing
              var paymentMethodId = result.paymentMethod.id;
              // Passing data to server
              $.ajax({
                url: "process-payment-stripe.php",
                method: "POST",
                data: {
                  paymentMethodId: paymentMethodId,
                  ordered_on: orderOn,
                  order_no: orderNo,
                  name: userName,
                  phone: phone,
                  email: email,
                  country: country,
                  city: city,
                  pet_nickname: petNickname,
                  other_city: otherCity,
                  address: address,
                  additional_info: additionalInfo,
                  ordered_items: ordered_items,
                  bill: bill,
                },
                success: function (response) {
                  if (response) {
                    window.location.replace(
                      "https://www.petbazzar.store/orderStatus.php"
                    );
                  }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  console.log(errorThrown);
                },
              });
            }
          });
      }
      //if payment is just Cash on Delivery | Store only shipping info
      else {
        $.ajax({
          url: "process-cashOnDelivery.php",
          method: "POST",
          data: {
            ordered_on: orderOn,
            order_no: orderNo,
            name: userName,
            phone: phone,
            email: email,
            country: country,
            city: city,
            pet_nickname: petNickname,
            other_city: otherCity,
            address: address,
            additional_info: additionalInfo,
            ordered_items: ordered_items,
            bill: bill,
          },
          success: function (response) {
            if (response) {
              window.location.replace(
                "https://www.petbazzar.store/orderStatus.php"
              );
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
          },
        });
      }
    } else {
      alert("Please fill in the required fields");
    }
  });

  $('input[name="payment_type"]').change(function (e) {
    e.preventDefault();

    if ($(this).val() === "stripe") {
      //show-stripe-form
      $(".stripe-box").addClass("show");
      cardElement.mount("#card-element");
      isMounted = true;
    } else {
      //hide-stripe-form
      $(".stripe-box").removeClass("show");
      cardElement.unmount("#card-element");
      isMounted = false;
    }
  });
};
