<?php

echo "###################################################\n";
echo "#               Coded By : Micin                  #\n";
echo "#               WA:  081260341378                 #\n";
echo "#               Manusia Biasa Team                #\n";
echo "###################################################\n";
echo "1. MD5\n";
echo "2. SHA1\n";
echo "3. BCRYPT\n";
echo "4. BASE64 Encode\n";
echo "5. BASE64 Decode\n";
echo "6. Crypt\n";
echo "7. crc32\n";
sleep(2);
echo "Pilih : ";
$pil = trim(fgets(STDIN));
if ($pil == '1') {
	echo "Write Your Password : ";
	$text = trim(fgetc(STDIN));
	$md5 = md5($text);
	sleep(2);
	echo "Your Password is $md5\n" ;
	exit();
} if ($pil == '2') {
	echo "Write Your Password : ";
	$text = trim(fgets(STDIN));
	$sha1 = sha1($text);
	sleep(2);
	echo "Your Password is $sha1\n";
	exit();
} if ($pil == '3') {
	echo "Write Your Password : ";
	$text = trim(fgets(STDIN));
	$bcrypt = password_hash($password, PASSWORD_BCRYPT,  array('cost'=>11));
	sleep(2);
	echo "Your Password is $bcrypt\n";
	exit();
} if ($pil == '4') {
	echo "Write Your Password : ";
	$text = trim(fgets(STDIN));
	$base64_en = base64_encode($text);
	sleep(2);
	echo "Your Password is $base64_en\n";
	exit();
} if ($pil == '5') {
	echo "Write Your Base64 : ";
	$text = trim(fgets(STDIN));
	$base64_de = base64_decode($text);
	sleep(2);
	echo "Your Text is $base64_de\n";
	exit();
} if ($pil == '6') {
	echo "Write Your Text : ";
	$text = trim(fgets(STDIN));
	$crypt = crypt($text);
	sleep(2);
	echo "Your Crypt is $crypt\n";
	exit();
} if ($pil == '7') {
	echo "Write Your Text : ";
	$text = trim(fgets(STDIN));
	$crc32 = crc32($text);
	sleep(2);
	echo "Your crc32 is $crc32\n";
	exit();
} else {
	sleep(2);
	exit();
}

?>
