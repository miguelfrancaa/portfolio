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
})