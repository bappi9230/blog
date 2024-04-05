///////////////////////////Delete alert///////////////////////////////////
$(function () {
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: "Are you sure?",
            text: "Delete This Data?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
            }
        });
    });
});
///////////////////////////end delete alert///////////////////////////////////

///////////////////////////Delete alert///////////////////////////////////
$(function () {
    $(document).on("click", ".delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        console.log(link);
        Swal.fire({
            title: "Are you sure?",
            text: "Delete This Data?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
            }
        });
    });
});

///////////////////////////end delete alert///////////////////////////////////

///////////////////////////Publisher merge alert///////////////////////////////////
document
    .getElementById("publishermerge")
    .addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "Want to Merge Data?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Merge it!",
            height: "300px",
            width: "300px",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Merged!",
                    text: "You have successfully merged publishers.",
                    icon: "success",
                    width: "300px",
                    height: "300px",
                });

                document.getElementById("publishermergesubmit").submit();
            }
        });
    });

///////////////////////////end delete alert///////////////////////////////////
