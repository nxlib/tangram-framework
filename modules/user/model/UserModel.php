<?php
/**
 * User: Tangram Auto Creator
 * Date: 2017-08-20 18:01:09
 */

namespace User\Model;



use Common\Model;

class UserModel extends Model
{
  public function getUserById($id){
    $data = $this->db->query("select * from users where id=?",[123]);
    return $data;
  }
}