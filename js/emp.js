function selectRole()
{   
    var x = document.getElementById("employee-filter-option").value;
    alert(x);
    $.ajax({
        url: "../app/views/fetchemp.php",
        type: 'POST',
        data: 
        {
            id: x
        },
        success:function(data)
        {
            $("ans").html(data);
        }
    });
}
