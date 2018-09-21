<?php
if (isset($_POST['email'])) { $login = $_POST['email']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['mobile'])) { $mobile=$_POST['mobile']; if ($mobile =='') { unset($mobile);} }
//������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������

if (empty($login) or empty($password) or empty($mobile)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
{
exit ("XYINYA!");
}
//���� ����� � ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$mobile = stripslashes($mobile);
$mobile = htmlspecialchars($mobile);

//������� ������ �������
$login = trim($login);
$password = trim($password);
$mobile = trim($mobile);

// ������������ � ����
include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

// �������� �� ������������� ������������ � ����� �� �������
$result = $mysqli->query("SELECT id FROM users WHERE mail='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
header('Location: ../login.php?req=exist');
exit;
}

// ���� ������ ���, �� ��������� ������
$result2 = $mysqli->query("INSERT INTO users (mail,password) VALUES('$login','$password','$mobile')");
// ���������, ���� �� ������
if ($result2=='TRUE')
{
header('Location: ../login.php?req=complete');
echo "Good</a>";
}

else {
echo "Bad.";
     }
?>
