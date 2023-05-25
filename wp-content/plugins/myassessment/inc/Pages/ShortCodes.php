<?php
/**
 * @package Myassessment
 */


 namespace Inc\Pages;

 class ShortCode{
    public function register(){
        add_shortcode('cohort13', [$this, '']);
    }
    public function ContactUsForm($atts){
        $defaults = [
            'title' => 'Edit this to fit your title name',
            'company_name' => 'Enter company name here'
        ];
        $atts = shortcode_atts(
            $defaults, $atts, 'cohort13'
        );

        $html = '';
        $html .= '<h2> This is the contact us page</h2>';
    }
 }