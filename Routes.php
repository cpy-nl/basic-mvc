<?php

Route::set('about', function() {
  About::CreateView();
});

Route::set('contact', function() {
  Contact::CreateView();
});

?>
