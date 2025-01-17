function display() {
    $.ajax({
      url: "db_display.php",
      type: "GET",
      success: function (response) {
        $("#dataDisplay").html(response);
        console.log("Data Displayed");
      },
    });
  }
  function add() {
    const fname = $("#firstname").val();
    const lname = $("#lastname").val();
    const email = $("#email").val();
  
    $.ajax({
      url: "db_add.php",
      type: "POST",
      data: {
        submit: 1,
        firstname: fname,
        lastname: lname,
        email: email,
      },
      success: function (response) {
        $("#firstname").val("");
        $("#lastname").val("");
        $("#email").val("");
        console.log(response);
        console.log("Data Added");
        display();
      },
    });
  }
  
  $(document).ready(function () {
    display();
  });
  
  function delete_user(id) {
    console.log(id);
    $.ajax({
      url: "db_delete.php",
      type: "POST",
      data: {
        delete: 1,
        id: id,
      },
      success: function (response) {
        console.log(response);
        console.log("Data Deleted");
        display();
      },
    });
  }