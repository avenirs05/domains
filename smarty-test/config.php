<?php
///////////////config//////////////////

//���������� ��������� ����������� � ���� ������
//����
define('DB_HOST','localhost');
//������������
define('DB_USER','root');
//������
define('DB_PASSWORD','');
//�������� ���� ������
define('DB_NAME','my_bd');

//������ ���������� ��� ����������� � �����
$site_name = '������� ������������';

//���������� ��������� � ����������
header("Content-Type:text/html;charset='cp1251'");

///////////////config//////////////////

//������������ � ���� ������
$db = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$db) {
	exit('No connection with database');
}

//�������� ���� ������
if(!mysql_select_db(DB_NAME,$db)) {
	exit('Wrong database');
}

mysql_query("SET NAMES cp1251");
?>