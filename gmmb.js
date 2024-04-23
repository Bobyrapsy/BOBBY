var navLinks = document.getElementById("navLinks")
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }



    window.addEventListener('scroll', function() {
        var nav = document.querySelector('nav');
        var subHeader = document.querySelector('.sub-header');
    
        if (window.scrollY > subHeader.offsetTop) {
            nav.classList.add('navbar_fixed');
        } else {
            nav.classList.remove('navbar_fixed');
        }
    });
    
    
    
     

    