<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 Boris Fastovetskiy
 * @license     http://opensource.org/licenses/AGPL-3.0
 *  
 * @telegram	@BorisFastovetskiy
 */

 Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:WebProxy' => 'Web прокси',
	'Class:WebProxy+' => '',
	'Class:WebProxy/Attribute:uplink_ipaddress' => 'IP адрес uplink',
	'Class:WebProxy/Attribute:uplink_ipaddress+' => '',
	'Class:WebProxy/Attribute:webapplication_list' => 'Web приложения',
	'Class:WebProxy/Attribute:webapplication_list+' => 'Связанные Web приложения',
	'Class:WebProxy/Attribute:webproxycluster_id' => 'Кластер',
	'Class:WebProxy/Attribute:webproxycluster_id+' => '',
	'Class:WebProxy/Attribute:redundancy' => 'Анализ влияния: конфигурация резервирования',
	'Class:WebProxy/Attribute:redundancy/disabled' => 'Прикладное решение в работе, если все КЕ в работе',
	'Class:WebProxy/Attribute:redundancy/count' => 'Прикладное решение в работе, если по крайней мере %1$s КЕ в работе',
	'Class:WebProxy/Attribute:redundancy/percent' => 'Прикладное решение в работе, если по крайней мере %1$s %% КЕ в работе',
	'Class:WebApplication/Attribute:webproxy_list' => 'Web прокси',
	'Class:WebApplication/Attribute:webproxy_list+' => 'Связанные Web прокси',
	'Class:WebApplication/Attribute:databaseschema_list' => 'Схемы баз данных',
	'Class:WebApplication/Attribute:databaseschema_list+' => 'Связанные схемы баз данных',
	'Class:WebApplication/Attribute:webapplication_id' => 'Родительское Web приложение',
	'Class:WebApplication/Attribute:dependent_webapplication_list' => 'Зависимые Web приложения',
	'Class:WebApplication/Attribute:dependent_webapplication_list+' => 'Связанные Web приложения',
	'Class:LnkWebProxyToWebApplication' => 'Связь Web прокси с Web приложениями',
	'Class:LnkWebProxyToWebApplication+' => '',
	'Class:LnkWebProxyToWebApplication/Attribute:webproxy_id' => 'Web прокси',
	'Class:LnkWebProxyToWebApplication/Attribute:webproxy_id+' => '',
	'Class:LnkWebProxyToWebApplication/Attribute:webapplication_id' => 'Web приложения',
	'Class:LnkWebProxyToWebApplication/Attribute:webapplication_id+' => '',
	'Class:WebProxyCluster' => 'Кластер Web прокси',
	'Class:WebProxyCluster+' => '',
	'Class:WebProxyCluster/Attribute:uplink_ipaddress' => 'IP адрес uplink',
	'Class:WebProxyCluster/Attribute:webproxy_list' => 'Web прокси',
	'Class:WebProxyCluster/Attribute:webproxy_list+' => 'Связанные Web прокси',
	'Class:WebProxyCluster/Attribute:redundancy' => 'Анализ влияния: конфигурация резервирования',
	'Class:WebProxyCluster/Attribute:redundancy/disabled' => 'Прикладное решение в работе, если все КЕ в работе',
	'Class:WebProxyCluster/Attribute:redundancy/count' => 'Прикладное решение в работе, если по крайней мере %1$s КЕ в работе',
	'Class:WebProxyCluster/Attribute:redundancy/percent' => 'Прикладное решение в работе, если по крайней мере %1$s %% КЕ в работе',
	'Class:DatabaseSchema/Attribute:webapplication_list' => 'Web приложения',
	'Class:DatabaseSchema/Attribute:webapplication_list+' => 'Связанные Web приложения',
	'Class:LnkDatabaseSchemaToWebApplication' => 'Связь Web приложений со схемами баз данных',
	'Class:LnkDatabaseSchemaToWebApplication+' => '',
	'Class:LnkDatabaseSchemaToWebApplication/Attribute:databaseschema_id' => 'Схемы баз данных',
	'Class:LnkDatabaseSchemaToWebApplication/Attribute:databaseschema_id+' => '',
	'Class:LnkDatabaseSchemaToWebApplication/Attribute:webapplication_id' => 'Web приложения',
	'Class:LnkDatabaseSchemaToWebApplication/Attribute:webapplication_id+' => '',
));
?>
