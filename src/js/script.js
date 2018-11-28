

variableId = 0;

$.ajax({
    url: "controllers/controller.php",
    type: "POST",
    data: "idContinent=" + variableId,

    success: function(result){
        $("#testResult").empty();
        $("#testResult").append(result);
    }
});