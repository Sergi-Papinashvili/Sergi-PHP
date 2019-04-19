<!DOCTYPE html PUBLIC "–//W3C//DTD HTML 4.01//EN">
<html><head>
<meta http–equiv="Content–Type" content="text/html; charset=Windows–1251" /><title>PHP test by seRgi</title>
</head><body>
<h3>ტესტები გაკეთებულია PHP -ის მეშვეობით</h3>
<?php
 $test = array (
  array ('q'=>'პირველი კოსმონავტი იყო იური გაგარინი','t'=>'checkbox','a'=>'1'),
  array ('q'=>'რუსეთის პირველი პრეზიდენტი იყო გორბაჩოვი','t'=>'checkbox','a'=>'0'),
  array ('q'=>'რამდენი შრე აქვს ღია სისტემების ურთიერთდაკავშირებულ მოდელს OSI-ს?','t'=>'text','a'=>'7'),
  array ('q'=>'რომელია კომპანია APPLE-ის ინოვაცია ','t'=>'select','i'=>'Android|IOS|Windows PHONE','a'=>'1'),
  array ('q'=>'შეარჩიეთ სწორი პასუხები','t'=>'multiselect',
   'i'=>'2*2=4|ვოლგა ერთვის კასპიის ზღვას|მთვარე უფრო შორსაა დედამიწიდან, ვიდრე მზე','a'=>'1|1|0')
 );
 if (!empty($_POST['action'])) { //ვითვლით სწორ ვარიანტებს და გამოგვაქვს რეზიუმე 
  $ball = 0;
  foreach ($test as $key=>$val) {
   switch ($val['t']) {
    case 'checkbox':
     if (isset($_POST[$key]) and $val['a']==1 or !isset($_POST[$key]) and $val['a']==0) $ball++;
    break;
    case 'text':
     if (isset($_POST[$key]) and strlwr_($_POST[$key])==strlwr_($val['a'])) $ball++;
    break;
    case 'select':
     if (isset($_POST[$key]) and $_POST[$key]==$val['a']) $ball++;
    break;
    case 'multiselect':
     $i = explode ('|',$val['a']);
     $cnt = 0;
     foreach ($i as $number=>$answer)
      if (isset($_POST[$key.'_'.$number]) and $answer==1 or 
        !isset($_POST[$key.'_'.$number]) and $answer==0) $cnt++;
     if ($cnt==count($i)) $ball++;
    break;
   }
  }
  $p = round ($ball/count($test)*100);
  echo '<p>სწორი პასუხები: '.$ball.' სწორი '.count($test).'- დან, სულ '.$p.'%.</p>';
  echo '<p><a href="'.$_SERVER['PHP_SELF'].'">კიდევ სცადე!</a></p>';
 }
 else { //предложить форму
  echo '<p>ჭეშმარიტ დებულებებს დაუსვით ალამი ან შეარჩიეთ პასუხი ან ცხრილიდან აირჩიეთ სწორი ვარიანტი</p>';
  $counter = 1;
  echo '<form method="post">';
  foreach ($test as $key=>$val) {
   error_check ($val);
   echo ($counter++).'. ';
   switch ($val['t']) {
    case 'checkbox':
     echo $val['q'].' <input type="checkbox" name="'.$key.'" value="1">';
    break;
    case 'text':
     $len = strlen ($val['a']);
     echo $val['q'].' <input type="text" name="'.$key.'" value="" maxlength="'.$len.'" size="'.($len+1).'">'; 
    break;
    case 'select':
     echo $val['q'].' <select name="'.$key.'" size="1">';
     $i = explode ('|',$val['i']);
     foreach ($i as $number=>$item) echo '<option value="'.$number.'">'.$item;
     echo '</select>';
    break;
    case 'multiselect':
     $i = explode ('|',$val['i']);	 
     echo $val['q'].':&nbsp;&nbsp;&nbsp;';
     foreach ($i as $number=>$item)
      echo $item.' <input type="checkbox" name="'.$key.'_'.$number.'" value="1">&nbsp;&nbsp;&nbsp;';
    break;
   }
   echo '<br>';
  }
  echo '<input type="submit" name="action" value="პასუხების გაცემა"></form>';
 }

 function error_check ($q) {
  $question_types = array ('checkbox', 'text', 'select', 'multiselect');
  $error = '';
  if (!isset($q['q']) or empty($q['q'])) $error='შეკითხვის ტექსტი არჩეული არ არის ან ცარიელია';
  else if (!isset($q['t']) or empty($q['t'])) $error='შეკითხვის ტიპი არაა არჩეული ან ცარიელია';
  else if (!in_array($q['t'],$question_types)) $error='არჩეულია არასწორი პასუხის ტიპი';
  else if (!isset($q['a']) or empty($q['a']) and $q['a']!='0') $error='არ არის პასუხის ტექსტი ანდა ის ცარიელია';
  else {
   if ($q['t']=='checkbox' and !($q['a']=='0' or $q['a']=='1')) 
    $error = 'გადამრთველისთვის დაშვებულია პასუხი 0 ან 1';
   else if ($q['t']=='select' || $q['t']=='multiselect') {
    if (!isset($q['i']) or empty($q['i'])) $error='სიის ელემენტები არაა არჩეული';
    else {
     $i = explode ('|',$q['i']);
     if (count($i)<2) $error='სიიდან არაა არჩეული მინიმუმ 2 ელემენტი მაინც გამყოფთან |';
     foreach ($i as $s) if (strlen($s)<1) { $error = 'შესაბამისი პასუხის ვარიანტი 1 სიმბოლოზე ნაკლებია'; break; }
     else {
      if ($q['t']=='select' and !array_key_exists($q['a'],$i)) $error='პასუხი არაა ცხრილის ელემენტის ნომერი';
      if ($q['t']=='multiselect' ) {
       $a = explode ('|',$q['a']);
       if (count($i)!=count($a)) $error='დებულებებისა და პასუხების რიცხვი არ ემთხვევა ერთმანეთს';
       foreach ($a as $s) if ($s!='0' and $s!='1') { 
        $error = 'დებულებები არაა არჩეული, როგორც ჭეშმარიტი ან მცდარი'; break; 
       }
      }
     }
    }
   }
  }
  if (!empty($error)) {
   echo '<p>ნაპოვნი ტექსტის შეცდომა: '.$error.'</p><p>გადასადები ინფორმაცია:</p>';
   print_r ($q);
   exit;
  }
 }
 
 function strlwr_($s){
  $hi = "ABCDEFGHIJKLMNOPQRSTUVWXYZАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ";
  $lo = "abcdefghijklmnopqrstuvwxyzабвгдеёжзийклмнопрстуфхцчшщъыьэюя";
  $len = strlen ($s);
  $d='';
  for ($i=0; $i<$len; $i++) {
   $c = substr($s,$i,1);
   $n = strpos($c,$hi); 
   if ($n!==FALSE) $c = substr ($lo,$n,1);
   $d .= $c;
  }
  return $d;
 }
?>
</body></html>