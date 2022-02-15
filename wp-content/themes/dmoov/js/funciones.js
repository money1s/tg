$(document).ready(function() {

	$('.btn-menu').click(function(){
		$('.menu-mobile').addClass('visible');
	});
	$('.cerrar-menu').click(function(){
		$('.menu-mobile').removeClass('visible');
	});
	
	/*--SUBMENU--*/
    $('.menu-mobile').on('click','.ic-sm .fa-chevron-down',function(){
        $(this).removeClass('fa-chevron-down');
        $(this).addClass('fa-chevron-up');
        $(this).parent().parent().children('.sub-menu').slideDown();
    });    
    $('.menu-mobile').on('click','.ic-sm .fa-chevron-up',function(){
        $(this).addClass('fa-chevron-down');
        $(this).removeClass('fa-chevron-up');
        $(this).parent().parent().children('.sub-menu').slideUp();
        $(this).parent().parent().parent().children('.sub-menu').slideDown();
    });
    /*--SUBMENU--*/
	
	$('.menu-distribuidores a').click(function(e){
		e.preventDefault();
		$('.menu-distribuidores a').removeClass('activo');
		$(this).addClass('activo');
		var dis = $(this).data('rel');
		$('.distribuidor').hide();
		$('#distribuidor-'+dis).show();
	});

	$('.menu-distribuidores2 a').click(function(e){
		e.preventDefault();
		$('.menu-distribuidores2 a').removeClass('activo');
		$(this).addClass('activo');
		var dis = $(this).data('rel');
		$('.distribuidorb').hide();
		$('#distribuidorb-'+dis).show();
	});

});

$(window).load(function () {
	$('#cargando').fadeOut(1200);


    $('.menu-mobile ul li a').each(function (index, value){

        var f = $(this).parent().find('.sub-menu');
        if($(f).length > 0){
            $(this).after('<div class="ic-sm"><i class="fa fa-chevron-down"></i></div>');
        }
    });
	

});