
/* ------------------------------Navigation - Class "current"-------------------------------- */

    window.onload = function() {   
        var all_links = document.getElementById("main-navigation").getElementsByTagName("a"),  
            i=0, len=all_links.length,  
            full_path = location.href.split('#')[0]; //Ignore hashes  
      
        // Loop through each link.  
        for(i=0; i<len; i++) {  
            if(all_links[i].href.split("#")[0] == full_path) {  
                all_links[i].className += " current";  
            }  
        }  
    }  
    
    
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-54557655-1', 'auto');
    ga('send', 'pageview');

  