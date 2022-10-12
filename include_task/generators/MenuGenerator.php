<?php

function generateMenu(): string
{
    $html = ''; //kintamasis
    $urls = [
        'Google' => 'https://google.com',
        'YouTube' => 'https://youtube.com',
        'StackOverFlow' => 'https://stackoverflow.com'
    ]; //masyvo kintamasis

    $html = '<nav>';
    foreach ($urls as $title => $href) {
        //$html .= "<a href=\"{$href}\" target=\"_blank \">{$title}</a>";
        $html .= "<a href='" . $href . "' target = '_blank'>" . $title . "</a>";
    }
    $html .= '<nav>';


    return $html;
}
