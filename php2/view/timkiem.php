<?php error_reporting( error_reporting() & ~E_NOTICE ) ;?>
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">  
<table class="table table-bordered" >
            <tr style="font-weight: bold">
                <td class="title">Mã sản phẩm</td>
                <td class="title">Tên</td>
                <td class="title">Mô tả</td>
                <td class="title">Giá</td>
            </tr>
            <?php
            if(isset($_POST['ok'])){
                if($_POST['user']==""){
                    echo "Vui lòng nhập từ khóa tìm kiếm!"; 
                }else{
                    $user=$_POST['user'];
                }   
            }
            if($user){
            $conn=mysql_connect("localhost","root","") or die("không thể kết nối");
            mysql_select_db("php2",$conn);
            $sql="SELECT * from products where productName LIKE '%$user%'";
            $query=mysql_query($sql);
            if(mysql_num_rows($query)!=""){
            $stt=1;
            while($row=mysql_fetch_array($query)){
            $stt++;
            echo "<tr>";
            echo "<td>".$stt."</td>";
            echo "<td>".$row['productName']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['listPrice']."</td>";
            echo "</tr>";
            }
            }else{
            echo "<tr><td colspan='4' align='center'>Khong co ket qua tim kiem nao</td></tr>";
            }
            }
            ?>
        </table>
        <td><a href="/php2/"><button class="btn btn-success" >Trang chu</button></a></td>
 </div></div></div>