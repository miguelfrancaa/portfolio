$(".contact").hover(function(){
	$(this).append('&nbsp&nbsp&nbsp <i class="fa fa-send-o"></i>');
})

$(".contact").mouseout(function(){
	$(this).text('gabrielfrnds@gmail.com');
})

//

let topBtn = document.getElementById("topBtn");

topBtn.addEventListener("click", topFunction)

function topFunction(){
	window.scrollTo({top: 0, behavior: 'smooth'});
}

$(".imgProject2").hover(function(){
	$(this).append('<div class="seeMore">View <br> Project</div>');
})

$(".imgProject2").mouseout(function(){
	$(".seeMore").remove();
});

$('.filter-button').click(function(){
	const value = $(this).attr('data-filter');

	if(value == 'all'){
		$('.eachProject').show('1000');
	}else{
		$('.eachProject').not('.'+value).hide('1000');
		$('.eachProject').filter('.'+value).show('1000');
	}
})

$('.filter-button').click(function(){
	$('.filter-button').removeClass('active');
	$(this).addClass('active');
})