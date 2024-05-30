<?php
    include('function.php');


    $id = $_GET['id_sub_materi'];
    if ($id > 0) {
        $isDeleteSucceed = deleteBahan($id);  
        if ($isDeleteSucceed > 0) {
        echo "
        <script>
        alert('Delete Success !');
        document.location.href = 'admin.php';
        </script>
        ";
        } else {
        echo "
        <script>
        alert('Delete Failed !');
        document.location.href = 'admin.php';
        </script>
        ";
    }
    }
?>
