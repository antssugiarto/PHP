$(function() {
    $(".add").on("click", function(){
        $("#headingModal").html("Add Student Data")
        $(".modal-footer button[type=submit]").html("Add Data")
    }); 

    $(".change").on("click", function(){
        $("#headingModal").html("Change Student Data");
        $(".modal-footer button[type=submit]").html("Change Data");
        $(".modal-body form").attr("action", "http://localhost/php-mvc/10.update/public/students/change");

        const id = $(this).data('id');
        $.ajax({
        url: 'http://localhost/php-mvc/10.update/public/students/change',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data) {
            $("#nim").val(data.nim);
            $("#name").val(data.name);
            $("#email").val(data.email);
            $("#department").val(data.department);
            $("#id").val(data.id);
        }
    });
    });

    
});