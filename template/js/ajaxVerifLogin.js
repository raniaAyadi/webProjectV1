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

function verifLogin() {

    var xhrComment = createXHR();

    var email2 = document.getElementById("email2").value;
    var password2 = document.getElementById("password2").value;


    xhrComment.onreadystatechange = function() {
        if(xhrComment.readyState == 4 && xhrComment.status == 200){
            var response = xhrComment.responseText;
 // if it is ok show a message: "xx added + xx".

            if (response="succes") {
                window.location.replace = 'index.php'
            }

            else
                document.getElementById("result").innerHTML=response+document.getElementById("result").innerHTML;
            document.getElementById("email2").value="";
            document.getElementById("password2").value="";

        }
    }

    xhrComment.open('GET','verif.php?'+"&email2="+email2+"&password2="+password2, true);
    xhrComment.send();
}

