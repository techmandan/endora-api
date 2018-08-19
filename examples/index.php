<?
/*
//////////////////////////
//zakladni             //
/////////////////////////
//vytvoreni a pripojeni 
echo 'zaklad:';
include('../endora_api.php');//pripoji class
$api = new endora_api('ZVcxeVlXNXliMk5wYm5WOGRXVXVZVzFuYVhOcg==');//pripoji API -> dale jako $api
echo 'Soubory:'.$api->files();//pocet souboru na mem webu
echo 'diskspace:'.$api->diskspace();//misto na mem webu
echo 'traffic:'.$api->traffic();//traffic
//////////////////////////
//kompletni             //
//////////////////////////
echo 'komplet:';
echo $api->files('limit');//defaultne je current, tedy to co pouzivate. pridanim 'limit' do zavorky zobrazite limit dane hodnoty(zde pocet souboru)
echo $api->diskspace('current');//je to same jako kdyz napisete echo $api->diskspace();
echo $api->traffic().'/'.$api->traffic('limit');//casto pouzivane
echo $api->plan();//zobrazi aktualni plan. Do zavorky se nic nepise
*/
//stare demo
//nove demo:
?>
<section>
  <!--for demo wrap-->
  <h1>Kódy</h1>
  <p>Tlustě jsou defaultní hodnoty</p>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>kód</th>
          <th>typy</th>
          <th>vrací</th>
          <th>přidáno</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td>diskspace</td>
          <td><b>current</b>, limit </td>
          <td>STR (MB)</td>
          <td>1.0</td>
        </tr>
        <tr>
          <td>traffic</td>
          <td><b>current</b>, limit </td>
          <td>STR (GB)</td>
          <td>1.0</td>
        </tr>
        <tr>
          <td>files</td>
          <td><b>current</b>, limit </td>
          <td>INT</td>
          <td>1.0</td>
        </tr>
        <tr>
          <td>program</td>
          <td><i>nemá typy</i></td>
          <td>STR (LITE, FREE, PLUS, MEGA)</td>
          <td>1.1</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
<div class="made-with-love">
  Vytvořeno s
  <i>♥</i> od
  <a target="_blank" href="https://danbulant.eu">Daniel Bulant</a>
</div>
