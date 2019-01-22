<?php

function sj_customize_register( $wp_customize ) {
    sj_social_customizer_section( $wp_customize );
    sj_miscellaneous_customizer_section( $wp_customize );        
}