var swiper=new Swiper(".mySwiper",{
  slidesPerView: 3,
  spaceBetween:30,
  slidesPerGroup:3,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  }
});
const num=document.querySelectorAll(".num");
    const speed=200;

  num.forEach((container)=>{
  const animate=()=>{
    const target= +container.getAttribute("num");
    const data= +container.innerText;
    const time=target / speed;

    if(data < target){
      container.innerText=Math.ceil(data + time);
      setTimeout(animate,1);
      }
    }
        animate();
    })