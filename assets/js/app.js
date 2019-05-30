$(document).ready(function() {
  $("#makePost").click(function() {
    $("html, body")
      .animate({ scrollTop: 0 }, "slow")
      .promise()
      .then(function() {
        $("#makePostDiv").toggle(500);
      });
  });
});

$(document).ready(function() {
  $("#register").click(function() {
    $("html, body")
      .animate({ scrollTop: 0 }, "slow")
      .promise()
      .then(function() {
        $("#registerDiv").toggle(500);
      });
  });
});

//Validering och funktioner för registrering
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

  if (valideraRegister(email, password, passwordRepeat)) {
    $.post(
      "registerDB.php",
      {
        password: password,
        email: email
      },
      function(data) {
        alert(data);
        /*
        $("#registerDiv").html("<h3 id='feedbackText'>" + data + "</h3>");
        $("#registerFeedbackDiv").toggle(50);
        setTimeout(hideRegister, 3500); */
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

function valideraRegister(email, password, passwordRepeat) {
  if (passwordRepeat == "" || email == "" || password == "") {
    alert("Vänligen fyll i alla fält");
    return false;
  } else {
    for (let index = 0; index < email.length; index++) {
      if (email.charAt(index) == "@") {
        for (let index2 = index; index2 < email.length; index2++) {
          if (email.charAt(index2) == ".") {
            if (passwordRepeat == password) {
              return true;
            } else {
              alert("Lösenorden mathcar inte");
              return true;
            }
          }
        }
      }
    }
    alert("vänligen ange en giltig email");
    return false;
  }
}

//Validering och funktioner för log in
$(document).ready(function() {
  $("#submitLogin").click(function() {
    var email = $("#emailLogin").val();
    var password = $("#passwordLogin").val();
    if (valideraLogin(email, password)) {
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

function valideraLogin(email, password) {
  email = email.trim();
  password = password.trim();
  if (email == "" || password == "") {
    alert("Vänligen fyll i alla fält");
    return false;
  } else {
    return true;
  }
}

//validering och funktioner för make post
$(document).on("click", "#submitReview", function() {
  var title = $("#reviewForm")
    .find("#movieTitle")
    .val();
  var review = $("#reviewForm")
    .find("#review")
    .val();
  var stars = $("#stars")
    .find("input:checked")
    .val();
  if (valideraPost(title, review, stars)) {
    $.post(
      "makePostDB.php",
      { title: title, review: review, stars: stars },
      function(data) {
        alert(data);
        /*
        $("#containerForPosts").load("postList.php");
        $("#makePostDiv").html("<h3 id='feedbackText'>" + data + "</h3>");
        setTimeout(hideMakePost, 3500); */
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

function valideraPost(header, text) {
  if (header == "" || text == "") {
    alert("Vänligen fyll i alla fält");
    return false;
  } else {
    return true;
  }
}

//Fixa valedering för input!
//fixa så att enter funkar.
$(document).on("click keypress", "#searchMovie", function(e) {
  if (e.which === 13 || e.type === "click") {
    displayreviews();
  }
});

function displayreviews() {
  var search = $("#searchInput").val();
  var apiKey = "3ce6b720";
  if (search == "") {
    alert("Vänligen fyll i rutan");
  } else {
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
  }
}

//http://www.omdbapi.com/?apikey=3ce6b720&t=bambi&plot=full

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

//Lägger till adming
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

//få denna att försvinna genom att kalla på sök igen
