 //Two button Slider
 i=0;
 var images = [];

 images[0] = '../Pics/pic1.jpg';
 images[1] = '../Pics/pic2.jpg';
 images[2] = '../Pics/pic5.jpeg';
 images[3] = '../Pics/pic7.jpeg';

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



i=0;
var images=[];
images [0]="";
images [1]="";
images [2]="";

    if(i<images.length-1){
        i++;
        document.slider.src=[i];
    }else{
        i=0;
        document.slider.pics=[i];
    }

    if(i<=0){
        i=images.length-1;
        document.slider.src=[i];
    }else{
        i--;
        document.slider.src=[i];
    }




i=0;
var images=[];
images[0]="";
if(i<images.length-1){
    i++;
    document.slider.src=[i];
}else{
    i=0;
    document.slider.src=[i];
}

if(i<=0){
    i=images.length-1;
    document.slider.src=[i];
}else{
    i--;
    document.slider.src=[i];
}






























