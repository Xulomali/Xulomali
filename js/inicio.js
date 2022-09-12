document.documentElement.className="js";
	var supportsCssVars=function(){
	var e,t=document.createElement("style");
	return t.innerHTML="root: { --tmp-var: bold; }",
	document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),
	t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");
	
	const app = document.getElementById('app');

window.onload = function() {
  document.addEventListener("contextmenu", function(e){
    e.preventDefault();
  }, false);
} 

app.addEventListener('click', () => {
  alert('No esta permitido el click derecho')
});