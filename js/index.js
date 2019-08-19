$(document).ready(function(){

    $.get("companies")
        .done(renderContent)
        .fail(consoleError);

    function renderContent(data){
        $('.bodyPage').html(data);
    }

    function consoleError(jqXHR, textStatus, errorThrown){
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);        
    }
});