var show = true;
function trocaTexto(id) {
  var bMostrar1 = document.getElementById(id);
  if (show) {
    bMostrar1.innerHTML = "Mostrar menos";
    show = false;
  } else {
    bMostrar1.innerHTML = "Mostrar mais";
    show = true;
  }
}

var show2 = true;
function trocaTexto2(id) {
  var bMostrar1 = document.getElementById(id);
  if (show2) {
    bMostrar1.innerHTML = "Mostrar menos";
    show2 = false;
  } else {
    bMostrar1.innerHTML = "Mostrar mais";
    show2 = true;
  }
}

window.onload = function () {
  $(".painel button").click(function () {
    $(this).parent().toggleClass("painel-aberto");
  });

  var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
  var bannerAtual = 0;

  function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector(".banner-destaque img").src = banners[bannerAtual];
  }

  var timer = setInterval(trocaBanner, 3000);
  var controle = document.querySelector(".pause");

  controle.onclick = function () {
    if (controle.className == "pause") {
      clearInterval(timer);
      controle.className = "play";
    } else {
      timer = setInterval(trocaBanner, 3000);
      controle.className = "pause";
    }
    return false;
  };

  /*
	$('.novidades button').click(function(){
	$('.novidades').toggleClass('painel-aberto');
	});

	$('.mais-vendidos button').click(function(){
		$('.mais-vendidos').toggleClass('painel-aberto');
	});
*/
};
