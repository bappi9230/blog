$(document).ready(function () {
    // Get the stored active tab ID from sessionStorage
    var activeTabId = sessionStorage.getItem("activeTabId");
    // sessionStorage.removeItem("activeTabId");
    if (activeTabId == null) {
        activeTabId = "#tab-1";
        sessionStorage.setItem("activeTabId", activeTabId);
    }
    if (activeTabId) {
        var activeTab = document.querySelector(
            '#myTab a[href="' + activeTabId + '"]'
        );
        if (activeTab) {
            activeTab.classList.add("active");
            var tabContent = document.querySelector(
                activeTab.getAttribute("href")
            );
            if (tabContent) {
                tabContent.classList.add("show", "active");
            }
        }
    }
    // Add click event listener to tabs to store the active tab ID in sessionStorage
    var tabLinks = document.querySelectorAll('#myTab a[data-toggle="tab"]');
    tabLinks.forEach(function (tabLink) {
        tabLink.addEventListener("click", function () {
            var tabId = this.getAttribute("href");
            sessionStorage.setItem("activeTabId", tabId);
        });
    });
});
