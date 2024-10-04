$(document).ready(function() {
    var e = $("#candidates-list").DataTable({
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
        dom: '<"top"<"pull-left"<"toolbar">f><"create">>rt<"bottom"p><"clear">',
        columnDefs: [{
            orderable: !1,
            targets: [2,4]
        }],
        language: {
            "search": "_INPUT_",
            "searchPlaceholder": "Search .."
        }
    });

    $('div.toolbar').html('<select data-style="btn-outline btn-default btn-lg" class="selectpicker" id="candidate-state">' +
        '<option value="">All candidates</option>' +
        '<option value="verified">Verified</option>' +
        '<option value="pending approval">Pending approval</option>' +
        '</select>');

    $("div.create").html("<a href=\"" + route('candidate.create') +
        "\" class=\"btn btn-success pull-right btn-lg\">New candidate</a>");
    $('body').on('click', '.delete', function() {
        currentRow = $(this).closest('tr');
        aPos = e.fnGetPosition(currentRow.get(0));
        bootbox.dialog({
            message: "<span style='font-size: larger;'>Are you sure you want to delete this candidate?</span>",
            title: "Deleting a candidate",
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
                                model: "Candidate"
                            },
                            success: function(response) {
                                bootbox.alert("Candidate has been deleted!");
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

    $('body').on('change', '#candidate-state', function() {
        let selected_value = $(this).val();
        e.columns(3).search(selected_value).draw();
    });

    $('#unverified-link').on('click', function () {
        $('#candidate-state option[value="pending approval"]').attr('selected', 'selected');
        $('#candidate-state').selectpicker('refresh');
        e.columns(3).search('pending approval').draw();
    });




});
