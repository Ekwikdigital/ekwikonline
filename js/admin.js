$(document).ready(function() {

    $("#brochure").hide();
    $("#newsletter").hide();
    $("#consultation").hide();
    $("#students-data").hide();
    $("#students-reg").hide();
    $("#blog_post").hide();

    $(".d").click(function() {
        $("#dashboard").show();
        $("#brochure").hide();
        $("#newsletter").hide();
        $("#consultation").hide();
        $("#students-data").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
    });
    $(".b").click(function() {
        $("#brochure").show();
        $("#dashboard").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-data").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
    });
    $(".c").click(function() {
        $("#consultation").show();
        $("#brochure").hide();
        $("#dashboard").hide();
        $("#newsletter").hide();
        $("#students-data").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
    });
    $(".n").click(function() {
        $("#newsletter").show();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#students-data").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
    });
    $(".s").click(function() {
        $("#students-data").show();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
    });
    $(".r").click(function() {
        $("#students-reg").show();
        $("#students-data").hide();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#blog_post").hide();
    });
    $(".pb").click(function() {
        $("#blog_post").show();
        $("#students-data").hide();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-reg").hide();
    });

    $('#employee_data').DataTable();
    $('#employee_data2').DataTable();
    $('#employee_data3').DataTable();
    $('#employee_data4').DataTable();
    $('#employee_data5').DataTable();

});