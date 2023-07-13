
//Masquer et afficher la partie connecter via le button se connecter
const AfficherMasquer = () => {
  divInfo = document.getElementById("divcacher");
  if (divInfo.style.display == "none") divInfo.style.display = "block";
  else divInfo.style.display = "none";

   divInfo2 = document.getElementById("opt");
   if (divInfo2.style.display == "none") divInfo2.style.display = "block";
   else divInfo2.style.display = "none";

   body = document.body;
   body.style.overflow = "hidden";
};
AfficherMasquer();

//Masquer et afficher la partie inscription via le button s'inscrire
const inscription = () => {
  insc = document.getElementById("inscript");
  if (insc.style.display == "none") insc.style.display = "block";
  else insc.style.display = "none";

  forum = document.getElementById("forum");
  if (forum.style.display == "none") forum.style.display = "block";
  else forum.style.display = "none";
}
inscription();



const delet = () => {
  if (divInfo.style.display == "none") divInfo.style.display = "block";
  else divInfo.style.display = "none";
  if (divInfo2.style.display == "none") divInfo2.style.display = "block";
  else divInfo2.style.display = "none";

  body.style.removeProperty("overflow");

};
delet();

const delet2 = () => {
  if (insc.style.display == "none") insc.style.display = "block";
  else insc.style.display = "none";
  if (forum.style.display == "none") forum.style.display = "block";
  else forum.style.display = "none";

  body.style.removeProperty("overflow");

};
delete2();