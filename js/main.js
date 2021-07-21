let logo = document.querySelector('.logo')
let scrollM = document.querySelector('.scroll')
let partScreen = window.innerHeight/4

$(document).ready(function () {
	$(function() {
	  $('html, body').animate({
	    scrollTop: 0
	  }, 1);
	});
  let fv = $("#fullview").fullView({
    dots: false,
    speed: 350,
    backToTop: true,
    onScrollEnd() {
    	switch(document.documentElement.scrollHeight - $(window).scrollTop()) {
    		case window.innerHeight:
    			logo.style.color = "white"
    			scrollM.style.top = (window.innerHeight*3 + (window.innerHeight - scrollM.offsetHeight)) + "px"
    			break;
    		case window.innerHeight * 2:
    			logo.style.color = "red"
    			scrollM.style.top = (window.innerHeight*2 + partScreen*2) + "px"
    			break;
    		case window.innerHeight * 3:
    			logo.style.color = "red"
    			scrollM.style.top = (window.innerHeight + partScreen) + "px"
    			break;
    		case window.innerHeight * 4:
    			logo.style.color = "white"
    			scrollM.style.top = 0
    			break;    		
    	}
    }
  });
});


setTimeout(() => document.body.classList.add('render'), 60);
const navdemos = Array.from(document.querySelectorAll('nav.demos > .demo'));
const total = navdemos.length;
const current = navdemos.findIndex(el => el.classList.contains('demo--current'));
const navigate = (linkEl) => {
	document.body.classList.remove('render');
	document.body.addEventListener('transitionend', () => window.location = linkEl.href);
};
navdemos.forEach(link => link.addEventListener('click', (ev) => {
	ev.preventDefault();
	navigate(ev.target);
}));
document.addEventListener('keydown', (ev) => {
	const keyCode = ev.keyCode || ev.which;
	let linkEl;
	if ( keyCode === 37 ) {
		linkEl = current > 0 ? navdemos[current-1] : navdemos[total-1];
	}
	else if ( keyCode === 39 ) {
		linkEl = current < total-1 ? navdemos[current+1] : navdemos[0];
	}
	else {
		return false;
	}
	navigate(linkEl);
});
imagesLoaded('.glitch__img', { background: true }, () => {
	document.body.classList.add('imgloaded');
});

let flagProf = true
let menu = document.querySelector('.menu');
let iMenu = document.querySelectorAll('.itemMenu');
let wrapperMenuProf = document.querySelector('.wrapperMenuProf')
let screenFClick = document.querySelector('.screenFClick')

function actionMenu() {
	if(flagProf) {
		wrapperMenuProf.style.right = 0
		scrollM.style.display = "none"
		screenFClick.style.display = "block"
		for(let i = 0; i < iMenu.length; i++) {
			iMenu[i].style.background = "red"
			iMenu[0].classList.add("rotateMenuI")
			iMenu[1].style.opacity = 0
			iMenu[2].classList.add("rotateMenuI2")
		}
		let current = $(window).scrollTop();
		$(window).scroll(function() {
		    $(window).scrollTop(current);
		});
	} else {
		wrapperMenuProf.style.right = "-20" + "vw"
		scrollM.style.display = "block"
		screenFClick.style.display = "none"
		for(let i = 0; i < iMenu.length; i++) {
			iMenu[i].style.background = ""
			iMenu[0].classList.remove("rotateMenuI")
			iMenu[1].style.opacity = 1
			iMenu[2].classList.remove("rotateMenuI2")
		}
		$(window).off('scroll');
	}
	flagProf = !flagProf;	
}

menu.onclick = function() {
	actionMenu()
}

screenFClick.onclick = function() {
	actionMenu()
}