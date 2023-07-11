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

const delet = () => {
  if (divInfo.style.display == "none") divInfo.style.display = "block";
  else divInfo.style.display = "none";
  if (divInfo2.style.display == "none") divInfo2.style.display = "block";
  else divInfo2.style.display = "none";

  body.style.removeProperty("overflow");

};
delet();
