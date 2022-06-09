
window.addEventlistener('load',function(){
    document.getElementByTagName("texto").addEventListener("keyup", () =>{
        if((document.getElementByTagName("texto").value.length)>=1){
            fetch(`/view/${document.getElementByTagName("texto").value}`, {method:'get'})
            .then(response => response.text() )
            .then(html => {document.getElementByTagName("resultados").innerHTML=html})
        }else{
            document.getElementByTagName("resultados").innerHTML = "" 
        }
    })
});

