<?php

Route::get('sitemap.xml', function()
{
  return Response::view('grekov.advertslist::sitemap')->header('Content-Type', 'text/xml');
});