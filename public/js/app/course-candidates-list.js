$(document).ready(function() {
    var e = $("#candidates-list").dataTable({
        pageLength: 20,
        colReorder: !0,
        buttons: ["copy", "excel", "pdf", "print"],
        aLengthMenu: [
            [10, 20, 50, -1],
            [10, 20, 50, "All"]
        ],
        order: [
            [1, "asc"]
        ],
        dom: '<"top"<"pull-left"f><"create">>rt<"bottom"p><"clear">',
        language: {
            "search": "_INPUT_",
            "searchPlaceholder": "Search candidates.."
        }
    });
});
