$(document).ready(function(){

    get("companies");

    function get(action){
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
        $('.bodyPage').html('<i class="fas fa-circle-notch fa-spin justify-content-center offset-6"></i>');
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
        location.reload();
    });

    $('body').on('change','#employeeType',function(){
        $('#employeeTypeSpecialty').children().attr('hidden',true);
        $('#employeeTypeSpecialty').val('');
        let idType = $(this).val();
        $('#employeeTypeSpecialty').children().each(function(i,e){
            if ($(this).data('type') == idType) {
                $(this).attr('hidden',false);
            }
        });
    });
    $('body').on('submit','#formCreate',function(e){
        e.preventDefault();
        $.post("addEmployee",$(this).serialize())
            .done(function(data){
                get("company/"+$('#companyId').val());
            });
    });
    $('body').on('submit','#searchEmployee',function(e){
        e.preventDefault();
        $.post("searchEmployee",$(this).serialize())
        .done(function(data){
            $('#searchResult').html(data);
        });
    });
});