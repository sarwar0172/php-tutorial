<!-- htmlentitis used to privent sql injection into a from -->

<?php
//htmlentitis(string,flag) it has two parameter.flags convert 

//flag as three predefind value
//1.ENT_COMPAT=Encodes only double quotes
//2.ENT_QUOTES=Enables double and single quotes
//3.ENT_NOQUOTES=Does not encode any quotes.

//htmlspecialchars(sting,flags)//it will incodrd special caracture
//&=&amp
//"=&quot;
//'=&#039;
//<=&lt;
//>=&gt;


// $str="A 'quote' is <b>blod</b>";
$stb="<a  href='http://google.com'>robin</a>";
// echo $str."<br><br>";
// echo "</br>";
// echo $stb;
//go to your viw sorce

echo htmlentities($stb);//html encoded
// echo "</br>";

$htmlent=htmlentities($stb,ENT_QUOTES);//html encoded and store into a variabel




echo html_entity_decode($htmlent);//decoad htmlintitis code.

echo "<pre>";
print_r(get_html_translation_table());//it will give you a list that can convert caracture.
echo "<pre>";


echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));//it will give you a list that can convert caracture.
echo "<pre>";
?>