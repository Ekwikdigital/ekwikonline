$(document).ready(function() {

    $("#cf-s").hide();

    $(".cf").click(function() {
        $("#cf-s").show();
        $("#assessment").hide();
        $("#students-data").hide();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();

    });
});
$(document).ready(function() {

    $("#brochure").hide();
    $("#newsletter").hide();
    $("#consultation").hide();
    $("#students-data").hide();
    $("#students-reg").hide();
    $("#blog_post").hide();
    $("#assessment").hide();

    $(".d").click(function() {
        $("#dashboard").show();
        $("#brochure").hide();
        $("#newsletter").hide();
        $("#consultation").hide();
        $("#students-data").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
        $("#assessment").hide();
        $("#cf-s").hide();

    });
    $(".b").click(function() {
        $("#brochure").show();
        $("#dashboard").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-data").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
        $("#assessment").hide();
        // $("#c-students").hide();

    });
    $(".c").click(function() {
        $("#consultation").show();
        $("#brochure").hide();
        $("#dashboard").hide();
        $("#newsletter").hide();
        $("#students-data").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
        $("#assessment").hide();
        // $("#c-students").hide();

    });
    $(".n").click(function() {
        $("#newsletter").show();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#students-data").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
        $("#assessment").hide();
        // $("#c-students").hide();

    });
    $(".s").click(function() {
        $("#students-data").show();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
        $("#assessment").hide();
        // $("#c-students").hide();

    });
    $(".r").click(function() {
        $("#students-reg").show();
        $("#students-data").hide();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#blog_post").hide();
        $("#assessment").hide();
        // $("#c-students").hide();

    });
    $(".pb").click(function() {
        $("#blog_post").show();
        $("#students-data").hide();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-reg").hide();
        $("#assessment").hide();
        // $("#c-students").hide();

    });
    $(".As").click(function() {
        $("#assessment").show();
        $("#students-data").hide();
        $("#dashboard").hide();
        $("#brochure").hide();
        $("#consultation").hide();
        $("#newsletter").hide();
        $("#students-reg").hide();
        $("#blog_post").hide();
        // $("#c-students").hide();

    });


    $('#employee_data').DataTable();
    $('#employee_data2').DataTable();
    $('#employee_data3').DataTable();
    $('#employee_data4').DataTable();
    $('#employee_data5').DataTable();
});