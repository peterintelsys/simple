function showid(el){

  var elem = document.getElementById(el);

	elem.classList.toggle('active');

	//display(elem);
}


function display(el){

	if (el.style.display === 'block'){
  		el.style.display = 'none';
  	}else{
  		el.style.display = 'block';
  	}

}

function test(){
var el1 = document.getElementById("navi");
el1.classList.toggle('active-flex');
}

function change(){

  var el = document.getElementById("top-bar");
  var el1 = document.getElementById("navi");

  el.classList.toggle('change');
  setTimeout(test, 300);
  
}

function displayTrans(el){
	if (el.style.maxHeight){
      el.style.maxHeight = null;
    } else {
      el.style.maxHeight = el.scrollHeight + "px";
    }

}


var accordianBtn = document.querySelectorAll('.accordian-header');

for (var i = 0; i < accordianBtn.length; i++) {

  accordianBtn[i].addEventListener("click", function(){ 

  	this.classList.toggle('accordian-header-active');

  	var panel = this.nextElementSibling;

  	panel.addEventListener('click', displayTrans(panel));

   });
}



