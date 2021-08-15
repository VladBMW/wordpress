
let video = document.getElementById('video');
let btn = document.getElementById('btn');


btn.addEventListener("click" , function(){
    if (video.paused) {
        video.play()
      } else {
        video.pause()
      }
   
    btn.classList.toggle('opacity');
    
})
