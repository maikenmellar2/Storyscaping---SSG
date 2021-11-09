<?php
/*
*Plugin Name: Event Signup
*Version: 1.0.0
*Description: This plugin will create a form where visitors can sign up for events on my WordPress site.
*Author: Maiken Melina Hoffmann Larsen
*Author URI: https://www.maikenmelinahoffmannlarsen.dk
*/
/*Her begynder jeg at lave formularen*/
function my_form()
{
  $content = '';
  $content .= '<form method="post" action="http://maikenmelinahoffmannlarsen.dk/">'; /*Koden her angiver, at formular-dataen skal sendes til min URL*/
  $content .= '<input type="text" name="yourname" placeholder="Your name" id="yourname">'; /*Her laves feltet som man skal skrive sit navn i*/
  $content .= '<input type="email" name="emailadress" placeholder="Your e-mail" id="emailadress">'; /*Her laves feltet som man skal skrive sin e-mail i*/
  $content .= '<input type="submit" name="submitbtn" value="SIGN ME UP" id="submitbtn">'; /*Her laves knappen og dens tekst*/
  return $content;
}
add_shortcode('show_event_signup', 'my_form'); /*Denne kode angiver den shortcode, der skal skrives i WordPress, for at plugin'et dukker op*/
add_action('wp_enqueue_scripts', 'register_plugin_styles'); /*Her registreres mit stylesheet*/
function register_plugin_styles(){
  wp_register_style('form_plugin_style', plugins_url('eventsignup/css/style.css')); /*Her angives "vejen" til min style.css-fil*/
  wp_enqueue_style('form_plugin_style');
}
  ?>