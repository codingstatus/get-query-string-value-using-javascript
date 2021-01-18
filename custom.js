 document.getElementById('getValue').onclick=function(){
 var id = getQueryStringValue('id');
 var language = getQueryStringValue('language');

 document.getElementById("result").innerHTML = "<b>Id : </b>"+id+"<br>"+" <b>language: </b>"+language;

 };
	
	
var getQueryStringValue = function(parameter) {
    var currentPageURL = window.location.search.substring(1);
    var queryString = currentPageURL.split('&');
    var getParameter;
    var i;

    for (i = 0; i < queryString.length; i++) {
        getParameter = queryString[i].split('=');

        if (getParameter[0] === parameter) {
            return getParameter[1] === undefined ? true : decodeURIComponent(getParameter[1]);
        }
    }
};