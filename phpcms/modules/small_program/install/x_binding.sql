DROP TABLE IF EXISTS `phpcms_x_binding`;

CREATE TABLE IF NOT EXISTS `phpcms_x_binding` (
  `AppId` varchar(200) DEFAULT NULL,
  `AppSecret` varchar(200) DEFAULT NULL,
  `Token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='绑定表';