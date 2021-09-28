 //Two button Slider
 i=0;
 var images = [];

 images[0] = '../Pics/pic1';
 images[1] = '../Pics/pic2';
 images[2] = '../Pics/pic3';
 images[3] = '.../Pics/pic4';

function slider() {

     if(i < images.length - 1){
         i++;
         document.slide.src = images[i];
     }else{
         i=0;
         document.slide.src = images[i];
 }
}
function slider2() {
     if(i <= 0){
         i=images.length -1;
         document.slide.src = images[i];
     }else{
         i--;
         document.slide.src = images[i];
 }
}