# endora-api  [![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)[![HitCount](http://hits.dwyl.io/techmandan/endora-api.svg)](http://hits.dwyl.io/techmandan/endora-api)
### Jednoduche PHP library pro lehci api od endory

<b>instalace:</b>
Jednoduše nahrajte soubor endora_api.php do složky odkud se bude volat.
V každém souboru kde chcete API pouzit stačí poté přidat dva řádky:
<pre><code>&lt;?php&#10;require_once('CESTA/endora_api.php');
$api = new endora_api('KOD');//KOD se zjistí v administraci
</code></pre>
a poté již můžete API používat.
<br/>příklad na <a href='https://endora.danbulant.eu/example.php'>mém webu</a>
<br/>
## Jednotlivé příklady
### program
se získa přes
<pre><code>
$api->program();
</pre></code>
a má varianty FREE PLUS a MEGA(string).
### expirace programu
se získa přes
<pre><code>
$api->expire();
</pre></code>
a má formát rok-měsíc-den(string).
### počet souborů
se získa přes
<pre><code>
$api->files('current');//aktuální počet
$api->files('limit');//maximální počet
</pre></code>
a má celé číslo (INT).
### místo na disku
se získa přes
<pre><code>
$api->diskspace('current');//aktuální velikost
$api->diskspace('limit');//maximální velikost
</pre></code>
a má formát v MB (string).
### přenos dat
se získa přes
<pre><code>
$api->traffic('current');//aktuální velikost
$api->traffic('limit');//maximální velikost
</pre></code>
a má formát v GB (string).


### ukázka
Jednoduchý příklad použití:
<pre><code>
&#x3C;?php
require_once(&#x22;endora_api.php&#x22;);
$api = new endora_api(&#x27;KOD&#x27;);
$diskcur = $api-&#x3E;diskspace(&#x27;current&#x27;);
settype($diskcur,&#x22;INT&#x22;);
$disklimit = $api-&#x3E;diskspace(&#x27;limit&#x27;);
settype($disklimit,&#x22;INT&#x22;);
$disk = ($diskcur / $disklimit) * 100;
?&#x3E;
&#x3C;p&#x3E;Vyu&#x17E;ito m&#xED;sta na serveru: &#x3C;?=$disk; ?&#x3E;% z &#x3C;?=$api-&#x3E;diskspace(&#x27;limit&#x27;); ?&#x3E;&#x3C;/p&#x3E;
</code></pre>
