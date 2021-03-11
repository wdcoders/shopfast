const siteMenu = document.getElementById("siteMenu");
const siteMenuBars = document.getElementById("siteMenuBars");
const siteMenuClose = document.getElementById("siteMenuClose");
const siteMenuHas = document.querySelector('.site-menu-has'); 
const siteMenuToggle = document.querySelectorAll('.site-menu-toggle');

const productsFilter = document.getElementById('productsFilter');
const productFilterToggle = document.getElementById('productFilterToggle');
const productFilterIcon = document.getElementById('productFilterIcon');


// STICKY HEADER
$(window).scroll(function(){
    let sc = $(window).scrollTop();
    if(sc > 150){
        $("#top-nav").addClass("site-menu-fix");
    }else{
        $("#top-nav").removeClass("site-menu-fix");
    }
})

// product filter
if(productFilterToggle){
    productFilterToggle.addEventListener("click", function(e){
        if(productsFilter.classList.contains('in')){
            productsFilter.classList.remove('in');
        }else{
            productsFilter.classList.add('in');
        }
    });
}

if(productFilterIcon){
    productFilterIcon.addEventListener("click", function(e){
        if(productsFilter.classList.contains('in')){
            productsFilter.classList.remove('in');
        }else{
            productsFilter.classList.add('in');
        }
    });
}

siteMenuBars.addEventListener("click", function(e){
    if(siteMenu.classList.contains('in')){
        siteMenu.classList.remove('in');
    }else{
        siteMenu.classList.add('in');
    }
})

siteMenuClose.addEventListener("click", function(e){
    siteMenu.classList.remove('in');
});


for (let index = 0; index < siteMenuToggle.length; index++) {
    

    siteMenuToggle[index].addEventListener("click", function(e){
        e.preventDefault();
        console.log(e)
        let getParent = e.target.parentElement;
    
        if(e.target.parentElement.classList.contains('site-menu-toggle')){
            if(getParent.parentElement.classList.contains('in')){
                getParent.parentElement.classList.remove('in');
            }else{
                getParent.parentElement.classList.add('in');
            }
        }else{
            if(getParent.classList.contains('in')){
                getParent.classList.remove('in');
            }else{
                getParent.classList.add('in');
            } 
        }
    
    });
    
}

// brand slider
const brandSlider = document.getElementById("brandSlider");
if(brandSlider){
    new Glide(brandSlider, {
        type: 'carousel',
        startAt: 0,
        perView: 5,
        hoverpause: false,
        autoplay: 2000,
        animationDuration: 800,
        animationTimingFun: 'linear',
        breakpoints: {
            1200: {
                preView: 1
            },
            992: {
                preView: 2
            },
            768: {
                preView: 2
            },
            576: {
                preView: 3
            }
        }
    }).mount();
}
