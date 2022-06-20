gsap.from(".gsap1", {
  scrollTrigger: {
    trigger: ".gsap1",
    start: "top bottom",
    end: "bottom 30%",
    toggleActions: "play reset play reset",

  },
  x: -1000,
  duration: 0.5
});
gsap.from(".gsap2", {
  scrollTrigger: {
    trigger: ".gsap2",
    start: "top bottom",
    end: "bottom 50%",
    toggleActions: "play reset play reset",
    scrub:1,
  },
  scale: 0,
  duration: 0.5
});
gsap.from(".gsap3", {
  scrollTrigger: {
    trigger: ".gsap3",
    start: "top bottom",
    end: "bottom 50%",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  scale: 0,
  duration: 0.5
});