let isSidebarOpen = true;
console.log($("#sidebar-toggle"));

$("#sidebar-toggle").click(function () {
    setTimeout(
        () => {
            $("#app-name").toggleClass("hidden");
        },
        isSidebarOpen ? 0 : 100
    );
    $("#sidebar").toggleClass("w-64 w-20");
    $(".sidebar-text").toggleClass("hidden");
    isSidebarOpen = !isSidebarOpen;
    // $appName.toggleClass("hidden");
    // $submenuArrow.toggleClass("hidden");

    // // If the sidebar is closing, ensure the submenu also closes.
    // if (!isSidebarOpen) {
    //     if (!$submenuContent.hasClass("hidden")) {
    //         $submenuContent.addClass("hidden");
    //         $submenuArrow.css("transform", "rotate(0deg)");
    //     }
    // }
});

$("[data-submenu-toggle]").on("click", function (e) {
    e.preventDefault();
    if (!isSidebarOpen) return;
    const targetId = $(this).data("submenu-toggle");
    const $submenu = $("#" + targetId);
    const $arrow = $(this).find(".submenu-arrow");
    $submenu.toggleClass("hidden");
    $arrow.toggleClass("rotate-90");
});

// $("#dropdown-button").on("click", function (e) {
//     e.stopPropagation();
//     const $dropdownMenu = $("#dropdown-menu");
//     if ($dropdownMenu.hasClass("hidden")) {
//         $dropdownMenu.removeClass("hidden scale-95").addClass("scale-100");
//     } else {
//         $dropdownMenu.removeClass("scale-100").addClass("scale-95");
//         setTimeout(() => {
//             $dropdownMenu.addClass("hidden");
//         }, 100);
//     }
// });

$("#btn-toggle-pwd-login").click(function () {
    let lgPwd = $("#login-password");
    if (lgPwd.attr("type") === "password") {
        lgPwd.attr("type", "text");
    } else {
        lgPwd.attr("type", "password");
    }
    $(this).find("span").toggleClass("text-grey-600 text-blue-600");
});
