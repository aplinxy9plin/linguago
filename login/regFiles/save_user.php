<?php
if (isset($_POST['email'])) { $login = $_POST['email']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
//������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������

if (empty($login) or empty($password) or empty($name)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
{
exit ("XYINYA!");
}
//���� ����� � ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$name = stripslashes($name);
$name = htmlspecialchars($name);

//������� ������ �������
$login = trim($login);
$password = trim($password);
$name = trim($name);

// ������������ � ����
include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

// �������� �� ������������� ������������ � ����� �� �������
$result = $mysqli->query("SELECT id FROM users WHERE email='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
header('Location: ../reg.php?req=exist');
exit;
}

// ���� ������ ���, �� ��������� ������
$result2 = $mysqli->query("INSERT INTO users (email,password, name) VALUES('$login','$password','$name')");
// ���������, ���� �� ������
if ($result2=='TRUE')
{
header('Location: ../index.php?req=complete');
echo "Good</a>";
}

else {
echo "Bad.";
     }
?>
