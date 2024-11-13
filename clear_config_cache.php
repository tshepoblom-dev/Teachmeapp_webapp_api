<?php

// Run Laravel's Artisan commands to clear the config cache
passthru('php artisan config:clear');
passthru('php artisan cache:clear');
passthru('php artisan view:clear');
passthru('php artisan route:clear');

echo "Config cache cleared!";
