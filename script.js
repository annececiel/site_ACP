$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel("pause");
  
    // Click on the button to start sliding 
    $("#myBtn").click(function(){
      $("#myCarousel").carousel("cycle");
    });
  
    // Click on the button to stop sliding 
    $("#myBtn2").click(function(){
      $("#myCarousel").carousel("pause");
    });
    
      // Enable Carousel Indicators
      $(".item1").click(function(){
      $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
      $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
      $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
      $("#myCarousel").carousel(3);
    });
      
    // Enable Carousel Controls
    $(".left").click(function(){
      $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
      $("#myCarousel").carousel("next");
    });
  });
/*
$('#submit').click(function(e){
  e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

  var name = encodeURIComponent( $('#name').val() ); // on sécurise les données
  var msg = encodeURIComponent( $('#msg').val() );

  if(name != "" && msg != ""){ // on vérifie que les variables ne sont pas vides
      $.ajax({
          url : "includes/form.php", // on donne l'URL du fichier de traitement
          type : "POST", // la requête est de type POST
          data : "name=" + name + "&msg=" + msg // et on envoie nos données
      });

     $('#msg').append("<p>" + name + " dit : " + msg + "</p>"); // on ajoute le message dans la zone prévue
  }
});*/

