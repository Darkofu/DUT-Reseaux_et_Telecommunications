var prixTotal=8 ;
var prixSomme=0 ;
document.write("Dans prog principal avant affPrix prixTotal=",prixTotal,"<br/>") ;
document.write("Dans prog principal avant affPrix prixSomme=",prixSomme,"<br/>") ;
affPrix(10,20) ;
document.write("Dans prog principal apres affPrix prixTotal=",prixTotal,"<br/>") ;
document.write("Dans prog principal apres affPrix prixSomme=",prixSomme,"<br/>") ;
function affPrix(prix1, prix2) {
var prixSomme=prix1 +prix2 ;
document.write("Dans affPrix() prixTotal=",prixTotal,"<br/>") ;
document.write("Dans affPrix() prixSomme=",prixSomme,"<br/>") ;
prixTotal=prixSomme ;
}