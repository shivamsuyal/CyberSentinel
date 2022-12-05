document.body.scrollTop = 0;document.documentElement.scrollTop = 0;

particlesJS.load('particles-js', './jsons/particle.json', function() {
    console.log('callback - particles.js config loaded');
});

// gsap.registerPlugin(MotionPathPlugin)
gsap.registerPlugin(ScrollTrigger)
gsap.config({trialWarn: false})

var mhSVG = document.getElementById("mhSVG")
const nav = document.querySelector("nav")


const navTime = gsap.timeline({
    onComplete : ()=>{
        mhLinks1.style.pointerEvents = "all"  
    },
    onReverseComplete : ()=>{
        mhLinks1.style.pointerEvents = "none"  
    }
})
.fromTo("#mhLinks1",{zIndex : -50,opacity : 0 },{zIndex : 2, opacity : 1,duration : 0.5})
.to("#mhLinks2",{clipPath : "circle(50% at 50%)",duration : 0.5,ease : Power0.easeNone})
.to("#mhLinks2 a span",{height : "100%",duration : 1,ease : Power4.easeNone,delay : 0.2,stagger : 0.1}).pause()




mhSVG.onclick = ()=>{
    if(mhSVG.dataset.open == "true"){
        mhSVG.dataset.open = "false"
        navTime.reverse()
    }else{
        mhSVG.dataset.open = "true"
        navTime.play()
    }
} 




gsap.timeline()
    .fromTo("#all path",{
        strokeDasharray : (i,t)=>{
            return t.getTotalLength()
        },
        strokeDashoffset : (i,t)=>{
            return t.getTotalLength()
        }
    },{
        duration : 4,
        strokeDashoffset : 0,
        ease : Power3.easeInOut
    })
    .to("#page1Txt p",{opacity : 1,duration : 2,stagger : 0.6},"<2")
    .to("#all",{opacity : 0,duration : 1})
    .to("#shieldSVG1,#sen",{opacity : 1,duration : 1},"<")
    .fromTo("#scrollD path",{
        strokeDasharray : (i,t)=>{
            return t.getTotalLength()
        },
        strokeDashoffset : (i,t)=>{
            return t.getTotalLength()
        }
    },{
        duration : 2,
        strokeDashoffset : 0,
        ease : Power2.easeInOut
    })
    .from("#scrollD path",{fill : "transparent",duration : 0.5})
    .to("#scrollD",{y : 10,duration : 0.7,yoyoEase : Power4.easeNone,yoyo : true,repeat : -1})
    

gsap.timeline({
    scrollTrigger : {
        trigger : "#shieldSVG1",
        endTrigger : "#page2 #shieldDiv",
        end : "top center",
        start : "center center",
        // markers : true,
        scrub : true,
        toggleActions : "restart pause reverse pause",
    }
    })
    .to("#shieldSVG1",{
        y : 200 + shieldDiv.offsetTop + shieldSVG1.getBoundingClientRect().height * 2,
        scale : 1.2,
        duration : 10,
    })
    .from("#tlogo,#nTops p",{opacity : 0 , duration : 1})
    .to("#scrollD",{opacity : 0,duration : 1},"<")
    .to("#page2 .title,#page2 .pContent",{opacity : 1,duration : 2,stagger : 1},"<")
    .to("#shieldSVG1 image",{opacity : 1,duration : 1})

gsap.timeline({
    scrollTrigger : {
        trigger : ".title1",
        start : "+=25% center",
        // markers : true,
        scrub : true,
        pin : "#page4",
        pinType : 'fixed',
        toggleActions : "restart pause reverse pause",
    }
})
    .from(".title1",{y : "50vh",duration : 10})
    .from(".title1 h1",{fontSize : "8rem",duration : 10},"<")
    .to("#gyan p",{opacity : 1,duration : 1},"5")
    .to(".hid1",{opacity : 1,duration : 3,stagger: 1},"<1")





window.onload = ()=>{
    new Splide('.splide',{
        perPage : 3,
        breakpoints: {
            661 : {
                perPage : 2,
            },
            574: {
                perPage: 1,
            },
      }
    }).mount()
}

window.addEventListener('scroll',function(e) {
    // console.log( document.documentElement.scrollTop)
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        toTop.style.opacity = ".5"
        return
    }
    toTop.style.opacity = "0"
});

