window.onload = checkImages;

var myPictures = new Array;
							
myPictures[0] = new Image;
myPictures[0].src = "images/bella_11.jpg";
myPictures[1] = new Image;
myPictures[1].src = "images/bella_1.jpg";
myPictures[2] = new Image;
myPictures[2].src = "images/bella_2.jpg";
myPictures[3] = new Image;
myPictures[3].src = "images/bella_3.jpg";
myPictures[4] = new Image;
myPictures[4].src = "images/bella_4.jpg";
							
							
function slideShow(picture){
									
	document.myPicture.src = myPictures[picture].src;
	picture += 1;
									
	if(picture < myPictures.length){
		window.setTimeout("slideShow(" + picture + ")",3000);
	}
}
							
function checkImages(){
	for (i = 0; i < myPictures.length; i++) {
		result = (result || myPictures[i].complete);
	}
								
	if (result) {
		slideShow(0);
	}else{
		window.setTimeout("checkImages()",1000);
	}
}