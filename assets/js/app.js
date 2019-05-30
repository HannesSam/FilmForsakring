// för registrering
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

function hideRegister() {
  $("#registerDiv").toggle(500);
  setTimeout(function() {
    $("#registerDiv").load("include/views/_registerDiv.php");
  }, 500);
}

//Funktioner för log in
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

//Funktioner för make post
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

function hideMakePost() {
  $("#makePostDiv").toggle(500);
  setTimeout(function() {
    $("#makePostDiv").load("include/views/_postDiv.php");
  }, 500);
}

//fixa så att enter funkar.
$(document).on("click keypress", "#searchMovie", function(e) {
  if (e.which === 13 || e.type === "click") {
    displayreviews();
  }
});

//tar bort admin
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

//Lägger till admin
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

//tar bort review
$(document).on("click", "#removeReview", function() {
  var postID = $(this).val();
  $.post("removePost.php", { postID: postID }, function(data) {
    displayreviews();
  });
});

function valideraInput(input) {
  input = input.trim();
  if (input !== "") {
    return true;
  } else {
    alert("Vänligen fyll i alla fält");
    return false;
  }
}

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
