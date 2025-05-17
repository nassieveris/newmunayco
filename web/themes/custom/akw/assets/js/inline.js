document.addEventListener('DOMContentLoaded', () => {
  [handleLazyImages].forEach(fn => fn());
});

const handleLazyImages = () => {
  const u = new Set();

  document.querySelectorAll("img[loading='lazy']").forEach(img => {
    try {
      const url = new URL(img.src, window.location.href);
      if (url.origin === window.location.origin) {
        u.add(url.pathname + url.search + url.hash);
      } else {
        u.add(img.src);
      }
    } catch {
      u.add(img.src);
    }
  });

  u.forEach(url => {
    document.head.insertAdjacentHTML(
      'beforeend',
      `<link rel="preload" href="${url}" as="image" />`
    );
  });
};
