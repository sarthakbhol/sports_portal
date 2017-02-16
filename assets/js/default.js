var httpRequest = createxmlhttprequest();
var info=null;
var category=null;
//var event=null;
var m=1;
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
//info[category][m]['male']['tsize']

//$("body").css("overflow", "hidden");

$(document).ready(function(){
   $('#cat_choice').hide();
   $('#prev_result').hide();
   $('#new_team_form').hide();
});



$(document).ready(function(){
	loadInfo();
});
var eventb=document.getElementById("event_button");
var eventf=document.getElementById("eventf");
 
 //eventb.querySelector("#abc").textContent="abccc";
console.log(eventb.getElementsByTagName("a").textContent);

function getInfo(cat)
{
	$('#event_choice').show();
    $('#cat_choice').hide();
    $('#prev_result').hide(); 

   $('#new_team_form').hide();
	$("#last").fadeOut(800);
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
    return function(){
    	$('#event_choice').hide();
    	$('#cat_choice').fadeIn(1800);
      e=r;
    	//console.log(info[category][event]);
    }
}

function event_reg(eve)
{
   
}

function prevteam()
{
  var prev_team=document.getElementById("prev_id_submit").value;
  document.getElementById("prev_id_submit").value="";
  $('#cat_choice').hide();
  $('#prev_result').fadeIn(1800);
}

function newteam()
{
  $('#cat_choice').hide();
  $('#new_team_form').fadeIn(1800);
  fillbox();

}
function rm()
{
    m=1;
    console.log(m);
    fillbox();

}
function rf()
{
    m=0;
    console.log(m);
    fillbox();
}

function fillbox()
{
  var layout=document.getElementById("newteam_box");
  while (layout.hasChildNodes()) {
         layout.removeChild(layout.lastChild);
    }
    var size;
    var y=document.getElementById("newteam_box");
  if (m)
  {
    size=info[category][e]['male']['tsize'];
    console.log("male");

  }
  else
  {
    size=info[category][e]['female']['tsize'];
  }
   first=document.getElementById("firstbox");
  second=document.getElementById("secondbox");
  console.log(first);
  console.log(document.getElementById("secondbox"));
  var i=0;
  for(i=0;i<size;i++)
  {
    if(i%2 == 0)
    {
      var temp=first.cloneNode(true);
      temp.id="d"+i;
      temp.placeholder="Del No.";
      y.appendChild(temp);
    }
    else
    {
      var temp=second.cloneNode(true);
      temp.id="d"+i;
      temp.placeholder="Del No.";
      y.appendChild(temp);

    }
    temp.style.display = "block";
  }

}

function new_submit()
{
  var j={};
  if (m)
  {
    size=info[category][e]['male']['tsize'];
    console.log("male");

  }
  else
  {
    size=info[category][e]['female']['tsize'];
  }
  j["category"]=category;
  j["event"]=e;
  j["m"]=m;
  console.log(j);
  var s=[];
    for (var i = 0; i < size; i++) {
            var temp=document.getElementById("d"+i);
            //console.log(temp.getElementsByTagName("input")[0].value);
          s.push(temp.getElementsByTagName("input")[0].value.trim());
    }
    s = s.filter( function( item, index, inputArray ) {
           return inputArray.indexOf(item) == index;
    });
    if(s.length == 1)
    {
        if(s[0] == "")
        {
            alert("Atleast one field is required !!!");
            return;
        }
    }
    j["id"]=s;
    console.log(JSON.stringify(j));
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
