<?php 
    function reUrl($url)
    {
      echo '<script> window.location.href = "admin.php?url=' . $url . '"; </script>';
    }
    function reUrlClient($url)
    {
      echo '<script> window.location.href = "?url=' . $url . '"; </script>';
    }

    function statusVou($count,$used,$date){
        $today = date('Y-m-d');
        if ($used == $count) {
            echo "<span style='color:red'>Đã hết</span>";
        }else if( $date < $today ) {
            echo "<span style='color:red'>Hết hạn</span>";
        }else{
            echo "<span style='color:green'>Khả dụng</span>";
        }
    }

    function logSuccess($message,$type = "Success"){
        echo "
        <div class='message message-success'>
        <div class='message-icon'>
        <i class='fa-solid fa-circle-check'></i>
        </div>
        <div class='message-title'>
          <h3>$type</h3>
          <p>$message </p>
        </div>
        <div class='message-close'>
        <i class='fa-solid fa-x'></i>
        </div>
      </div>
      ";
    }
    function logError($message,$type = "Error"){
        echo "
        <div class='message message-error'>
        <div class='message-icon'>
        <i class='fa-solid fa-circle-check'></i>
        </div>
        <div class='message-title'>
          <h3>$type</h3>
          <p>$message </p>
        </div>
        <div class='message-close'>
        <i class='fa-solid fa-x'></i>
        </div>
      </div>
      ";
    }
    function logInfo($message,$type = "Info"){
        echo "
        <div class='message message-info'>
        <div class='message-icon'>
        <i class='fa-solid fa-circle-check'></i>
        </div>
        <div class='message-title'>
          <h3>$type</h3>
          <p>$message </p>
        </div>
        <div class='message-close'>
        <i class='fa-solid fa-x'></i>
        </div>
      </div>
      ";
    }
    function logWarning($message,$type = "Warning"){
        echo "
        <div class='message message-warning'>
        <div class='message-icon'>
        <i class='fa-solid fa-circle-check'></i>
        </div>
        <div class='message-title'>
          <h3>$type</h3>
          <p>$message </p>
        </div>
        <div class='message-close'>
        <i class='fa-solid fa-x'></i>
        </div>
      </div>
      ";
    }
?>