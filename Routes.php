<?php

Route::set('index.php', function() {
  Index::CreateView('Index');
});

Route::set('about.php', function() {
  About::CreateView('About');
});

Route::set('contact', function() {
  Contact::CreateView('Contact');
});

?>
