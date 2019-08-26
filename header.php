<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solo_Murph
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <?php //link rel="stylesheet" href="css/app.css"><link rel="stylesheet" href="css/murph.css" ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet"> 
    
    <style>
            ::selection{
                background:#ffd725;
                color:#eee;
            }
            
            html {
                height: 100%;
                background-color: #222;
                background-image: url(http://mediamurph.com/img/daniel-van-den-berg-738631-unsplash.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: top center;
            }

            body{
                height: 100%;
                margin:0;
                padding:0;
                
                background-color: #222;
                background-color: rgba(0,0,0,0.73);
                
                font-family: "Montserrat", sans-serif;
                color: silver;
            }
            
            #page{
                margin:0 auto;
                padding:0;
                min-width:350px;
                width:90%;
                min-height: 90%;
            }
            
            #murphthedog {
                position: relative;
                z-index: 9;
                padding: 30px 0;
                height: 170px;
                background: url('http://mediamurph.com/img/murphy-outline.png') center 20px no-repeat;
                background-size: 150px;
                transition: all 1s;
            }
            
            hgroup{
                width: 100%;
            }
            
            h1,h2{
                margin:0 auto;
                line-height:1.24rem;
                letter-spacing:-0.042rem;
                text-align: center;
                font-size:1.4rem;
                transition: all 1s;
            }
            
            h1{
                color:#ffd725;
                text-shadow: #222 3px 0 5px, #222 1px 0 5px;
            }
            
            h2{
                line-height: 2.48rem;
                font-size:3rem;
                color:#fff;
            }
            
            p{
                width: 100%;
                text-align: center;
            }
            
            a{
                margin:0 0.24rem;
                text-decoration: none;
                color:silver;
                font-weight: 600;
            }
            
            a:hover{
                text-decoration:underline;
                color: #ffd725;
            }
            
            footer{
                font-size:0.9rem;
            }
        
            .pum-theme-9 .pum-content + .pum-close, 
            .pum-theme-default-theme .pum-content + .pum-close {
                background-color:#ffd725;
            }
         
            div.wpforms-container-full .wpforms-form input[type="submit"], 
            div.wpforms-container-full .wpforms-form button[type="submit"], 
            div.wpforms-container-full .wpforms-form .wpforms-page-button {
                background-color: #81D742; 
            }
            
            @media screen and ( min-width: 600px ) {
                h1,h2 {
                    margin-top: 0.48rem;
                    line-height: 3.24rem;
                }
                
                h1 {
                    font-size: 2rem;
                }
                
                h2 {
                    font-size: 5rem;
                }
            }
            
            @media screen and ( min-width: 880px ) {
                h1 {
                    font-size: 3.24rem;
                }
            }
            
            @supports ( display: flex ) {
                .wrap, #murphthedog, header, hgroup, main, footer {
                    display: flex;
                }
                
                .wrap, header, hgroup {
                    flex-flow: column nowrap;
                }
                
                header,footer{
                    flex-shrink: 1;
                }
                
                main{
                    flex-grow: 1;
                }
                
                h1{order:2;}
                h2{order:1;}
            }
            
            @supports ( height: 100vh ) {
                .wrap {
                    height: 100vh;
                }
                
                #murphthedog {
                    height: 35vh;
                    margin-top: 10vh;
                    background-size: 30vh;
                }
                
                footer{
                    height: 20vh;
                }
            }
        </style>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
 <?php // <a class="skip-link screen-reader-text" href="#content"> ?>
 <?php // esc_html_e( 'Skip to content', 'solo-murph' ); ?>
 <?php // </a> ?>

    <header id="masthead" class="site-header grid-container full">
        <div id="murphthedog"></div>
        <hgroup>
            <h1>Front-end web development</h1>
            <h2 id="mediamurph" title="Media Murph">Media<span>Murph</span></h2>
        </hgroup>
    </header><!-- #masthead -->
        
        <?php //p id="links"><a href="mailto:contact@mediamurph.com" id="contact" rel="lightbox">Contact</a> :: <a href="/cv-daniel-pearce-front-end-web-developer.docx" target="_blank">Daniel Pearce's CV</a> :: <a href="//danielpearce.myportfolio.com" id="portfolio" target="_blank">Archive</a></p ?>

