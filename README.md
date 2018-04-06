# endora-api
### Jednoduche PHP library pro lehci api od endory

<b>instalace:</b>
Jednoduse nahrajte soubor endora_api.php do slozky odkud se bude volat.
V kazdem souboru kde chcete API pouzit staci pote pridat dva radky:
<pre><code>
&lt;?php&#10;require_once();//aby se nepridavalo znovu&#10;$api = new endora_api('KOD');//KOD se zjisti v administraci
</code></pre>
a pote jiz muzete API pouzivat.
<br/>priklady ve slozce examples
