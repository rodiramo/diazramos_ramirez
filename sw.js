"use strict";

const cacheName = "blomma-files";

const cont = [
  "/",
  "/index.php",
  "css/estilos.css",
  "partials/footer.php",
  "partials/header.php",
  "partials/nav.php",
  "vistas/404.php",
  "vistas/home.php",
  "vistas/login-signup.php",
  "vistas/product-view.php",
  "vistas/products.php",
  "vistas/welcome.php",
  "css/bootstrap-grid.min.css",
  "js/main.js",
  "offline.php",
  "offline.css",
  "imgs/1.png",
  "imgs/2.png",
  "imgs/3.png",
  "imgs/orchid.png",
  "imgs/pointer.svg",
  "imgs/cursor.svg",
  "imgs/404-plant.svg",
  "imgs/producto-anthurium.webp",
  "imgs/producto-babymonstera.webp",
  "imgs/producto-caladium.webp",
  "imgs/producto-calathea.webp",
  "imgs/producto-calath.webp",
  "imgs/producto-dypsis.webp",
  "imgs/producto-fittonia.webp",
  "imgs/producto-hookeri.webp",
  "imgs/producto-medallion.webp",
  "imgs/producto-melanochrysum.webp",
  "imgs/producto-monstera.webp",
  "imgs/producto-verrucosum.webp",
];

self.addEventListener("install", function (event) {
  console.log("[ServiceWorker] Install");

  event.waitUntil(async () => {
    caches.open(cacheName).then((cache) => {
      cache.addAll(cont);
    });
  });

  self.skipWaiting();
});

const CACHE_NAME = "offline";
const OFFLINE_URL = "offline.html";

self.addEventListener("activate", (event) => {
  console.log("[ServiceWorker] Activate");
  event.waitUntil(
    (async () => {
      if ("navigationPreload" in self.registration) {
        await self.registration.navigationPreload.enable();
      }
    })()
  );

  self.clients.claim();
});

self.addEventListener("fetch", function (event) {
  console.log("[Service Worker] Fetch", event.request.url);
  if (event.request.url === "https://localhost/diaz-ramos-rocio/index.php") {
    event.respondWith(
      (async () => {
        try {
          const preloadResponse = await event.preloadResponse;
          if (preloadResponse) {
            return preloadResponse;
          }

          const networkResponse = await fetch(event.request);
          return networkResponse;
        } catch (error) {
          console.log(
            "[Service Worker] Fetch failed; returning offline page instead.",
            error
          );

          const cache = await caches.open(CACHE_NAME);
          const cachedResponse = await cache.match(OFFLINE_URL);
          return cachedResponse;
        }
      })()
    );
  }
});



//EVENTO PUSH PARA MOSTRAR NOTIFICACIONES

self.addEventListener("push", function (pushEvent) {
  let title = pushEvent.data.text();
  let options = {
    body: "New Bromma Product",
    icon: "assets/icon-192x192.png",
    vibrate: [200, 100, 200, 100, 200, 100, 200],
    data: { id: 1 },
    actions: [
      { action: "1", title: "Ver ahora", icon: "assets/icon-192x192.png" },
      { action: "2", title: "Ver luego", icon: "assets/icon-192x192.png" },
    ],
  };
  pushEvent.waitUntil(self.registration.showNotification(title, options));
});

self.addEventListener("notificationonclick", function (notificacionEvent) {
  console.log(notificacionEvent);
  if (notificacionEvent.action === "1") {
    console.log("El usuario clickeo en ver ahora");
    client.openWindow("http://localhost/vitaminecare/index.html");
  } else if (notificacionEvent.action === "2") {
    console.log("El usuario clickeo en ver luego");
  }
  notificacionEvent.notificacion.close();
});
