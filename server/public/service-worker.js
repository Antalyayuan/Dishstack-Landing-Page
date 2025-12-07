self.addEventListener('install', (event) => {
    self.skipWaiting();
});

self.addEventListener('activate', (event) => {
    clients.claim();
});

self.addEventListener('fetch', () => {
    // Placeholder service worker to satisfy registration; add caching if needed.
});
