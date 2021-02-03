const myHeading = document.getElementById('test_1');
console.log("Console Test");
myHeading.textContent = 'H1 Test!';
var xmlHttp = new XMLHttpRequest();
// xmlHttp.open( "GET", '/view/api', false ); // false for synchronous request
// xmlHttp.send( null );
xmlHttp.open( "GET", '/view/api', false ); // false for synchronous request
xmlHttp.send( null );
console.log(xmlHttp.responseText);
function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'virtual-pinboard.test/view/api', false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}