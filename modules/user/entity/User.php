<?php
/**
 * User: Tangram Auto Creator
 * Date: 2017-08-20 18:01:09
 */

namespace User\Entity;


use NxLib\RdsOrm\Lib\Mysql\ORM;

class User extends ORM
{
  protected static $table = "user";

  public $id;
  public $name;
  public $password;
  public $created;
  public $modified;
  public $pinyin;
  public $status;
}