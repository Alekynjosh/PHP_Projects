var a=document.getElementById('donor');
var b=document.getElementById('recipient');
a.addEventListener('click',function(){
    a.style.display="inline";
    b.style.display="none";
    a.className = "text-center"
    document.getElementById('donor_form').style.display="";
});
b.addEventListener('click',function(){
    a.style.display="none";
    b.style.display="inline";
    document.getElementById('donor_form').style.display="none";
    document.getElementById('recipient_form').style.display="";
});
