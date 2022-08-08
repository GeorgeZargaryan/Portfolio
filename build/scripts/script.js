var aboutBtn = document.getElementById('aboutBtn')

aboutBtn.addEventListener("click", ()=>{
    window.scrollTo(0, document.body.scrollHeight);
})

window.onload = ()=> {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}