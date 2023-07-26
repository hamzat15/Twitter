const edit = () => {
    edite = document.getElementById("edite");
    if (edite.style.display == "none") edite.style.display = "block";
    else edite.style.display = "none";

    back = document.getElementById("back");
    if (back.style.display == "none") back.style.display = "block";
    else back.style.display = "none";

    body = document.body;
    body.style.overflow = "hidden";
}
edit();

const delet = () => {
    if (edite.style.display == "none") edite.style.display = "block";
    else edite.style.display = "none";
    if (back.style.display == "none") back.style.display = "block";
    else back.style.display = "none";
  
    body.style.removeProperty("overflow");
  
  };
  delet();
  
  
  