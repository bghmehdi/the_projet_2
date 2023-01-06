import './bootstrap';

(function() {
  console.clear();
  
  const follower = document.querySelector('#shine');
  
  let posX = 0;
  let posY = 0;
  let mouseX = 0;
  let mouseY = 0;
  
  const ease = 0.1;
  
  function easeTo() {    
    const followerBounds = follower.getBoundingClientRect();
    
    const dX = mouseX - (followerBounds.left + 65);
    const dY = mouseY - (followerBounds.top + 65);
    
    posX += dX * ease;
    posY += dY * ease;
  }
  
  function update() {
    easeTo();
    follower.style.transform = `translate3d(${posX}px, ${posY}px, 0)`;  
    requestAnimationFrame(update);
  }
  
  function setCoords(e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
  }
  
	document.onmousemove = setCoords;
  update();
})();
