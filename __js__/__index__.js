"use strict";
function __$(tag) {
  return document.querySelector(tag);
}
__$("._start_btn").onclick = (e) => {
  e.preventDefault();
  var error = [];
  var frm = __$("#myfrm");
  var err = __$("._error");
  var success = __$("._success");
  var host_name = __$("#host_name").value.trim();
  var db_user = __$("#db_user").value.trim();
  var db_name = __$("#db_name").value.trim();
  var db_pass = __$("#db_pass").value.trim();
  var description = __$("#description").value.trim();
  var form_data = new FormData(frm);

  if (host_name == "") {
    error[0] = "Enter Host Name";
    err.style.display = "block";
    err.textContent = error[0];
  } else if (db_user == "") {
    error[0] = "Enter DB UserName";
    err.style.display = "block";
    err.textContent = error[0];
  } else if (db_name == "") {
    error[0] = "Enter DB Name";
    err.style.display = "block";
    err.textContent = error[0];
  } else if (description == "") {
    error[0] = "Enter Description";
    err.style.display = "block";
    err.textContent = error[0];
  } else {
    error[0] = "";
  }
  if (error[0] == "") {
    err.style.display = "none";
    success.style.display = "block";
    fetch("__server__/__file__exist__.php", {
      method: "POST",
      body: form_data,
    })
      .then((res) => {
        return res.text();
      })
      .then((data) => {
        console.log(data);
        success.textContent = data;
        frm.reset()
      });
  }
};
