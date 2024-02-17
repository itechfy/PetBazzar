const searchFeature = function (selector) {
  $(selector).keyup(function (e) {
    if (
      e.keyCode === 8 ||
      e.charCode === 8 ||
      e.keyCode === 46 ||
      e.keyCode === 32 ||
      e.target.value === ""
    ) {
      $("#pets-list .card-body").css("display", "block");
    }
    if (
      $(`.${e.target.value}`).attr("class") !== undefined ||
      e.target.value.toLowerCase()
    ) {
      $("#pets-list .pets-card").css("display", "none");
      $.each($(`.pets-card`), function () {
        //card-title
        const valueFromSearch = $(this)
          .find(".media .media-body .media-body-header .left-box .card-title")
          .html()
          .toString()
          .toLowerCase();
        let valueToSearch = e.target.value.toLowerCase().replace(/\s+/g, ""); //to ignore spaces
        if (valueFromSearch.search(valueToSearch) !== -1) {
          $(this).css("display", "block");
        }
      });
    }
  });
};
$(document).ready(function () {
  //Search Function | Pets
  //get by pet name
  //".pet-selector"

  searchFeature("#search_term");
  searchFeature(".pet-selector");

  $(".pet-selector").change(function (e) {
    if (
      e.keyCode === 8 ||
      e.charCode === 8 ||
      e.keyCode === 46 ||
      e.keyCode === 32 ||
      e.target.value === ""
    ) {
      $("#pets-list .card-body").css("display", "block");
    }
    if (
      $(`.${e.target.value}`).attr("class") !== undefined ||
      e.target.value.toLowerCase()
    ) {
      $("#pets-list .pets-card").css("display", "none");
      $.each($(`.pets-card`), function () {
        //card-title
        const valueFromSearch = $(this)
          .find(".media .media-body .media-body-header .left-box .card-title")
          .html()
          .toString()
          .toLowerCase();

        let valueToSearch = e.target.value.toLowerCase().replace(/\s+/g, ""); //to ignore spaces;
        if (valueFromSearch.search(valueToSearch) !== -1) {
          $(this).css("display", "block");
        }
      });
    }
  });

  // selecting city

  $('select[name="city"]').change(function (e) {
    e.preventDefault();
    if (
      e.keyCode === 8 ||
      e.charCode === 8 ||
      e.keyCode === 46 ||
      e.keyCode === 32 ||
      e.target.value === ""
    ) {
      $("#pets-list .card-body").css("display", "block");
    }
    if (
      $(`.${e.target.value}`).attr("class") !== undefined ||
      e.target.value.toLowerCase()
    ) {
      $("#pets-list .pets-card").css("display", "none");
      $.each($(`.pets-card`), function () {
        //card-title
        const valueFromSearch = $(this)
          .find(".media .media-body .pet-feature-list li .location_")
          .text()
          .toLowerCase();

        let valueToSearch = e.target.value.toLowerCase().replace(/\s+/g, ""); //to ignore spaces;
        if (valueFromSearch.search(valueToSearch) !== -1) {
          $(this).css("display", "block");
        }
      });
    }
  });

  //selecting gender filter
  $('input[name="gender"]').change(function (e) {
    e.preventDefault();
    if (
      e.keyCode === 8 ||
      e.charCode === 8 ||
      e.keyCode === 46 ||
      e.keyCode === 32 ||
      e.target.value === ""
    ) {
      $("#pets-list .card-body").css("display", "block");
    }
    if (
      $(`.${e.target.value}`).attr("class") !== undefined ||
      e.target.value.toLowerCase()
    ) {
      $("#pets-list .pets-card").css("display", "none");
      $.each($(`.pets-card`), function () {
        //card-title
        const valueFromSearch = $(this)
          .find(".media .media-body .pet-feature-list li .gender_")
          .text()
          .toLowerCase();

        let valueToSearch = e.target.value.toLowerCase().replace(/\s+/g, ""); //to ignore spaces;
        if (valueFromSearch.search(valueToSearch) !== -1) {
          $(this).css("display", "block");
        }
      });
    }
  });
  //selecting color filter
  $('input[name="color"]').change(function (e) {
    e.preventDefault();
    if (
      e.keyCode === 8 ||
      e.charCode === 8 ||
      e.keyCode === 46 ||
      e.keyCode === 32 ||
      e.target.value === ""
    ) {
      $("#pets-list .card-body").css("display", "block");
    }
    if (
      $(`.${e.target.value}`).attr("class") !== undefined ||
      e.target.value.toLowerCase()
    ) {
      $("#pets-list .pets-card").css("display", "none");
      $.each($(`.pets-card`), function () {
        //card-title
        const valueFromSearch = $(this)
          .find(".media .media-body .pet-feature-list li .color_")
          .text()
          .toLowerCase();

        let valueToSearch = e.target.value.toLowerCase().replace(/\s+/g, ""); //to ignore spaces;
        if (valueFromSearch.search(valueToSearch) !== -1) {
          $(this).css("display", "block");
        }
      });
    }
  });
});
