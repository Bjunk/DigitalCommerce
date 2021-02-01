self.addEventListener("push", function(event) {
  console.log("[Service Worker] Push Received.", event.data.text());
  var options = {
    body: "This notification was generated from a push!"
  };
  event.waitUntil(self.registration.showNotification("Hello world!", options));
});