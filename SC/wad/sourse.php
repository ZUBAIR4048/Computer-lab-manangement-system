<!DOCTYPE html>
<html lang="en">
<head>
<title>Reg Expression</title>
<link rel="stylesheet"
href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script
src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<style>
body{
margin-top: 30px;
}
.label {
margin: 0px 3px;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="alert alert-danger hide" id="alert-box"></div>
<div class="form-group">
<label for="input-text">Text</label>
<input
type="text"
class="form-control"
id="input-text"
placeholder="Text"
>
</div>
<label for="inputRegex">Regex</label>
<div class="input-group">
<input
type="text"
class="form-control"
id="input-regex"
placeholder="Regex"
>
<span class="input-group-btn">
<button
class="btn btn-default"
id="test-button"
type="button">
Test!
</button>
</span>
</div>
</div>
</div>
<div class="row">
<h3>Results</h3>
<div class="col-sm-12">
<div class="well well-lg" id="results-box"></div>
</div>
</div>
</div>

<?php
$inp = JQUERY("#input-text");
 $regix = JQUERY("#input-regex");
 $ab = JQUERY("#alert-box");
 $regix = JQUERY("#results-box");
    JQUERY("#test-button")['click'](function()
{
cre()
 $text = $inp['val']();
 $regex = $regix['val']();
if ($text == "") 
{
err("write the text to test");
} 
else if ($regex == "") 
{
err("Write Regular Expression against the text.");
}
 else 
{
$regex = Creg($regex);
if (!$regex) 
{
return;
}
 $results = getmatch($regex, $text);
if ($results['length'] > 0 && $results[0] !== null) 
{
 $html = count($results);
$html += Results($results, $text);
$regix['html']($html);
} 
else 
{
$rb['text']("No Similar Data Found.");
}
}
});
function cre() 
{
$regix['text']("");
$ab['addClass']("hide")['text']("");
}
function err($str) {
$ab['removeClass']("hide")['text']($str);
}
function Creg($regex) {
try {
if ($regex['charAt'](0) == "/") {
$regex = $regex['split']("/");
$regex['shift']();
 $flags = $regex['pop']();
$regex = $regex['join']("/");
$regex = new RegExp($regex, $flags);
} else {
$regex = new RegExp($regex, "g");
}
return $regex;
} catch ($e) {
err("Expression not good!!!");
return false;
}
}

function Results($results, $text) 
{
    for ( $i = $results['length'] - 1; $i >= 0; $i--) 
    {
     $result = $results[$i];
     $match = $result['toString']();
     $prefix = $text['substr'](0, $result['index']);
     $suffix = $text['substr']($result['index'] + $match['length']);
    $text = $prefix + '<span class="label label-info">' + $match + '</span>' + $suffix;
    }
    return "<h2>" + $text + "</h2>";
    }
function getmatch($regex, $text) 
{
 $results = array();
 $result = null;
if ($regex['global']) {
while(($result = $regex['exec']($text)) !== null) 
{
$results['push']($result);
}
} else {
$results['push']($regex['exec']($text));
}
return $results;
}
function count($results) 
{
if ($results['length'] == 0) {
return "<p>No similarity.</p>";
} else {
return "<p>Total matches are " + $results['length'] + "</p>";
}
}
?>
</body>
</html>