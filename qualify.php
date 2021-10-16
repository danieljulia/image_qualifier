<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image qualifier</title>
    <style>
        #myimage{
            width:100%;
        }
        .controls{
            position:absolute;
            top:20px;
            left:20px;
            background-color:rgba(255,255,255,0.5);
            width:40%;
        }
        </style>

  </head>
  <body>
  
  <img id="myimage" src="">

  <div class="controls">
    <div id="info"></div>
    <label for="points" class="form-label">Qualify</label>
<input onkeydown="return false;" tabindex=-1 type="range" class="form-range" min="0" max="10" step="1" id="points">
    </div>

<?php require "footer.php"?>