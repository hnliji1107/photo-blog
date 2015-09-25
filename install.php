<?php
	require('public.php');
	/**创建数据库**/
	$database = "CREATE DATABASE IF NOT EXISTS ".$db_name;
	
	if(!mysql_query($database,$con)){
		echo 'create database - '.$db_name.' failure.<br />';
	}
	else{
		echo 'create database - '.$db_name.' success.<br />';
	}

	$table = "CREATE TABLE IF NOT EXISTS users (
		user_id MEDIUMINT( 8 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
		user_name VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NOT NULL ,
		user_nickName VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		user_sex VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		email VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		user_password VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NOT NULL ,
		user_selfIntro TEXT CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		user_avatar VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		regist_time DATETIME NOT NULL,
		PRIMARY KEY (user_id)) ENGINE=MyISAM DEFAULT CHARSET=UTF8";
	
	if(!mysql_query($table,$con)){
		echo 'create table - users failure.<br />';
	}
	else{
		echo 'create table - users success.<br />';
	}

	$table = "CREATE TABLE IF NOT EXISTS albums (
		album_id MEDIUMINT( 8 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
		album_name VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NOT NULL ,
		album_desc TEXT CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		user_id MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
		album_cover VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL,
		create_time DATETIME NOT NULL,
		PRIMARY KEY (album_id)) ENGINE=MyISAM DEFAULT CHARSET=UTF8";
	
	if(!mysql_query($table,$con)){
		echo 'create table - albums failure.<br />';
	}
	else{
		echo 'create table - albums success.<br />';
	}

	$table = "CREATE TABLE IF NOT EXISTS photos (
		photo_id MEDIUMINT( 8 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
		photo_name VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NOT NULL ,
		photo_size VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		photo_desc TEXT CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		edit_name VARCHAR( 255 ) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL ,
		album_id MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
		user_id MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
		upload_time DATETIME NOT NULL,
		PRIMARY KEY (photo_id)) ENGINE=MyISAM DEFAULT CHARSET=UTF8";
	
	if(!mysql_query($table,$con)){
		echo 'create table - photos failure.<br />';
	}
	else{
		echo 'create table - photos success.<br />';
	}

	$table = "CREATE TABLE IF NOT EXISTS photoComments (
		comment_id MEDIUMINT( 8 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
		comment_txt TEXT CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NOT NULL ,
		commenter_id MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
		photoOwner_id MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
		photo_id MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
		comment_time DATETIME NOT NULL,
		PRIMARY KEY (comment_id)) ENGINE=MyISAM DEFAULT CHARSET=UTF8";
	
	if(!mysql_query($table,$con)){
		echo 'create table - photoComments failure.<br />';
	}
	else{
		echo 'create table - photoComments success.<br />';
	}

	$table = "CREATE TABLE IF NOT EXISTS friends (
		data_id MEDIUMINT( 8 ) UNSIGNED NOT NULL AUTO_INCREMENT ,
		friend_id MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
		user_id MEDIUMINT( 8 ) UNSIGNED NOT NULL ,
		add_time DATETIME NOT NULL,
		PRIMARY KEY (data_id)) ENGINE=MyISAM DEFAULT CHARSET=UTF8";
	
	if(!mysql_query($table,$con)){
		echo 'create table - friends failure.<br />';
	}
	else{
		echo 'create table - friends success.<br />';
	}

?>