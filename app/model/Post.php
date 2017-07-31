<?php
namespace Link\Models;
class Post{
  public static function DB(){
    global $CONFIG;
    return new \PDO("mysql:host={$CONFIG['dbhost']};dbname={$CONFIG['dbname']}",$CONFIG['dbuser'], $CONFIG['dbpass']);
  }
  public function verify($name,$pass){
    $db=self::DB();
    $query=$db->prepare('SELECT * FROM table1 WHERE user=:name AND password= :psw');
    $query->execute([':name'=>$name,':psw'=>md5($pass) ]);
    $rows=$query->fetchAll();
    $row_length = count($rows);
    if($row_length>0)
      {
        session_start();
        $_SESSION["name"]=$name;
        return True;
      }
    return False;
  }
  public function add($name,$pass){
    $db=self::DB();
    $query=$db->prepare('INSERT INTO table1 (user,password) VALUES(:name,:psw)');
    $query->execute([':name'=>$name,':psw'=>md5($pass) ]);
    session_start();
    $_SESSION["name"]=$name;
  }
  public function addLink($link){
    $db=self::DB();
    session_start();
    $name=$_SESSION["name"];
    $query=$db->prepare('INSERT INTO table2 (user,link) VALUES(:name,:link)');
    $query->execute([':name'=>$name,':link'=>$link]);
  }
  public function show(){
    $db=self::DB();
    session_start();
    $name=$_SESSION["name"];
    $query=$db->prepare('SELECT link FROM table2 WHERE user=:name');
    $query->execute([':name'=>$name]);
    $rows=$query->fetchAll();
    return $rows;
  }
}
?>
