jQuery(document).ready(function($){

  var terms = [
    "Beratung / Installation von lokalen Handwerkern",
    "Deutschlands Marktführer für Vermietung von Solaranlagen", 
    "optional mit Energiespeicher",
    "inkl. Versicherung & Instandhaltung",
    "Keine Investitionskosten",
    "Nur maßgeschneiderte Anlagen"
  ];

  function rotateTerm() {
    var ct = $("#dz4_rotate_term").data("term") || 0;
    $("#dz4_rotate_term").data("term", ct == terms.length -1 ? 0 : ct + 1).text(terms[ct]).fadeIn()
                .delay(1800).fadeOut(200, rotateTerm);
  }
  $(rotateTerm);


});