# prj-nkg-perf
staging.connected.nkg.coffee Performance Checks

# PHP Info
https://staging.connected.nkg.coffee/tobi-info.php


## Status

### Frontpage
|Messung|Pre Optim|Post Optim|
|--|--|--|
|Lighthouse|22||
|FCP|3,9s||
|TTI|53,9s||
|SI|42,3s||
|TBT|18,680 ms||
|LCP|5,6 s||
|CLS|0,072 (green)||

## Zwei Baustellen
Beide ca 50% Anteil am "Tempo"

### Serverseitig
TTFB = ~10sekunden muss reduziert werden

Plugins: 
- Quizmaster genauer angucken




### Browser seitig

TotalBlockingTime: 4500ms

- Elementor frontend.min.js "YouTube Loader" bremst
- zu viele Module bzw. modul init in frontend.min.js (each => attachDocumentClass) und frontend-modules.min.js (each => {getElementSettings()} lahmen
- Lazy Loading for Images !!! (Lighthouse:  43,79s?)
- Reduce image sizes (auch animierte gifs!!!)
- webp
- render blocking css
- DOM Size (3837 Elements.
  - Lighthouse flags pages with DOM trees that:
    - Warns when the body element has more than ~800 nodes.
    - Errors when the body element has more than ~1,400 nodes.
- Font Display Swap für Aptifier und eIcons
- RevSlider exec time (> 10s)
- Quizmaster (JS Exec)
- CSS minify/aggregate (zuuu viele Files + Abhhängigkeiten)
- Premium Addons Elementor lädt sehr spät `( …premium-addons-elementor/pa-frontend-493b523f5.min.js?ver=166…(staging.connected.nkg.coffee) 16,593 ms starttime`
- ULike lädt spät
- Matomo ? 
