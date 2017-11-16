<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Laravel Blog @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <style>
      body{
        font-family: 'Raleway', sans-serif;
      }
      .blog-p{
        font-size: 16px;
        line-height: 32px;
      }
      .link-t{
        font-size: 16px;
      }
      .margin-b{
        margin-bottom: 30px;
      }
      .post-height {
        min-height: 168px;
      }
      .latest-news {
        height: 494px;
        overflow-y: scroll;
      }
      .latest-news p{
        color:#231f20;

      }
      .latest-news a{
        text-decoration: none;
      }
      .latest-news p:hover{
        color:#ed1c24;
  }

      .getup {
        border-bottom: 1px solid #eee;
        padding: 0 0 29px;
        position: relative;
      }
      .getup > p {
        left: 0;
        position: absolute;
        top: 0;
        width: 100px;
      }
      .getup img {
        height: 73px;
      }
      .getup h4 {
        font-size: 14px;
        padding: 0 0 0 108px;
      }


      .getup img {
        height: 64px;
        left: 0;
        position: absolute;
        top: 0;
        width: 100px;
      }


      .navbar-default .navbar-nav > li > a {
        color: #fff;
        font-size: 15px;
      }


      .navbar-default {
        background-color: #2b384f;
      }
      .navbar {
        border-radius: 0;
      }

      .navbar {
        border: 0 solid transparent;
        margin-bottom: 20px;
        min-height: 50px;
        position: relative;
      }


      .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
        background-color: transparent;
        color: #ddd;
      }

      .title-text {
        background: #ddd none repeat scroll 0 0;
        border-radius: 8px;
        font-size: 23px;
        letter-spacing: 7px;
        padding: 15px 0 15px 33px;
      }

      .footer-area-head {
        background: #2a394e none repeat scroll 0 0;
        color: #fff;
        padding: 17px 0;
      }

      .footer-area-head h1 {
        font-size: 47px;
        font-style: italic;
        font-weight: 700;
        margin: 0;
        padding: 13px 0;
      }




      .footer-area {
        background: #3a495e none repeat scroll 0 0;
        color: #fff;
      }


      .footer-items a {
        color: #fff;
        display: block;
        font-size: 16px;
        margin: 11px 0;
        padding: 3px;
      }


      .title-head-p {
        background: #357ab7 none repeat scroll 0 0;
        color: #fff;
      }
      .title-head-p > p {
        font-size: 19px;
        padding: 5px 0;
      }




      .headline > p {
        font-size: 20px;
        margin: 0;
        padding: 4px 0;
      }

      .marquee {
        margin: -7px 0;
      }

      .navbar-brand > img {
        margin: -15px 0;
      }


      .row.nogutter > div {
        margin: 0;
        padding: 0;
      }
      .left-hand {
        background: #2b384f none repeat scroll 0 0;
        border-bottom: 1px solid #3A495E;
        border-top: 1px solid #3A495E;
        margin: 0;
        min-height: 578px;
        padding: 34px 0;
      }
      .left-hand a {
        display: block;
        padding: 15px 30px;
        color:#fff;
      }

      .navbar.navbar-less {
        border: 0 solid transparent;
        margin-bottom: 0;
        min-height: 50px;
        position: relative;
      }
      .left-hand .active {
        background: #3A495E;
      }


      .topnews {
        margin: 0;
        padding: 0;
      }
      .topnews > hr {
        margin: 0;
        padding: 0 0 14px;
      }
      .topnews > p {
        background: #2b384f none repeat scroll 0 0;
        color: #fff;
        display: inline-block;
        margin: 19px 0 0;
        padding: 5px 20px;
        position: relative;
      }
      .topnews > li {
        font-size: 17px;
        margin: 0 0 0 8px;
        padding: 4px 9px;
      }
      .topnews li {
        color: #000;
        font-size: 17px;
        margin-left: 18px;
      }
      a:hover{
        text-decoration: none;
      }

      .getup h4 {
        color: #000;
        font-size: 14px;
        padding: 0 0 0 108px;
      }

      .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
        background: #3a465e;
        color:#fff;
        position: relative;
      }
    .navbar-nav>.active>a:before{
        position: absolute;
        left: 0;
        top:0;
        height: 2px;
        width: 100%;
        background: red;
        content: "";

      }
      .getup {
        border-bottom: 1px solid #eee;
        margin: 25px 0;
        padding: 0 0 29px;
        position: relative;
      }
      body{
        position: relative;
      }

      .title-head {
        background: #ddd none repeat scroll 0 0;
        border: 1px solid #357AB7;
        bottom: 0;
        left: 0;
        position: fixed;
        width: 100%;
        z-index: 999;
      }

      .headline {
        padding: 0 63px;
      }

      .topnews > p::before {
        background: #2b384f none repeat scroll 0 0;
        bottom: 0;
        content: "";
        height: 1px;
        left: 0;
        position: absolute;
        width: 276px;
      }

      .getup::before {
        background: #2b384f none repeat scroll 0 0;
        bottom: 0;
        content: "";
        height: 1px;
        left: -6%;
        position: absolute;
        width: 112%;
        z-index: 999;
      }

      .getup {
        border-bottom: 1px solid #eee;
        margin: 0 0 15px;
        padding: 0 0 40px;
        position: relative;
      }
      .getup:last-child::before {
        height: 0;
      }

      .getup {
        border-bottom: 0 solid #eee;

      }

      .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        color: #fff;
        cursor: default;
        background-color: #2b384f;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
      }

      .nav-tabs>li>a {
        border-radius: 0;
        color: #000;
      }

      .nav-tabs {
        border: 1px solid #2b384f;
      }


      .left-hand {

        min-height: 633px;

      }
      .left-hand .active{
        position: relative;
      }
      .left-hand .active::before {
        background: red none repeat scroll 0 0;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 3px;
      }

      .title-head {

        z-index: 1006;
      }

      .title-head-p > p {
        font-size: 19px;
        padding: 0 0;
        padding-top: 18px;
      }
      .headline {
        padding: 0;
        padding-top: 11px;
      }

      .footer-area {

        padding-bottom: 55px;
      }
      .left-hand {
        min-height: 633px;
        position: fixed;
        top: 0;
        height: 100%;
        padding-top: 90px;
      }

      .row.nogutter > div {
        margin: 0px 0 28px 0;
        padding: 0;
        min-height: 450px;

      }
      footer{
        padding-top: 19px;
      }
      .ashik{
        margin-bottom: 15px;
      }
      #bh-simple-helper{
        position: absolute;
        left: 0;
        z-index: 999999999999999999999999;
      }
    </style>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
  </head>