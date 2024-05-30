<?php
    include('config.php');

    //profesi
    function readProfesi(){
        global $conn;
        $query = "SELECT * FROM profesi";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    //materi
    function readMateriFE(){
        global $conn;
        $query = "SELECT * FROM materi WHERE id_profesi=1";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    function readMateriBE(){
        global $conn;
        $query = "SELECT * FROM materi WHERE id_profesi=2";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    function readMateriDO(){
        global $conn;
        $query = "SELECT * FROM materi WHERE id_profesi=3";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    function readMateriAD(){
        global $conn;
        $query = "SELECT * FROM materi WHERE id_profesi=4";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    function readMateriPGS(){
        global $conn;
        $query = "SELECT * FROM materi WHERE id_profesi=5";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    function readSubMateri(){
        global $conn;
        $query = "SELECT * FROM sub_materi";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    //submateri FE
    function readSubMateriFE1(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=1";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriFE2(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=2";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriFE3(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=3";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    //submateri BE
    function readSubMateriBE4(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=4";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriBE5(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=5";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriBE6(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=6";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriBE7(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=7";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriBE8(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=8";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriBE9(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=9";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriBE10(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=10";
        $result = mysqli_query($conn, $query);

        return $result;
    };


    //submateriDO
    function readSubMateriDO11(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=11";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriDO12(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=12";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriDO13(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=13";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriDO14(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=14";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriDO15(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=15";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    //submateri AD
    function readSubMateriAD16(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=16";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    function readSubMateriAD17(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=17";
        $result = mysqli_query($conn, $query);

        return $result;
    };

    function readSubMateriAD18(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=18";
        $result = mysqli_query($conn, $query);

        return $result;
    };


    //submateri PGS
    function readSubMateriPGS19(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=19";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriPGS20(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=20";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriPGS21(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=21";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriPGS22(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=22";
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function readSubMateriPGS23(){
        global $conn;
        $query = "SELECT * FROM sub_materi WHERE id_materi=23";
        $result = mysqli_query($conn, $query);

        return $result;
    };



    
    function readQuery($table, $id, $find){
        global $conn;
        $query = "SELECT * FROM ".$table." WHERE ".$id."=".$find;
        $result = mysqli_query($conn, $query);


        return $result;
    };

    function readSubMateriCRUD(){
        global $conn;
        $query = "SELECT
        sub_materi.id_sub_materi, 
        materi.nama_materi, 
        sub_materi.nama_sub_materi, 
        sub_materi.sumber_materi
    FROM
        sub_materi
        INNER JOIN
        materi
        ON 
        sub_materi.id_materi = materi.id_materi
        ORDER BY
        sub_materi.id_sub_materi ASC;";

        $result = mysqli_query($conn, $query);

        return $result;
    };

    function delete($id){
        global $conn;
        $sub_materi = readSubMateri();
        
        $query = "DELETE FROM sub_materi WHERE id_sub_materi = $id";
        $result = mysqli_query($conn, $query);


        $isSucceed = mysqli_affected_rows($conn);


        // mengembalikan nilai sukses
        return $isSucceed;
    }

    function addSubMateri(){
        global $conn;
        
        $id_materi = $_POST["id_materi"];
        $nama_sub_materi = $_POST["nama_sub_materi"];
        $sumber_materi = $_POST['sumber_materi'];

        // SQL query to insert data into the database
        $query = "INSERT INTO `sub_materi`( `id_materi`, `nama_sub_materi`, `sumber_materi`) VALUES ( '$id_materi', '$nama_sub_materi', '$sumber_materi')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            // menangani kesalahan operasi database
            die("Query failed: " . mysqli_error($conn));
        }

        $isSucceed = mysqli_affected_rows($conn);
        // mengembalikan nilai sukses
        return $isSucceed;
    }   

    function updateSubMateri($data){
       
        global $conn;
        $id = $data['id'];
        $id_materi = $data['id_materi'];
        $nama_sub_materi = $data['nama_sub_materi'];
        $sumber_materi = $data['sumber_materi'];
        
        $sub_materi = readSubMateri();



            $query = "UPDATE sub_materi SET id_materi = '$id_materi', nama_sub_materi = '$nama_sub_materi' ,  sumber_materi = '$sumber_materi' WHERE id_sub_materi = $id";
            $result = mysqli_query($conn, $query);
        



        $isSucceed = mysqli_affected_rows($conn);
        
        // mengembalikan nilai sukses
        return $isSucceed;
    }
