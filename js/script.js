$(document).ready(function () {
  // load more btn function
  // get initial first 5 cards to show
  $(".cards-function").slice(0, 5).show();

  // on click of load more btn will trigger more cards
  $(".load-more-btn").on("click", function () {
    $(".cards-function-2:hidden").slice(0, 3).slideDown();
    // check the load more btn reach end of the array then the load more btn will fade out and load more btn-2 appears
    if ($(".cards-function:hidden").length == 0) {
      $(".load-more-btn").fadeOut("fast");
      $(".load-more-btn-2").show();
    }
  });

  $(".load-more-btn-2").on("click", function () {
    $(".cards-function-3:hidden").slice(0, 2).slideDown();
    // check the load more btn reach end of the array then the load more btn-2 will fade out
    if ($(".cards-function:hidden").length == 0) {
      $(".load-more-btn-2").fadeOut("slow");
    }
  });

  // youtube modal function
  // get iframe src attribute value and store in a variable
  var youtubeVideoLink = $("#modal-youtube").attr("src");

  // assign empty value youtube link to iframe src attribute when closing modal
  $("#custom-modal").on("hide.bs.modal", function () {
    $("#modal-youtube").attr("src", "");
  });

  // assign the initial youtube link variable back to iframe src attribute when opening modal
  $("#custom-modal").on("show.bs.modal", function () {
    $("#modal-youtube").attr("src", youtubeVideoLink);
  });
});

// let select = document.querySelector("select.year-of-birth");
// let options = document.querySelectorAll("select.year-of-birth option");
// let arr = [];

// options.forEach((opt) => {
//   arr.push(opt.innerText);
// });

// select.innerHTML = "";

// for (let i = arr.length - 1; i >= 0; i--) {
//   const option = document.createElement("option");
//   option.innerText = arr[i];

//   select.appendChild(option);
// }
