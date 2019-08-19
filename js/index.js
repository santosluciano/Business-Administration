$(document).ready(function(){

    get("companies");

    function get(action){
        $('.bodyPage').html('<i class="fas fa-circle-notch fa-spin justify-content-center offset-6"></i>');
        $.get(action)
        .done(renderContent)
        .fail(consoleError);
    }

    function renderContent(data){
        $('.bodyPage').html(data);
    }

    function consoleError(jqXHR, textStatus, errorThrown){
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);        
    }

    $('.nav-ajax').on('click',function(e){
        e.preventDefault();
        get($(this).data('action'));
    });

    $('body').on('click','.btn-company',function(e){
        e.preventDefault();
        get("company/"+$(this).data('id'));
        $('.navbar-brand').html($(this).data('companyname'));
        $('.menu').addClass('d-none');
        $('.nav-return').removeClass('d-none');
    });

    $('.nav-return').on('click',function(e){
        e.preventDefault();
        $.get("")
        .done(function(data){
            $('body').html(data);
        })
        .fail(consoleError);
    });
});