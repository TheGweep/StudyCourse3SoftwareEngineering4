<?php
if($_POST["send_ru"])
{
    echo "
 <!DOCTYPE html>
<html>
<head>
    <title>�������������</title>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=windows-1251\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
</head>
<body bgcolor='#faebd7'>
<form action=\"action.php\" method=\"post\">
    <div class=\"class\">
        <label>
            <input type=\"submit\" name=\"send_ru\" value=\"�������\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_ua\" value=\"���������\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_en\" value=\"English\">
        </label>
    </div>
</form>
<div><img src=\"iam.jpg\" title='����' alt='����' width='200px' height='150px'></div>
<div><img src=\"mat.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>�������</div>
<div class='class_1'>�����</div>
<div class='class_1'>���������</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">��-13, ���(����. ���� � ����������)</marquee></div>
<div class='class_2'>�������� � ������ ����� ������</div>
<div class='class_2'>�����, 20 ���.</div>
<div class='class_2'>�������� � ������ ����� ������</div>
</body>
</html>
 ";
}
if($_POST["send_ua"])
{
    echo "
 <!DOCTYPE html>
<html>
<head>
    <title>������������</title>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=windows-1251\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
</head>
<body bgcolor='#faebd7'>
<form action=\"action.php\" method=\"post\">
    <div class=\"class\">
        <label>
            <input type=\"submit\" name=\"send_ru\" value=\"�������\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_ua\" value=\"���������\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_en\" value=\"English\">
        </label>
    </div>
</form>
<div><img src=\"iam.jpg\" title='����' alt='����' width='200px' height='150px'></div>
<div><img src=\"mat.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>�������</div>
<div class='class_1'>�����</div>
<div class='class_1'>���������</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">ϲ-13, ���(����. ���� � ���������)</marquee></div>
<div class='class_2'>��������� �� ���� ������� ������</div>
<div class='class_2'>�����, 20 ����.</div>
<div class='class_2'>��������� �� ���� ������� ������</div>
</body>
</html>
";
}
if($_POST["send_en"])
{
    echo "
 <!DOCTYPE html>
<html>
<head>
    <title>Autobiography</title>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=windows-1251\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
</head>
<body bgcolor='#faebd7'>
<form action=\"action.php\" method=\"post\">
    <div class=\"class\">
        <label>
            <input type=\"submit\" name=\"send_ru\" value=\"�������\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_ua\" value=\"���������\">
        </label>
        <label>
            <input type=\"submit\" name=\"send_en\" value=\"English\">
        </label>
    </div>
</form>
<div><img src=\"iam.jpg\" title='����' alt='����' width='200px' height='150px'></div>
<div><img src=\"mat.gif\" title='code' alt='code' width='468px' height='60px'></div>
<div class='class_1'>Lysenko</div>
<div class='class_1'>Anton</div>
<div class='class_1'>Sergeevich</div>
<div class='class_2'>bugique@gmail.com</div>
<div class='class_2'><marquee height=\"10%\" behavoir=\"alternate\" direction=\"left\">SE-13,  SE(Software Engineer)</marquee></div>
<div class='class_2'>Message and other parts of work</div>
<div class='class_2'>My name is Anton, i'm 20.</div>
<div class='class_2'>Message and other parts of work</div>
</body>
</html>
";
}