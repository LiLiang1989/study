<?php
return array (
		
		// 添加数据库配置信息
		'db_type' => 'mysql', // 数据库类型
		'db_host' => 'localhost', // 服务器地址
		'db_name' => 'weeky_cat', // 数据库名
		'db_user' => 'user', // 用户名
		'db_pwd' => 'user2015', // 密码
		'db_port' => 3306,
		'DB_PREFIX' => 'ec_', // 数据库表前缀
		                      
		// 禁止访问模块
		'MODULE_DENY_LIST' => array (
				'Common',
				'Runtime',
				'Api' 
		),
		
		// 允许访问模块
		'MODULE_ALLOW_LIST' => array (
				'Home',
				'Admin',
		),
		'DEFAULT_MODULE' => 'Home',
		/* URL配置 */
		'URL_CASE_INSENSITIVE' => true, // 默认false 表示URL区分大小写 true则表示不区分大小写
		'URL_MODEL' => 2, // URL模式
		/* 全局过滤配置 --全局过滤函数 */
		'DEFAULT_FILTER' => '' 
);
