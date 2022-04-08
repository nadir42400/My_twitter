var dark = document.querySelector("#dark");
var blanc = document.querySelector("#light");
var textarea = document.querySelector('#textarea');
var publish = document.querySelector("#publier");
console.log(textarea);

light.addEventListener("click",function(){
	document.body.style.backgroundColor = "#FFFFFF"; 
});
dark.addEventListener("click",function(){
	document.body.style.backgroundColor = "#212529";
});

let logout =  document.querySelector('#logOut');

logout.addEventListener("click", () => {
    
       if(confirm("Voulez-vous vous déconnecter")) {
        header('Location: page_de_connexion.php');
    }else {
     
    location.reload();
    }
});
let text = document.querySelector(".flex").innerText;

let following = document.querySelector('.following');
following.addEventListener('click', () => {
    document.querySelector('#liste_following').innerHTML = text;
});