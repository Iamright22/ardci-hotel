// banner navigation function

function bannerCoffee(){ //Suites
    document.getElementById('banner-bg').style.background='url(assets/image/banner-suites.jpg) no-repeat center -150px / cover';
    document.getElementById('lux-hotel-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('resto-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('gym-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('pool-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('cafe-title-banner').style.display='block';

    setTimeout( ()=>{
        document.getElementById('cafe-title-banner').style.opacity='1';
    }, 100); 
}
function bannerResto(){ //Dining
    document.getElementById('banner-bg').style.background='url(assets/image/banner-dining.jpg) no-repeat center -350px / cover';
    document.getElementById('lux-hotel-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('cafe-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('gym-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('pool-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('resto-title-banner').style.display='block';

    setTimeout( ()=>{
        document.getElementById('resto-title-banner').style.opacity='1';
    }, 100);
}
function bannerGym(){ //Function Spaces
    document.getElementById('banner-bg').style.background='url(assets/image/banner-function-spaces.jpg) no-repeat center center / cover';
    document.getElementById('lux-hotel-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('cafe-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('resto-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('pool-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('gym-title-banner').style.display='block';

    setTimeout( ()=>{
        document.getElementById('gym-title-banner').style.opacity='1';
    }, 100); 
}
function bannerPool(){ //Wellness Center
    document.getElementById('banner-bg').style.background='url(assets/image/banner-wellness-center.jpg) no-repeat center -127px / cover';
    document.getElementById('lux-hotel-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('cafe-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('resto-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('gym-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('pool-title-banner').style.display='block';

    setTimeout( ()=>{
        document.getElementById('pool-title-banner').style.opacity='1';
    }, 100); 
}

// end banner navigation