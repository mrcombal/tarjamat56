$(document).ready(function() {
    var e = $("#projects-list").dataTable({
        pageLength: 10,
        colReorder: !0,
        buttons: ["copy", "excel", "pdf", "print"],
        aLengthMenu: [
            [10, 20, 50, -1],
            [10, 20, 50, "All"]
        ],
        order: [
            [0, "asc"]
        ],
        dom: '<"top"<"pull-left"f><"create">>rt<"bottom"p><"clear">',
        columnDefs: [{
            orderable: !1,
            targets: [4]
        }],
        language: {
            "search": "_INPUT_",
            "searchPlaceholder": "Search projects.."
        },
        responsive: false
    });

    $("div.create").html("<a href=\"" + route('course.create') +
        "\" class=\"btn btn-success pull-right btn-lg\">New project</a>");



});
