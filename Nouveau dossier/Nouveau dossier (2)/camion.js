









 
        $('#ppp').click(function (event) {
        $("#font").toggleClass("box");
        });
      

      $('#suprime').click(function (event) {
        $(".choix").toggleClass("show-pass-reset");
        $("#confirme").toggleClass("show-pass-star");
        $("#suprime").toggleClass("show-pass-star");
        $(".suprime1").toggleClass("show-pass-reset");

        $("#font").removeClass("box88");
        
        $(".soumenu").toggleClass("show-pass-star");
        });


        $('#suprimenon').click(function (event) {
        $(".choix").toggleClass("show-pass-reset");
        $("#confirme").removeClass("show-pass-star");
        $("#suprime").removeClass("show-pass-star");
        $(".suprime1").removeClass("show-pass-reset");
        $(".soumenu").removeClass("show-pass-star");
        
        $("#font").removeClass("box");
        document.getElementById("ppp").checked = false;
        
        });
        //click ur supprimer d'un article 
        
        $('.suprimer').click(function (event) {
        $("#font").removeClass("box88");
        

        $(".suprimer_").removeClass("show-pass-star");
        $("#font").toggleClass("box88");
         }); 
        

        //annuler une supression
 
        $('#annule_suprime_').click(function (event) {
        $(".suprimer_").removeClass("show-pass-star");
        $("#font").toggleClass("box88");
        });
      









