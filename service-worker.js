self.addEventListener('install', function(event) {
    event.waitUntil(
      caches.open('scrapable-cache').then(function(cache) {
        return cache.addAll([
          '/',
          '/index.html',
          '/manifest.json',
          '/public/css/style.css',
          '/public/css/custom.css',
          '/public/css/color.css',
          '/public/css/responsive.css',
          '/public/css/owl.carousel.min.css',
          '/public/css/bootstrap.min.css',
          '/public/css/prettyPhoto.css',
          '/public/css/all.min.css',
          '/public/css/slick.css',
          '/public/js/jquery-3.3.1.min.js',
          '/public/js/jquery-migrate-1.4.1.min.js',
          '/public/js/popper.min.js',
          '/public/js/bootstrap.min.js',
          '/public/js/owl.carousel.min.js',
          '/public/js/jquery.prettyPhoto.js',
          '/public/js/isotope.min.js',
          '/public/js/slick.min.js',
          '/public/js/custom.js',
          '/public/js/scroll.js',
          '/images/favicon.png',
          '/path/to/other/important/assets' // Add paths to other important assets
        ]);
      })
    );
  });
  
  self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.match(event.request).then(function(response) {
        return response || fetch(event.request);
      })
    );
  });
  