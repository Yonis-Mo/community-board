const addZero = (val) => {
  return ("0" + val).slice(-2);
};
setInterval(() => {
  const currentDate = new Date();
  const dateTime = `${addZero(currentDate.getUTCDate())}/${addZero(
    currentDate.getMonth() + 1
  )}/${currentDate.getFullYear()} ${addZero(
    currentDate.getHours()
  )} : ${addZero(currentDate.getMinutes())} : ${addZero(
    currentDate.getSeconds()
  )}`;

  document.getElementById("date-time").innerHTML = dateTime;
}, 1000);

$(document).ready(function () {
  $(".darkmode-btn").on("click", function () {
    $(".darkicon").toggleClass("fa-moon-o");
    $(".darkicon").toggleClass("fa-sun-o");

    let currentTheme = $("html").attr("data-theme");

    if (currentTheme === "dark") {
      $("html").attr("data-theme", "light");
    } else if (currentTheme === "light") {
      $("html").attr("data-theme", "dark");
    }else{
      alert("tata bye bye!")
    }
  });
});
