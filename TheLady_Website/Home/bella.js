Window.onload = choosePic;

var myPicx = new Array("bella_1.jpg","bella_2.jpg","bella_3.jpg",
					"bella_4.jpg","bella_5.jpg","bella_6.jpg",
					"bella_7.jpg","bella_8.jpg","bella_9.jpg",
					"bella_10.jpg","bella_11.jpg");
					
					
					
function choosePic(){
	
	randomNum = Math.floor((Math.random() * myPicx.length));
	document.getElementById("myPicture").src = myPicx[randomNum];
}