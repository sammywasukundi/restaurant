// function dire(){
//     var miss=document.getElementById("pwd").value;
//     if(miss.length>0 && miss.length<5){
//         alert(miss+"le mot de passe doit avoir aumoins 6 caractères");
//     }
//     else if(miss.length>5 && miss.length<10){
//         document.location.href="seances/vrai_index.html";
//     }
// }
function edit(){
    var pwd=document.getElementById("pwd").value;
    if(pwd.length > 0 && pwd.length < 5){
        document.getElementById("mot").innerHTML="faible";
    }
    else if(pwd.length >= 5 && pwd.length < 9){
        document.getElementById("mot").innerHTML="moyen";
    }
    else if(pwd.length >= 10 && pwd.length < 15){
        document.getElementById("mot").innerHTML="long";
    }
    // else{
    //     document.getElementById("mot").innerHTML="très long";
    // }
}
