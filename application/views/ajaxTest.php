<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <title>Flashcard katchup</title>
    <base href="<?php echo ITQ_BASE_URL;?>" />

    <!-- script -->
    <script src="resources/js/jquery-1.9.1.min.js" type="text/javascript"></script>    
    <script src="resources/js/angular.js" type="text/javascript"></script>
    <script src="resources/js/script.js" type="text/javascript"></script>
    <script src="resources/js/ajaxText.js" type="text/javascript"></script>
    <!--<script>-->

</head>

<body ng-app="myAjax">

  <p><b>Ajax simple</b></p>
  <input type="button" value="Ajax post no param" onclick="ajaxPostNoParam()"/>
  <input type="button" value="Ajax post param" onclick="ajaxPostParam()"/>
  <input type="button" value="Ajax post param in URL" onclick="ajaxPostParamInURL()"/>


  <br/></br><br/></br>
  <p><b>Angularjs</b></p>
  <input ng-model="username"/>
  {{username}}

  
  <p>==========</p>
  <input type="button" value="change data" onclick="changeDataAngularjs();"/>
  <input type="button" value="change data 1" onclick="changeDataAngularjs1();"/>
  <div id="idctrlFirstCtrl" ng-controller="FirstCtrl">
    <!--
    // Simple
    <ul>
      <li ng-repeat="x in names">
        {{ x.name + ', ' + x.country }}
      </li>
    </ul>
     -->
     
    <!-- Add filter -->
    <p>Search: <input type="text" ng-model="test"></p>
    <ul>
      <li ng-repeat="x in names | filter:test | orderBy:'country'">
        {{ (x.name | uppercase) + ', ' + x.country }}
      </li>
    </ul>
  </div>

</body>
</html>