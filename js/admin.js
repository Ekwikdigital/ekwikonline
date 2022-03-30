$(document).ready(function() {

    $("#brochure").hide();
    $("#newsletter").hide();
    $("#consultation").hide();
    $("#students-data").hide();

    $(".d").click(function() {
        $("#dashboard").show();
        $("#brochure").hide();
        $("#newsletter").hide();
        $("#consultation").hide();
        $("#students-data").hide();
    });
    $(".b").click(function() {
        $("#brochure").show();
        $("#dashboard").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-data").hide();
    });
    $(".c").click(function() {
        $("#consultation").show();
        $("#brochure").hide();
        $("#dashboard").hide();
        $("#newsletter").hide();
        $("#students-data").hide();
    });
    $(".n").click(function() {
        $("#newsletter").show();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#students-data").hide();
    });
    $(".s").click(function() {
        $("#students-data").show();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
    });

    $('#employee_data').DataTable();
    $('#employee_data2').DataTable();
    $('#employee_data3').DataTable();
    $('#employee_data4').DataTable();

});