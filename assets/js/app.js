//Lyssnar efter klick på submit registrerings knappen och kör processen
$(document).on("click", "#sumbitRegister", function() {
  var email = $("#registerDiv")
    .find("#emailRegister")
    .val();
  var password = $("#registerDiv")
    .find("#passwordRegister")
    .val();
  var passwordRepeat = $("#registerDiv")
    .find("#repeatRegister")
    .val();

  if (
    valideraInput(password) &&
    valideraEmail(email) &&
    password == passwordRepeat
  ) {
    $.post(
      "registerDB.php",
      {
        password: password,
        email: email
      },
      function(data) {
        alert(data);
      }
    );
  } else {
  }
});

//Lyssnar efter klick på login knappen och kör processen
$(document).ready(function() {
  $("#submitLogin").click(function() {
    var email = $("#emailLogin").val();
    var password = $("#passwordLogin").val();
    if (valideraEmail(email) && valideraInput(password)) {
      $.post("logginDB.php", { password: password, email: email }, function(
        data
      ) {
        alert(data);
        if (data == "User logged in") {
          window.location.href = "../forum.php";
        }
      });
    } else {
    }
  });
});

//Lyssnar efter klick på submit recensioner knappen och kör processen
$(document).on("click", "#submitReview", function() {
  var title = $("#reviewForm")
    .find("#movieTitle")
    .val();
  var review = $("#reviewForm")
    .find("#review")
    .val();
  var stars = $("input:checked").val();

  if (valideraInput(title) && valideraInput(review) && valideraInput(stars)) {
    $.post(
      "makePostDB.php",
      { title: title, review: review, stars: stars },
      function(data) {
        alert(data);
      }
    );
  } else {
  }
});

//Lyssnar efter klick på sök knappen och kör processen
$(document).on("click keypress", "#searchMovie", function(e) {
  if (e.which === 13 || e.type === "click") {
    displayreviews();
  }
});

//Lyssnar efter klick på ta bort admin knappen och kör processen
$(document).on("click", "#offadmin", function() {
  var user = $("#adminuser").text();

  $.post(
    "changeAdmin.php",
    { userType: "0" /*Den userType vi vill ändra till*/, user: user },
    function() {
      location.reload();
    }
  );
});

//Lyssnar efter klick på lägg till admin knappen och kör processen
$(document).on("click", "#onadmin", function() {
  var user = $("#normaluser").text();
  $.post(
    "changeAdmin.php",
    { userType: "1" /*Den userType vi vill ändra till*/, user: user },
    function() {
      location.reload();
    }
  );
});

//Lyssnar efter klick på ta bort recension knappen och kör processen
$(document).on("click", "#removeReview", function() {
  var postID = $(this).val();
  $.post("removePost.php", { postID: postID }, function(data) {
    displayreviews();
  });
});

//Funktion för att validera input
function valideraInput(input) {
  input = input.trim();
  if (input !== "") {
    return true;
  } else {
    alert("Vänligen fyll i alla fält");
    return false;
  }
}

//Funktion för att validera email
function valideraEmail(email) {
  for (let index = 0; index < email.length; index++) {
    if (email.charAt(index) == "@") {
      for (let index2 = index; index2 < email.length; index2++) {
        if (email.charAt(index2) == ".") {
          return true;
        }
      }
    }
  }
  alert("Vänligen ange en giltig email");
  return false;
}

//Funktion för att displaya alla recensioner
function displayreviews() {
  var search = $("#searchInput").val();
  var apiKey = "3ce6b720";
  if (valideraInput(search)) {
    $.get(
      "http://www.omdbapi.com/?apikey=" +
        apiKey +
        "&t=" +
        search +
        "&plot=full",
      function(data) {
        $("#popUp").show(500);
        $("#movieTitle").html(data.Title);
        $("#summary").html(data.Plot);
      }
    );
    $.post("_post-list.php", { title: search }, function(data) {
      $("#reviewsDiv").html(data);
    });
  } else {
    alert("Vänligen fyll i rutan");
  }
}
