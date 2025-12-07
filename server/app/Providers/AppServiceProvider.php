<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
            $this->logAssetPresence();
        }
    }

    /**
     * Log presence of critical frontend assets to help diagnose 404s in prod.
     */
    protected function logAssetPresence(): void
    {
        $assets = [
            'css' => public_path('build/assets/app-cATFq14i.css'),
            'js'  => public_path('build/assets/app-Cc8I8P8i.js'),
        ];

        foreach ($assets as $type => $path) {
            $exists = file_exists($path);
            if (!$exists) {
                $this->attemptDownload($type, $path);
                $exists = file_exists($path);
            }
            Log::info('Asset check', [
                'type' => $type,
                'path' => $path,
                'exists' => $exists,
                'size' => $exists ? filesize($path) : null,
                'app_url' => config('app.url'),
                'asset_url' => config('app.asset_url'),
            ]);
        }
    }

    /**
     * Attempt to download missing assets from GitHub raw as a last-resort fallback.
     */
    protected function attemptDownload(string $type, string $path): void
    {
        $remoteMap = [
            'css' => 'https://raw.githubusercontent.com/Antalyayuan/Dishstack-Landing-Page/main/server/public/build/assets/app-cATFq14i.css',
            'js'  => 'https://raw.githubusercontent.com/Antalyayuan/Dishstack-Landing-Page/main/server/public/build/assets/app-Cc8I8P8i.js',
        ];

        if (!isset($remoteMap[$type])) {
            return;
        }

        try {
            $dir = dirname($path);
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }

            $contents = @file_get_contents($remoteMap[$type]);
            if ($contents !== false) {
                file_put_contents($path, $contents);
                Log::info('Asset downloaded from fallback', ['type' => $type, 'path' => $path]);
            } else {
                Log::warning('Asset download failed', ['type' => $type, 'url' => $remoteMap[$type]]);
            }
        } catch (\Throwable $e) {
            Log::error('Asset download exception', [
                'type' => $type,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
