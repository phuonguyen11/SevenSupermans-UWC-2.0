function selectRole() {
    var x = document.getElementById("employee-filter-option").value;
    alert(x);
    $.ajax({
        url: "../../app/views/fetchemp.php",
        type: 'POST',
        dataType: 'html',
        data:
        {
            id: x
        },
        success: function (data) {
            // $("ans").html(data);
            console.log(data);
        }
    });
}
