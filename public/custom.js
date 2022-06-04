$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getDistrict(){
        $("#division").change(function () {
            var id = $("#division option:selected").val();
            $('#thana').html('');
            $('#union').html('');
            $.ajax({
                type: "GET",
                url: "ajax/district/" + id,
                cache: false,
                dataType: "html",
                success: function (response) {
                    $('#district').html(response);
                }
            });
        });
    }

    function getThana(){
        $("#district").change(function () {
            var thana_id = $("#district option:selected").val();
            $('#union').html('');
            $.ajax({
                type: "GET",
                url: "ajax/thana/" + thana_id,
                cache: false,
                dataType: "html",
                success: function (response) {
                    $('#thana').html(response);
                }
            });
        });
    }

    function getUnion(){
        $("#thana").change(function () {
            var thana_id = $("#thana option:selected").val();
            $.ajax({
                type: "GET",
                url: "ajax/union/" + thana_id,
                cache: false,
                dataType: "html",
                success: function (response) {
                    $('#union').html(response);
                }
            });
        });
    }

    getDistrict();
    getThana();
    getUnion();
});
