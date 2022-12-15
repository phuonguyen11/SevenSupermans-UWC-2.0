function selectRole() {
    var x = document.getElementById("employee-filter-option").value;
    $.ajax({
        url: "../../app/views/fetchemp.php",
        type: 'POST',
        dataType: 'html',
        data:
        {
            id: x
        },
        success: function (data) {
            $("#ans").html(data);
            console.log(data);
        }
    });
}
