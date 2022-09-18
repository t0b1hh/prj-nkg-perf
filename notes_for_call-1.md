# Call Notes NKG connected


## AutOptimize Cache zu groß

![Bildschirmfoto 2022-09-18 um 16 24 29](https://user-images.githubusercontent.com/5128133/190912001-a062fefd-9f14-47a5-bf10-aeb4c2763596.png)

-> CSS/JS zu unterschiedlich je Unterseite? Vereinheitlichen?  Hi @ Elementor


## Caching (Serverside)

- Notlösugn, nicht finale Lösung
- Ursache muss behoben werden

Entscheidungsgrundlagen welches Plugin:

- Häufigkeit von Content Updates
- Benutzer Interaktion (Comments, Forum, Likes,..)
- Gesamten Cache löschen + Rebuild on Post Edit/Publish sinnvoll?


### Eingesetzt

#### WP Super Cache (Free)

https://wordpress.org/plugins/wp-super-cache/

- Einfach und schnell eingerichtet
- Nur bedingt konfigurierbar
- Schlechte Doku

`Settings -> WP Super Cache``



### Alternativen

#### Cache Enabler

https://wordpress.org/plugins/cache-enabler/

- Cache clearing feiner einstellbar als bei Super Cache
- Cache
- Minification
-


#### W3 Total Cache (Freemium, 99 USD/Jahr)

https://wordpress.org/plugins/w3-total-cache/
https://www.boldgrid.com/w3-total-cache/

`Performance

- Umfangreich
- Bringt Minification, WEbP, Defer CSS, Lazy Load etc mit
- Alternative zu "AutOptimize +Cache"
- Object Cache (DB Responses)

- Pro Version:
  - WPML Support
  - Rest API Cache
  - Fragment Caching
  - Statistics
  - FullSite Delivery via CDN

![Bildschirmfoto 2022-09-18 um 16 33 41](https://user-images.githubusercontent.com/5128133/190912407-ce4eb76a-e8bf-401e-bdf0-5201f27b93a5.png)
![Bildschirmfoto 2022-09-18 um 16 33 45](https://user-images.githubusercontent.com/5128133/190912412-e9e86de3-bbdd-41ed-b4c7-e750a2981ce6.png)




#### WP Fastest Cache (Freemium)

https://www.wpfastestcache.com/

- Alterantive zu Supercache


#### Hyper Cache

https://wordpress.org/plugins/hyper-cache/

Muss man mögen



