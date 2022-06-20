/* gallery section */
const galleryRows = document.querySelectorAll('.gallery-row');
galleryRows.forEach((el, index) => {
  
  let direction;
  
  if(index%2 == 1) {
    direction = '50%';
  }
  else {
    direction = '-50%';
  }
  
  gsap.to(el, {
    x: direction,
    scrollTrigger: {
      trigger: el,
      start: '30% bottom',
      end: () => '200px 50%',
      scrub: 1,
      markers: false,
      invalidateOnRefresh: true,
      anticipatePin: 1,
      pin: false
    }
})
});


gsap.from(".gsap2", {
  scrollTrigger: {
    trigger: ".gsap2",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: -1000,
  duration: 0.5
});
gsap.from(".gsap3", {
  scrollTrigger: {
    trigger: ".gsap3",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: 1000,
  duration: 0.5
});
gsap.from(".gsap4", {
  scrollTrigger: {
    trigger: ".gsap4",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  scale: .5,
  duration: 0.5
});
gsap.from(".gsap5", {
  scrollTrigger: {
    trigger: ".gsap5",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  scale: 0.1,
  duration: 1,
});

gsap.from(".gsap6", {
  scrollTrigger: {
    trigger: ".gsap6",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  scale: 0.2,
  duration: 1,
});
gsap.from(".gsap7", {
  scrollTrigger: {
    trigger: ".gsap7",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: 1000,
  duration: 1,
});
gsap.from(".img-2", {
  scrollTrigger: {
    trigger: ".img-2",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: 1000,
  duration: 1,
});
gsap.from(".img-3", {
  scrollTrigger: {
    trigger: ".img-3",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: 6000,
  duration: 1,
});
gsap.from(".img-4", {
  scrollTrigger: {
    trigger: ".img-4",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: 3000,
  duration: 1,
});
gsap.from(".img-5", {
  scrollTrigger: {
    trigger: ".img-5",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  scale: .5,
  duration: 1,
});
gsap.from(".img-6", {
  scrollTrigger: {
    trigger: ".img-6",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: -1000,
  duration: 1,
});
gsap.from(".img-7", {
  scrollTrigger: {
    trigger: ".img-7",
    start: "top bottom",
    end: "bottom bottom",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: -1000,
  duration: 1,
});
