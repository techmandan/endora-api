# endora-api [![Build Status](https://travis-ci.org/techmandan/endora-api.svg?branch=master)](https://travis-ci.org/techmandan/endora-api)[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)[![HitCount](http://hits.dwyl.io/techmandan/endora-api.svg)](http://hits.dwyl.io/techmandan/endora-api)
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
