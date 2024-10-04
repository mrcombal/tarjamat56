$(document).ready(function() {
    let candidate_id  = $('#candidate-id').val();
    $('body').on('click', '#verify', function() {
        bootbox.dialog({
            title: "Verify this CV?",
            message: "<span style='font-size: larger;'><small>Please make sure that you thoroughly go through the CV before verifying. You can choose to edit this CV first.</small></span>",
            buttons: {
                success: {
                    label: "Verify",
                    className: "btn-success",
                    callback: function() {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: "/admin/ajax/verify",
                            cache: false,
                            data: {
                                id: candidate_id
                            },
                            success: function(response) {
                                console.log(response);
                                bootbox.alert("Candidate is now verified.");
                            }
                        });
                    }
                },
                danger: {
                    label: "Edit",
                    className: "btn-info",
                    callback: function() {
                        window.location.href = route('candidate.edit', candidate_id);
                    }
                }
            }
        });
    });



});
