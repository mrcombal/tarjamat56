$(document).ready(function() {
    var e = $("#clients-list").dataTable({
        pageLength: 20,
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
        language: {
            "search": "_INPUT_",
            "searchPlaceholder": "Search clients.."
        }
    });

    $("div.create").html("<a href=\"" + route('client.create') +
        "\" class=\"btn btn-success pull-right btn-lg\">New client</a>");
    $('body').on('click', '.delete', function() {
        currentRow = $(this).closest('tr');
        aPos = e.fnGetPosition(currentRow.get(0));
        bootbox.dialog({
            message: "<span style='font-size: larger;'>Are you sure you want to delete this client?</span>",
            title: "Deleting a client",
            buttons: {
                success: {
                    label: "YES",
                    className: "btn-success",
                    callback: function() {
                        id  = currentRow.attr('data-id');
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: "/admin/ajax/delete",
                            cache: false,
                            data: {
                                id: id,
                                model: "Client"
                            },
                            success: function(response) {
                                bootbox.alert("Client has been deleted!");
                            }
                        });
                        e.fnDeleteRow(aPos);
                    }
                },
                danger: {
                    label: "CANCEL!",
                    className: "btn-default",
                    callback: function() {
                    }
                }
            }
        });
    });



});
