$(document).ready(function(){
	$(window).on("scroll",function(){
  	var wn = $(window).scrollTop();
    if(wn > 120){
    	$(".navbar").css("background","#f2f2f2");
      $(".navbar").removeClass("mt-md-5");
      $(".navbar").css("transition","0.3s");
    }
    else{
    	$(".navbar").css("background","none");
      $(".navbar").addClass("mt-md-5");
    }
  });
});
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

/* circular scroll to top - start */
(function($) { "use strict";
$(document).ready(function(){"use strict";

  //Scroll back to top
  
  var progressPath = document.querySelector('.progress-wrap path');
  var pathLength = progressPath.getTotalLength();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
  progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
  progressPath.style.strokeDashoffset = pathLength;
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
  var updateProgress = function () {
    var scroll = $(window).scrollTop();
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength / height);
    progressPath.style.strokeDashoffset = progress;
  }
  updateProgress();
  $(window).scroll(updateProgress);	
  var offset = 50;
  var duration = 550;
  jQuery(window).on('scroll', function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.progress-wrap').addClass('active-progress');
    } else {
      jQuery('.progress-wrap').removeClass('active-progress');
    }
  });				
  jQuery('.progress-wrap').on('click', function(event) {
    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
  
  
});

})(jQuery);


/* navbar-new - START */
const html = document.documentElement;
const toggle = document.getElementById("toggle");
const circle = document.getElementById("bg-circle");
const navlinks = document.getElementById("navlinks")
const circleWidth = circle.clientWidth;

// Math calcul to get Height, Width, Diagonal and Circle Radius

const getVpdr = () => {
  const vph = Math.pow(html.offsetHeight, 2); // Height
  const vpw = Math.pow(html.offsetWidth, 2); // Width
  const vpd = Math.sqrt(vph + vpw); // Diagonal
  return vpd * 2 / circleWidth; // Circle radius
};

const openNavbar = () => {
  const openTimeline = new TimelineMax();
  openTimeline.to(".navbar-new", 0, { display: "flex" });
  openTimeline.to("#bg-circle", 1.5, { scale: getVpdr(), ease: Expo.easeInOut });
  openTimeline.staggerFromTo(".navbar-new ul li", 0.5, { y: 25, opacity: 0 }, { y: 0, opacity: 1 }, 0.1, 1);
};

const closeNavbar = () => {
  const closeTimeline = new TimelineMax();
  closeTimeline.staggerFromTo(".navbar-new ul li", 0.5, { y: 0, opacity: 1, delay: 0.5 }, { y: 25, opacity: 0 }, -0.1);
  closeTimeline.to("#bg-circle", 1, { scale: 0, ease: Expo.easeInOut, delay: -0.5 });
  closeTimeline.to(".navbar-new", 0, { display: "none" });
};

let isOpen = false;

toggle.onclick = function () {
  if (isOpen) {
    this.classList.remove("active");
    closeNavbar();
  } else {
    this.classList.add("active");
    openNavbar();
  }
  isOpen = !isOpen;
};
circle.onclick = function () {
  if (isOpen) {
    toggle.classList.remove("active");
    closeNavbar();
  } else {
    toggle.classList.add("active");
    closeNavbar();
  }
  isOpen = !isOpen;
};
navlinks.onclick = function () {
  if (isOpen) {
    toggle.classList.remove("active");
    closeNavbar();
  } else {
    toggle.classList.add("active");
    closeNavbar();
  }
  isOpen = !isOpen;
}


// On windows resize, recalcule circle radius and update

window.onresize = () => {
  if (isOpen) {
    gsap.to("#bg-circle", 1, { scale: getVpdr(), ease: Expo.easeInOut });
  }
};
/* Navabr - END */



/* GSAP */
gsap.registerPlugin(ScrollTrigger);
/* Lazy Load for sections */
var sections = gsap.utils.toArray('.section');
sections.forEach((section) => {
  gsap.from(section, {
    scrollTrigger: {
      trigger: section,
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 1
  });
})


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
    end: "bottom 30%",
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
    end: "bottom 30%",
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
    end: "bottom 30%",
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
    end: "bottom 30%",
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
    end: "center center",
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
    end: "center center",
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
    end: "center center",
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
    end: "center center",
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
    end: "center center",
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
    end: "center center",
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
    end: "center center",
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
    end: "center center",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x: -1000,
  duration: 1,
});
