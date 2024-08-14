<?php
$voter_id = "";
require_once("staff/connect.php");

$category_id=$_SESSION["cookie"];

if(isset($_POST["vote"])){
    $vote=$_POST["vote"];
    $voter_id = $_POST["voter_id"];

    //get users ip address
    $ip = "";
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    $category_id=$_SESSION["cookie"];


    if(isset($_COOKIE[$category_id])){
        echo "
            <script>
                alert('You already voted in this category!');
            </script>
        ";
    }
    else{

        // check if this voter id exists
        $check_query = "SELECT * FROM verification WHERE voters_id='$voter_id' AND category_id='$category_id'";
        $check_results = mysqli_query($conn, $check_query);

        if($check_results){
            if (mysqli_num_rows($check_results) > 0) {
                echo "
                <script>
                    alert('You already voted in this category!');
                </script>
            ";
            }
            else{

                $vote_query = "UPDATE votes SET votes=1 + votes.votes WHERE id=$vote";
                $vote_result = mysqli_query($conn, $vote_query);

                if($vote_result){
                    setcookie($category_id,"developed by skyline software",time()+(86400*30));
                    echo "
                        <script>
                            alert('Thank You for Voting!');
                        </script>
                    ";
                }
                else{
                    echo "
                        <script>
                            alert('Voting Failed!');
                        </script>
                    ";
                }

                // insert this voter id and category id
                $insert_query = "INSERT INTO verification(voters_id,ip_address,category_id) VALUES ('$voter_id','$ip','$category_id')";
                $insert_result = mysqli_query($conn, $insert_query);
            }
        }
        else{
            echo "
                <script>
                    alert('Voting Failed!');
                </script>
            ";
        }
    }
}

?>