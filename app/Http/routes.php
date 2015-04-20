<?php

// need to separate routes in multiple files.
foreach (File::allFiles(app_path().'/Http/routes') as $route) {
	require_once $route->getPathname();
}