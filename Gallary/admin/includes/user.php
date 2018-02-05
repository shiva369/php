
<?php
  class User{
      public $id;
      public $username;
      public $password;
      public $first_name;
      public $last_name;

      public static function find_all_users(){
      return self::find_this_query("select * from users");
    }
      public static function find_user_by_id($user_id){
        global $database;
        $result_set = self::find_this_query("select * from users where id=$user_id LIMIT 1");
        $found_user = mysqli_fetch_array($result_set);
        return $found_user;

    }
      public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        $the_object_array= array();
        while($row = mysqli_fetch_array($result_set)){
          $the_object_array[] = self::instantation($row);

        }
        return $the_object_array;
      }
      public static function instantation($the_record){

        $the_object = new self;
       //$the_object->id         = $found_user['ID'];
       //$the_object->username   = $found_user['UserName'];
       //$the_object->Password   = $found_user['Password'];
       //$the_object->First_Name = $found_user['First_Name'];
       //$the_object->Last_Name  = $found_user['Last_Name'];
       foreach ($the_record as $the_attribute => $value) {
         if($the_object->has_the_attribute($the_attribute)){
           $the_object->$the_attribute = $value;
         }
       }
        return $the_object;
      }
      private function has_the_attribute($the_attribute){
      $object_properties = get_object_vars($this);
      return array_key_exists($the_attribute,  $object_properties);
      }
  }
?>
