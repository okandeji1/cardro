document.addEventListener("DOMContentLoaded", () => {
  document.querySelector("#loginForm").onsubmit = () => {
    // alert("yedkmkm");
    // return;
    //   Initialize new request
    const request = new XMLHttpRequest();
    const email = document.querySelector("#email").value;
    const password = document.querySelector("#password").value;
    //   Validations
    if (email === "" || email === "undefined") {
      document.getElementById("msg").classList.remove("d-none");
      document.getElementById("msg").innerHTML = "Please email is required";
      return false;
    }

    if (password === "" || password === "undefined") {
      document.getElementById("msg").classList.remove("d-none");
      document.getElementById("msg").innerHTML = "Please password is required";
      return false;
    }

    request.open("POST", "/api/auth-login");
    // Header
    xhr.setRequestHeader("Content-type", "application/json; charset=utf-8");
    // Add data to send with form request
    const formData = new FormData(document.forms.login);
    // Send request
    request.send(formData);

    // Callback function when request complete
    request.onload = () => {
      // Extract JSON data from request
      const data = JSON.parse(request.responseText);
      // process the result
      if (data.success) {
        console.log(data);
      } else {
        console.log(data.error);
        document.getElementById("msg").classList.remove("d-none");
        document.getElementById("msg").innerHTML = data.error;
        return false;
      }
    };
    return false;
  };
});
