var httpRequest = createxmlhttprequest();
var info=null;
var category=null;
var event=null;
function createxmlhttprequest()
{
    var httpRequest;
    
    if(window.ActiveXObject)
        {
            try
                {
                    httpRequest=new ActiveXObject("Microsoft.XMLHTTP");
                }
            catch(e)
                {
                    httpRequest=false;
                }
        }
    else
        {
            try
                {
                    httpRequest=new XMLHttpRequest();
                }
            catch(e)
                {
                    httpRequest=false;
                }
        }
    if(!httpRequest)
        {
            alert("Cannot Create HTTP request : UPDATE YOUR BROWSER ");
        }
    else
        {
            return httpRequest;
        }
}

function addListener(element, eventName, handler) {
  if (element.addEventListener) {
    element.addEventListener(eventName, handler, false);
  }
  else if (element.attachEvent) {
    element.attachEvent('on' + eventName, handler);
  }
  else {
    element['on' + eventName] = handler;
  }
}


$(document).ready(function(){
	loadInfo();
});
var eventb=document.getElementById("event_button");
var eventf=document.getElementById("eventf");
 
 //eventb.querySelector("#abc").textContent="abccc";
console.log(eventb.getElementsByTagName("a").textContent);

function getInfo(cat)
{
	$("#last").hide(800);
    while (eventf.hasChildNodes()) {
         eventf.removeChild(eventf.lastChild);
    }
    category=cat;
    console.log(info);
    var size=info[cat].length;
    for(var i=0;i<size;i++)
    {
        var temp=eventb.cloneNode(true);
        temp.id="b"+i;
        temp.querySelector("#abc").textContent=info[cat][i]['name'];
        
        temp.onclick=abc(i);
        eventf.appendChild(temp);

    }
	
}
function abc(r)
{
    return event_reg(r);
}

function event_reg(eve)
{
   console.log(eve);
   event=eve;
   console.log(info[category][parseInt(eve)]['male']);
}



function loadInfo() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {

      info = JSON.parse(this.responseText);
      console.log(info);
      console.log(info['swimming'].length);
    }
  };
  xhttp.open("GET", "info.php?t=" + Math.random(), true);
  xhttp.send();
}
