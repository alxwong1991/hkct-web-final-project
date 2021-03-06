$(document).ready(function () {
  $(".cards-function").slice(0, 5).show();

  $(".load-more-btn").on("click", function () {
    $(".cards-function-2:hidden").slice(0, 3).slideDown();
    if ($(".cards-function:hidden").length == 0) {
      $(".load-more-btn").fadeOut("fast");
      $(".load-more-btn-2").show();
    }
  });

  $(".load-more-btn-2").on("click", function () {
    $(".cards-function-3:hidden").slice(0, 2).slideDown();
    if ($(".cards-function:hidden").length == 0) {
      $(".load-more-btn-2").fadeOut("slow");
    }
  });

  var url = $("#modal-youtube").attr("src");

  $("#custom-modal").on("hide.bs.modal", function () {
    $("#modal-youtube").attr("src", "");
  });

  $("#custom-modal").on("show.bs.modal", function () {
    $("#modal-youtube").attr("src", url);
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

function myFunction() {
  var element = document.getElementById("custom-tick");
  element.classList.toggle("mystyle");
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
