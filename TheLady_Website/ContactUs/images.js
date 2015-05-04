window.onload = initLinks;	//calls the function when the documents loads


var myPicx = new Array('images/bella_1.jpg','images/bella_2.jpg','images/bella_3.jpg','images/bella_4.jpg','images/bella_11.jpg'); //an array of images
var thisPic = 0;	//a var to controll the current picture in the array


function initLinks(){
	
	document.getElementById('prevImg').onclick = processPrevious;	//when this element with this ID is clicked then call that particular method
	document.getElementById('nextImg').onclick = processNext;
	//document.getElementById('myPicture').src = slideIt;
}

/*This method processes the previous picture*/
function processPrevious(){
	
	if(thisPic == 0){	//if the current pic is set to zero (which would be the last image) then set it to the length of the array
		thisPic = myPicx.length;
	}
	thisPic--; //move one image to the left of the array.
	document.getElementById('myPicture').src = myPicx[thisPic];	// get the source of the images
	return false;
}

/*This method processes the next picture*/
function processNext(){

	thisPic++;	// move one image to the right
	if(thisPic == myPicx.length){	//if the current pic is the same value as the length of the array then set it back to zero (which would be the 1st image).
		thisPic = 0;
	}
	
	document.getElementById('myPicture').src = myPicx[thisPic];
	return false;
}


/*====================================================================================================================================================================*/


/*	
function slideShow(thisPic){
									
	document.myPicture.src = myPicx[thisPic].src;
	thisPic += 1;
									
	if(thisPic < myPicx.length){
		window.setTimeout("slideShow(" + thisPic + ")",3000);
	}
}
							
function checkImages(){
	for (i = 0; i < myPicx.length; i++) {
		result = (result || myPicx[i].complete);
	}
								
	if (result) {
		slideShow(0);
	}else{
		window.setTimeout("checkImages()",1000);
	}
}

*/

