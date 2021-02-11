
//import interact from 'https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js';
import interact from './interactjs';

const myHeading = document.getElementById('test_1');
console.log("Console Test");
console.log("resources");
myHeading.textContent = 'H1 Test!';
var xmlHttp = new XMLHttpRequest();
let notes = [];
/*
let testObject = {"id":1,"text":"test1","pos_x":801,"pos_y":601};
let testObject2 = {"id":2,"text":"test2","pos_x":800,"pos_y":600};
notes = [testObject, testObject2];
*/
xmlHttp.open( "GET", '/view/api', false ); // false for synchronous request
xmlHttp.send( null );
notes = JSON.parse(xmlHttp.responseText);

document.getElementById('save_test_1').onclick = function() {
    myHeading.textContent = 'saveNotes';
    xmlHttp.open( "POST", '/view/api', false ); // false for synchronous request
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttp.send(JSON.stringify(notes));
}

document.getElementById('delete_test_1').onclick = function() {
    myHeading.textContent = 'saveNotes';
    xmlHttp.open( "DELETE", '/view/api', false ); // false for synchronous request
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlHttp.send(2);
}

xmlHttp.open( "GET", '/view/api', false ); // false for synchronous request
xmlHttp.send( null );
console.log(xmlHttp.responseText);

// copied

const position = { x: 0, y: 0 }

interact('.draggable').draggable({
  listeners: {
    start (event) {
      console.log(event.type, event.target)
    },
    move (event) {
      position.x += event.dx
      position.y += event.dy

      event.target.style.transform =
        `translate(${position.x}px, ${position.y}px)`
    },
  }
})