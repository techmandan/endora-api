<?
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
