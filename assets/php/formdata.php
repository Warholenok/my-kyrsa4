<?php
$Login=$_POST['Login'];
$Adress=$_POST['Adress'];
$Telephone=$_POST['Telephone'];
$to="E-mail отправителя";
$subject="Тема: Обратная связь";
$mestext="Имя: ".$Login.
		 "\nE-mail: ".$Adress.
         "\nТелефон: ".$Telephone.
		 "\n".
$headers.="От: ООО Организация <teat@teat.ru>";
mail($to, $subject, $mestext, $headers);
header('Refresh: 4; url=../../index.html');
echo "
<p align='center' style='color:#ff0000'><b>Сообщение отправлено.</b><br>
Через 4 сек. Вы будете перенаправлены
<a href='url=../../index.html'>на главную страницу</a></p>";
?>