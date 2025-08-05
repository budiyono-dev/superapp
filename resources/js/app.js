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

$("#dropdown-button").click(function (e) {
    e.stopPropagation();
    const $dropdownMenu = $("#dropdown-menu");
    if ($dropdownMenu.hasClass("hidden")) {
        $dropdownMenu.removeClass("hidden scale-95").addClass("scale-100");
    } else {
        $dropdownMenu.removeClass("scale-100").addClass("scale-95");
        setTimeout(() => {
            $dropdownMenu.addClass("hidden");
        }, 100);
    }
});

$("#btn-toggle-pwd-login").click(function () {
    let lgPwd = $("#login-password");
    if (lgPwd.attr("type") === "password") {
        lgPwd.attr("type", "text");
    } else {
        lgPwd.attr("type", "password");
    }
    $(this).find("span").toggleClass("text-grey-600 text-blue-600");
});

$("#theme-toggle").click(function () {
    $("body").toggleClass("dark");
    // Optionally toggle icon (sun/moon)
    const $icon = $("#theme-icon-path");
    if ($("body").hasClass("dark")) {
        $icon.attr(
            "d",
            "M21.752 15.002A9.718 9.718 0 0112 21.75c-5.385 0-9.75-4.365-9.75-9.75 0-4.418 3.01-8.166 7.25-9.388a.75.75 0 01.948.92A7.5 7.5 0 0019.5 16.8a.75.75 0 01.92.948z"
        ); // moon
    } else {
        $icon.attr(
            "d",
            "M12 3v1m0 16v1m8.66-8.66h-1M4.34 12H3.34m15.02 4.24l-.71-.71M6.34 6.34l-.71-.71m12.02 12.02l-.71-.71M6.34 17.66l-.71-.71M12 7a5 5 0 100 10 5 5 0 000-10z"
        ); // sun
    }
});
