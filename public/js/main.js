$(document).ready(function () {
    let $btns = $(".project-area .button-group button");

    $btns.click(function (e) {
        $(".project-area .button-group button").removeClass("active");
        e.target.classList.add("active");

        let selector = $(e.target).attr("data-filter");
        $(".project-area .grid").isotope({
            filter: selector,
        });

        return false;
    });

    $(".project-area .button-group #btn1").trigger("click");

    $(".project-area .grid .test-popup-link").magnificPopup({
        type: "image",
        gallery: { enabled: true },
    });


    // Owl-carousel

    $(".site-main .about-area .owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            560: {
                items: 2,
            },
        },
    });


    // sticky navigation menu

    let nav_offset_top = $(".header_area").height() + 50;

    function navbarFixed() {
        if ($(".header_area").length) {
            $(window).scroll(function () {
                let scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $(".header_area .navbar-menu").addClass("navbar_fixed");
                } else {
                    $(".header_area .navbar-menu").removeClass("navbar_fixed");
                }
            });
        }
    }

    navbarFixed();
});

// Darkmode toggle
// function darkMode() {
//   var body = document.querySelector("body");
//   body.classList.toggle("dark-mode");
// }

    // Copy IP Button
    if (document.getElementById("hero")) {
    document.getElementById("copyip").addEventListener("click", () => {
    navigator.clipboard.writeText("https://instagram.com/raffidev").then((error) => {
        if (error) console.error(error);
        else
        Swal.fire({
            icon: "success",
            title: "Link Copied",
            html: "Link successfully copied to the clipboard.",
        });
    });
    });
}

    // loader
    $("#home").css("display", "none");
    $(window).on("load", function () {
        $("#loader").addClass("loaded");
        $("#home").css("display", "");
    });

    // coockies
    const cookieBox = document.querySelector(".wrapper"),
    buttons = document.querySelectorAll(".button");
  
  const executeCodes = () => {
    //if cookie contains codinglab it will be returned and below of this code will not run
    if (document.cookie.includes("codinglab")) return;
    cookieBox.classList.add("show");
  
    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        cookieBox.classList.remove("show");
  
        //if button has acceptBtn id
        if (button.id == "acceptBtn") {
          //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
          document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
        }
      });
    });
  };
  
  //executeCodes function will be called on webpage load
  window.addEventListener("load", executeCodes);  

    // Dark Mode
    let darkmode = document.querySelector('#darkmode');
     
    darkmode.onclick = () => {
        if(darkmode.classList.contains('bx-moon')){
            darkmode.classList.replace('bx-moon','bx-sun');
            document.body.classList.add('active');
        }else{
            darkmode.classList.replace('bx-sun','bx-moon');
            document.body.classList.remove('active');
        }
    }
