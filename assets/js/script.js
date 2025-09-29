(function(){
  const target = new Date();
  target.setMonth(target.getMonth()+1);
  function update(){
    const now = new Date();
    const diff = target - now;
    if(diff<=0) return;
    const days = Math.floor(diff/86400000);
    const hours = Math.floor((diff%86400000)/3600000);
    const mins = Math.floor((diff%3600000)/60000);
    const secs = Math.floor((diff%60000)/1000);
  }
  setInterval(update,1000);
  update();
})();