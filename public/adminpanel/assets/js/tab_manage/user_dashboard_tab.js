$(document).ready(function () {
    // Get the stored active tab ID from sessionStorage
    var userActiveTab = sessionStorage.getItem("userActiveTab");
    // sessionStorage.removeItem("activeTabId");
    if (userActiveTab == null) {
        userActiveTab = "#account-dashboard";
        sessionStorage.setItem("userActiveTab", userActiveTab);
    }
    if (userActiveTab) {
        var active = document.querySelector(
            '#user_dashboard_tab a[href="' + userActiveTab + '"]'
        );
        if (active) {
            active.classList.add("active");
            var tabContent = document.querySelector(
                active.getAttribute("href")
            );
            if (tabContent) {
                tabContent.classList.add("show", "active");
            }
        }
    }
    // Add click event listener to tabs to store the active tab ID in sessionStorage
    var tab = document.querySelectorAll(
        '#user_dashboard_tab a[data-toggle="tab"]'
    );
    tab.forEach(function (tab) {
        tab.addEventListener("click", function () {
            var tabId = this.getAttribute("href");
            sessionStorage.setItem("userActiveTab", tabId);
        });
    });
});
