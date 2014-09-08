
/* ------------------------------Navigation - Class "current"-------------------------------- */

    window.onload = function() {   
        var all_links = document.getElementById("main-navigation").getElementsByTagName("a"),  
            i=0, len=all_links.length,  
            full_path = location.href.split('#')[0]; //Ignore hashes  
      
        // Loop through each link.  
		var m = 0;
        for(i=0; i<len; i++) {  
            if(all_links[i].href.split("#")[0] == full_path) {  
                all_links[i].className += " current";  
				m = 1;
            }  
        }  
		if (m === 0) {
			all_links[0].className += " current";
		}
    }  

  