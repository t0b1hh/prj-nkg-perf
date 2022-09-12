# prj-nkg-perf
staging.connected.nkg.coffee Performance Checks

# PHP Info
https://staging.connected.nkg.coffee/tobi-info.php

## Status

### Startseite Lighthouse Check

|Messung|Pre Optim|Post Optim|
|--|--|--|
|Lighthouse|22||
|FCP|3,9s||
|TTI|53,9s||
|SI|42,3s||
|TBT|18,680 ms||
|LCP|5,6 s||
|CLS|0,072 (green)||

### Impressum Lighthouse Check

|Messung|Pre Optim|Post Optim|
|--|--|--|
|Lighthouse|16||
|FCP|8,4s||
|TTI|16,5s||
|SI|28,7s||
|TBT|3,800 ms||
|LCP|17 s||
|CLS|0 (green) 🥳||



## Zwei Baustellen
Beide ca 50% Anteil am "Tempo"

### Serverseitig

TTFB = ~10sekunden muss reduziert werden

=> Serverseitig caching einführen
=> generelle Server Performance ausreichend?

#### Plugins: 

https://docs.google.com/spreadsheets/d/1Ds3U2QAIiEKaepdA_cXKPNOpwu19Ejpqi0QhA4kMSwg/edit?usp=sharing

- Quizmaster genauer angucken




### Browser seitig

TotalBlockingTime: 4500ms (lokal, Desktop)

- Elementor frontend.min.js "YouTube Loader" bremst
- zu viele Module bzw. modul init in frontend.min.js (each => attachDocumentClass) und frontend-modules.min.js (each => {getElementSettings()} lahmen
- Lazy Loading for Images !!! (Lighthouse:  43,79s?)
- Reduce image sizes (auch animierte gifs!!!)
- webp
- Render Blocking CSS beheben, wird insb. auf leichteren Seiten wie Impressum kritisch
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
