<?php
Route::filter('posts.view_throttle', 'Filters\ViewThrottleFilter');