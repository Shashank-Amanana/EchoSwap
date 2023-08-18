<?php
include 'config.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoswap</title>
    <!-- <script src="https://cdn.tailwindcss.com/"></script>
    <script type="module" src="scripts/tailwind.config.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/complete.css">
</head>

<body>
    <?php include "Header2.php" ?>
    <!-- <div class="left_container">
        hello
    </div>
    <div class="right_conntainer">
    chat history
    </div> -->
    <section style="background-color: #DDD;">
        <div class="chat_container py-5">

            <div class="row">
                <div class="col-md-12">

                    <div class="card" id="chat3" style="border-radius: 15px;">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">


                                    <div class="p-3">

                                        <div class="input-group rounded mb-3">
                                            <input type="search" class="form-control rounded" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </div>

                                        <div class="user_interface" data-mdb-perfect-scrollbar="true"
                                            style="position: relative; height: 400px">
                                            <ul class="list-unstyled mb-0">
                                                <?php
                                                $query = "SELECT DISTINCT users.id, users.name FROM users
                                                        LEFT JOIN chat ON users.id = chat.receiver_id
                                                        WHERE chat.sender_id = '$user_id' OR users.id IN (SELECT sender_id FROM chat WHERE receiver_id = '$user_id')
                                                        OR users.id = (SELECT sender_id FROM chat WHERE receiver_id = '$user_id' ORDER BY msg_date ASC LIMIT 1)
                                                        ORDER BY users.name ASC";

                                                $run_user = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_assoc($run_user)) {
                                                    $userid = $row['id'];
                                                    $user_name = $row['name'];
                                                    //$selectedClass = ($selectedUserId == $userid) ? 'active' : '';
                                                
                                                    // Check if there are unread messages from the receiver to the sender
                                                    $unread_query = "SELECT COUNT(*) AS unread_count, MAX(msg_date) AS last_msg_date FROM chat WHERE sender_id = '$userid' AND receiver_id = '$user_id' AND msg_status = 'unread'";
                                                    $run_unread = mysqli_query($conn, $unread_query);
                                                    $unread_row = mysqli_fetch_assoc($run_unread);

                                                    $unread_count = $unread_row['unread_count'];
                                                    $last_msg_date = $unread_row['last_msg_date'];

                                                    // Check if there are any chat history between the sender and receiver
                                                    $chat_history_query = "SELECT MAX(msg_date) AS last_msg_date FROM chat WHERE (sender_id = '$userid' AND receiver_id = '$user_id') OR (sender_id = '$user_id' AND receiver_id = '$userid')";
                                                    $run_chat_history = mysqli_query($conn, $chat_history_query);
                                                    $chat_history_row = mysqli_fetch_assoc($run_chat_history);

                                                    $last_chat_date = $chat_history_row['last_msg_date'];

                                                    // Determine the display date based on the availability of chat history
                                                    $display_date = ($last_msg_date != null) ? $last_msg_date : $last_chat_date;

                                                    echo '<li class="p-2 border-bottom">
                                                        <a href="chat.php?userid=' . $userid . '" class="d-flex justify-content-between">
                                                            <div class="d-flex flex-row">
                                                                <div class="pt-1">
                                                                    <p class="fw-bold mb-0"><a href="chat.php?userid=' . $userid . '" style="text-decoration:none">' . $user_name . '</a></p>
                                                                </div>';
                                                    if ($unread_count > 0) {
                                                        echo '<div class="pt-1" style="margin-left:12px">
                                                                        <span class="badge bg-danger rounded-pill">' . $unread_count . '</span>
                                                                    </div>';
                                                    }
                                                    echo '</div>
                                                            <div class="pt-1">
                                                                <p class="small text-muted">' . ($display_date ? date("M d, Y H:i", strtotime($display_date)) : "Just now") . '</p>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }
                                                ?>
                                                <!-- <li class="p-2 border-bottom">
                                                    <a href="#!" class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                                    alt="avatar" class="d-flex align-self-center me-3"
                                                                    width="60">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0">Marie Horwitz</p>
                                                                <p class="small text-muted">Hello, Are you there?</p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Just now</p>
                                                            <span
                                                                class="badge bg-danger rounded-pill float-end">3</span>
                                                        </div>
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                <!-- getting the user information who logged in -->
                                <?php
                                $get_user = "select * from users where id='$user_id'";
                                $run_user = mysqli_query($conn, $get_user);
                                $row = mysqli_fetch_array($run_user);
                                $user_name = $row['name'];
                                ?>
                                <!-- getting the user data data on which user clicked -->
                                <?php
                                if (isset($_GET['userid'])) {
                                    global $conn;
                                    $get_userid = $_GET['userid'];
                                    $get_user = "select * from users where id='$get_userid'";
                                    $run_user = mysqli_query($conn, $get_user);
                                    $row_user = mysqli_fetch_array($run_user);
                                    $username = $row_user['name'];
                                    $userid = $row_user['id'];
                                    ;
                                    ?>
                                    <div class="col-md-6 col-lg-7 col-xl-8">
                                        <div class="user_det">
                                            <h5 style="font-weight:bold">
                                                <?= $username ?>
                                            </h5>
                                        </div>
                                        <div class="pt-3 pe-3 chat_interface" data-mdb-perfect-scrollbar="true"
                                            style="position: relative; height: 400px" id="chatbox">
                                            <?php
                                            $query = "update chat set msg_status='read' where sender_id='$userid' AND receiver_id='$user_id'";
                                            $update_msg = mysqli_query($conn, $query);
                                            $sel_msg = "select * from chat where(sender_id='$user_id' AND receiver_id='$userid') OR (sender_id='$userid' AND receiver_id='$user_id') ORDER by 1 ASC";
                                            $run_msg = mysqli_query($conn, $sel_msg);
                                            while ($row_msg = mysqli_fetch_assoc($run_msg)) {
                                                $sender_name = $row_msg['sender_name'];
                                                $receiver_name = $row_msg['receiver_name'];
                                                $sender_id = $row_msg['sender_id'];
                                                $receiver_id = $row_msg['receiver_id'];
                                                $msg_content = $row_msg['msg_content'];
                                                $msg_date = $row_msg['msg_date'];
                                                if ($user_id == $sender_id and $userid == $receiver_id) {
                                                    echo '<div class="d-flex flex-row justify-content-end">
                                                <div>
                                                    <p class="small" style="text-align:right">' . $sender_name . '</p>
                                                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">' . $msg_content . '</p>
                                                    <p class="small me-3 mb-3 rounded-3 text-muted">' . $msg_date . '</p>
                                                </div>
    
                                                
                                            </div>';

                                                } else if ($userid == $sender_id and $user_id == $receiver_id) {

                                                    echo '<div class="d-flex flex-row justify-content-start">
                                            <div>
                                                <p class="small" style="text-align:left">' . $sender_name . '</p>
                                                <p class="small p-2 ms-3 mb-1 rounded-3"
                                                    style="background-color: #f5f6f7;">' . $msg_content . '</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">' . $msg_date . '</p>
                                            </div>
                                        </div>';
                                                }
                                            } ?>


        </div>
                                        <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
                                            <form action="" method="post" name="messageForm">
                                                <div class="send_msg" style="float:left">
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="exampleFormControlInput2" placeholder="Type message"
                                                        name="msg_content">
                                                </div>
                                                <!-- <a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
                                            <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a> -->
                                                <button class="btn btn-outline-dark btn-lg" id="sendBtn" type="submit" name="submit"><i
                                                        class="fas fa-paper-plane fa-lg"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <?php
    if (isset($_POST['submit'])) {
        $msg = htmlentities($_POST['msg_content']);
        if ($msg == "") {
            echo "
            <div class='alert alert-danger'>
                <strong><center>Unable to send the Message</center></strong>
            </div>
            ";
        } else if (strlen($msg) > 100) {
            echo "
            <div class='alert alert-danger'>
                <strong><center>Message is Too long.Use only 100 characters</center></strong>
            </div>";
        } else {
            $insert_msg = "INSERT INTO `chat`(`sender_id`, `sender_name`, `receiver_id`, `receiver_name`, `msg_content`, `msg_status`, `msg_date`) VALUES ('$user_id','$user_name','$userid','$username','$msg','unread',NOW())";
            mysqli_query($conn, $insert_msg);
        }
    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Get the chat container element
            var chatContainer = $('.chat_interface');

            // Scroll to the bottom of the chat container
            chatContainer.scrollTop(chatContainer[0].scrollHeight);
        });
    </script>
</body>

</html>