<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Sample_18</title>
<style>
 .center
 {
 text-align:center;
 }
</style>
</head>
<body>
<jsp:include page="Header.html"/>
<jsp:include page="Desc.html"/>
<div class="center">
<textarea id="text_area" rows="20" cols="100">

</textarea>
</div>
<div class="center">
	<button onclick="Execute()">
	Execute Command
	</button>
	<button onclick="Clear()">
	Reset Form
	</button>
</div>
<div class="center">
	All Execution Will Appear below this Site
</div>
<hr/>
<h3 class="center">
Database Results :</h3>
<div id="results">

</div>
</body>
<script>
function Execute() {
  alert(document.getElementById('text_area').value + " is Executed ");
}
function Clear() {
	document.getElementById('text_area').value = '';
	  alert("Command is Cleared");
	}

</script>

</html>