/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function showlayer(layer) {
    var myLayer = document.getElementById(layer);
    if (myLayer.style.display == "none" || myLayer.style.display == "") {
        myLayer.style.display = "block";
    } else {
        myLayer.style.display = "none";
    }
}
