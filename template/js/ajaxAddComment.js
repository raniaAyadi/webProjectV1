/**
 * Created by asus on 20/01/2017.
 */
function createXHR()
{
    if (window.XMLHttpRequest)
    {
        return new XMLHttpRequest();

    }
}




/* -------------------------- */
/* INSERT */
/* -------------------------- */

function insertComment() {

    var xhrComment = createXHR();

    var comment = document.getElementById("comment").value;
    var firstName = document.getElementById("firstName").value;
    var clientId = document.getElementById("clientId").value;
    var maisonId = document.getElementById("maisonId").value;


    xhrComment.onreadystatechange = function() {
        if(xhrComment.readyState == 4 && xhrComment.status == 200){
            var response = xhrComment.responseText;
// if it is ok show a message: "xx added + xx".
            document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;

            document.getElementById("comment").value="";
            document.getElementById("firstName").value="";

        }
    }

    xhrComment.open('GET', 'actionAddComment.php?'+"comment="+comment+"&firstName="+firstName+"&clientId="+clientId+"&maisonId="+maisonId, true);
    xhrComment.send();

}

