/*$(".hamburguer").click(function(){
    $(".sidebar").toggle('slow');
});*/




document.querySelector(".hamburguer").addEventListener("click", ()=>
    document.querySelector(".container").classList.toggle("show-menu")
);

var text = '{"employees":['+
'{"firstName":"John","lastName":"Doe"},'+
'{"firstName":"John","lastName":"Doe"},'+
'{"firstName":"John","lastName":"Doe"}]}';

console.log(text);