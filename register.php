<?php
  function coDB($sql){
    //Kết nối database
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    // $conn dùng để kết nối cơ sở dữ liệu 
    $conn = new PDO("mysql:host=$servername;dbname=giay", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // dùng để báo lỗi 
     // echo "Connected successfully";
    $stmt = $conn->prepare($sql);
    // prepare này được hiểu là 1 câu lệnh truy vấn dữ liệu 
    $stmt->execute();
    // execute dùng để thực thi câu lệnh 

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $products=$stmt->fetchAll();
    // fetchAll lấy tất cả mọi dòng dữ liệu từ đối tượng dữ liệu
    return $products;
   } catch(PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
       }
       // trong đó phương thức get Message hiện thị tin nhắn ngoại lệ thông báo lỗi!
   }
  function register($sql){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=giay", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
}
?>
<?php
    function checkUser($Email,$pass){
         $conn = CNDB();
         // set the PDO error mode to exception
         $stmt = $conn->prepare("SELECT * FROM datacustomer WHERE Email = '". $Email ."'AND pass ='".$pass."'");
         // prepare này được hiểu là 1 câu lệnh truy vấn dữ liệu 
         $stmt->execute();
         $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
         $products=$stmt->fetchAll();
         if(count($products)>0)
         {
            return $products[0]['PassWord'];
         }else{
            return 0;
         }
    }
            // trong đó phương thức get Message hiện thị tin nhắn ngoại lệ thông báo lỗi!
?>

