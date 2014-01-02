SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `class_cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `class_cms` ;

-- -----------------------------------------------------
-- Table `class_cms`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `class_cms`.`category` (
  `cid` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `cat_name` CHAR(30) NOT NULL DEFAULT '' COMMENT '栏目名称',
  `pid` SMALLINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '父ID',
  `cat_order` SMALLINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '栏目排序',
  PRIMARY KEY (`cid`))
ENGINE = MyISAM
COMMENT = '栏目表';


-- -----------------------------------------------------
-- Table `class_cms`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `class_cms`.`admin` (
  `aid` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` CHAR(30) NOT NULL DEFAULT '' COMMENT '帐号',
  `password` CHAR(32) NOT NULL DEFAULT '' COMMENT '密码',
  PRIMARY KEY (`aid`))
ENGINE = MyISAM
COMMENT = '管理员表';


-- -----------------------------------------------------
-- Table `class_cms`.`content`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `class_cms`.`content` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` CHAR(100) NOT NULL DEFAULT '' COMMENT '标题',
  `content` TEXT NULL COMMENT '正文',
  `addtime` INT(10) NOT NULL DEFAULT 0 COMMENT '添加时间',
  `click` MEDIUMINT UNSIGNED NOT NULL DEFAULT 100 COMMENT '查看次数',
  `flag` SET('置顶','推荐') NULL COMMENT '文章属性',
  `category_cid` SMALLINT NOT NULL COMMENT '栏目id',
  `admin_aid` SMALLINT UNSIGNED NOT NULL COMMENT '管理员id',
  PRIMARY KEY (`id`),
  INDEX `fk_content_category_idx` (`category_cid` ASC),
  INDEX `fk_content_admin1_idx` (`admin_aid` ASC))
ENGINE = MyISAM
COMMENT = '文章表';


-- -----------------------------------------------------
-- Table `class_cms`.`config`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `class_cms`.`config` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` CHAR(60) NULL COMMENT '标题',
  `name` CHAR(30) NULL COMMENT '变量名',
  `show_type` TINYINT NOT NULL DEFAULT 1 COMMENT '显示类型  1 文本框  2 单选框',
  PRIMARY KEY (`id`))
ENGINE = MyISAM
COMMENT = '网站配置';


-- -----------------------------------------------------
-- Table `class_cms`.`links`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `class_cms`.`links` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `webname` VARCHAR(45) NOT NULL DEFAULT '',
  `url` VARCHAR(100) NOT NULL DEFAULT '',
  `logo` VARCHAR(255) NOT NULL DEFAULT '',
  `status` TINYINT NOT NULL DEFAULT 0 COMMENT '状态  1 显示  0 不显示',
  PRIMARY KEY (`id`))
ENGINE = MyISAM
COMMENT = '友情链接';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
