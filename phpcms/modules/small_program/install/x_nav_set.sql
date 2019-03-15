DROP TABLE IF EXISTS `phpcms_x_nav_set`;

CREATE TABLE IF NOT EXISTS `phpcms_x_nav_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(20) DEFAULT NULL COMMENT '导航名称',
  `ico` varchar(200) DEFAULT NULL COMMENT '导航图标',
  `nav_type` int(1) DEFAULT NULL COMMENT '类型 1 小程序底部导航    2 中部自定义导航',
  `nav_img` varchar(200) DEFAULT NULL COMMENT '小程序底部导航选中图标',
  `url` varchar(200) DEFAULT NULL COMMENT '跳转地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='导航';