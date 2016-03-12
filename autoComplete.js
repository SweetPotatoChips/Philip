function compVar() {
    var availible = [
        "Warwick",
        "Leamington",
        "Cvoentry"
    ];
  $("#tags").autocomplete({
      source: availible
  });  
};