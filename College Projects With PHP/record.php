<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="tab.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" href="hearderr" />
    <style>
        li {
            margin-left: 5%;
            display: inline-table;
        }

        .formfill {
            margin-top: 20%;
            margin-left: 35%;
            width: 100%;
        }

        .lll {

            border-radius: 9px;
            width: 30%;
            padding: 4%;
            margin-left: 10%;
            border: none;
            border: 1px solid lightgreen;
            text-align: center;
            margin: 1%;

        }

        .xxx {
            width: 29.5%;
            padding: 4%;
            margin: 1%;
            margin-left: 5%;
            border: none;
            border-radius: 9px;
            transition-duration: 0.5s;
            border: 1px solid lightgreen;
            outline: none;
            text-align: center;
        }

        .mmm {
            width: 38%;
            padding: 4%;
            margin: 1% 4.5%;
            border-radius: 9px;
            transition-duration: 0.5s;
            outline: none;
            border: none;
            border: 1px solid lightgreen;
        }#mmmm:hover{
            background-color: lightskyblue;
        }

        .form {

            display: inline-flex;
            background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            border: 2px solid black;
            width: 80%;
            border-radius: 10px;
            padding: 10%;
            border: 1px solid lightgreen;
            margin-left: 10%;
            margin-top:0%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .formfill {

            background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            width: 90%;
            border-radius: 10px;
            padding: 5%;
            border: 0.5px solid lightgreen;
            margin-left: 10%;
            margin-top: 10%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        input {
            padding: 4%;
            outline: none;
            text-align: center;
            margin: 1%;
            border: 1px solid lightgreen;
            font-size: 10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            border-radius: 5px;
        }

        .delete {
            margin-left: 5%;
            transition-duration: 0.5s;
        }.delete:hover{
            background-color: salmon;
        }

        table {
            display: inline-flex;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            border: 1px solid lightgreen;
            margin: 0% 0% 0% 0%;
            background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            border-radius: 10px;
            padding: 6px;
        }



        td {
            border: 1px solid lightgreen;
            border-spacing: 10%;
            padding: 7px;
            font-family: monospace;
            background-color: aliceblue;
            text-align: center;
            border-radius: 5px;
        }

        th {
            border: 1px solid lightgreen;
            border-spacing: 10%;
            border-radius: 3px;
            padding: 7px;
            text-align: center;
            font-family: monospace;
            background-color: lightgray;
        }


        .up {
            padding: 4%;
            width: 45%;
            text-align: center;
        }

        .updatedata {
            position: absolute;
            background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            border: 2px solid black;
            width: 17.2%;
            border-radius: 10px;
            padding: 1.4%;
            border: 1px solid lightgreen;
            margin-left: 2.5%;
           
            margin-top: 2%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }

        body {
            background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .up1 {
            padding: 3.5%;
            transition-duration: 0.5px;
            width: 40%;
            outline: none;
            border: 1px solid lightgreen;
            border-radius: 10px;
            text-align: center;
        }.up1:hover{
            background-color: lightgreen;
        }
    </style>
</head>

<body>
    <div class="banner">
        <ul>
            <li>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $databasename = "ibasanta";
                $conn = mysqli_connect($servername, $username, $password, $databasename);
                if (!$conn) {
                    die("UnSuccessfully connected." . mysqli_connect_errno());
                } else {
                    $sql = "SELECT * FROM basanta";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {

                            echo "<table>";
                            echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>First name</th>";
                            echo "<th>Last name</th>";
                            echo "<th>Age</th>";
                            echo "<th>Gender</th>";
                            echo "<th>Trade</th>";
                            echo "<th>Contact</th>";
                            echo "<th>From</th>";
                            echo "<th>Lives In</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['firstname'] . "</td>";
                                echo "<td>" . $row['lastname'] . "</td>";
                                echo "<td>" . $row['age'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>" . $row['slevel'] . "</td>";
                                echo "<td>" . $row['contact'] . "</td>";
                                echo "<td>" . $row['addresss'] . "</td>";
                                echo "<td>" . $row['addresss2'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No records matching your query were found.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
                }

                mysqli_close($conn);
                ?>
            </li>

            <li><br>
                <form action="" method="POST" class="form">
                    <input type="number" placeholder="Enter ID" name="value1" />
                    <input type="submit" Value="Delete" name="proccessing" class="delete" />
                </form>
                <br>
                <form action="" method="POST" class="formfill">

                    &nbsp <input type="text" placeholder="First name" name="first" class="lll" />
                    &nbsp &nbsp <input type="text" placeholder="Last name" name="second" class="lll" />
                    <br>
                    <input type="number" placeholder="ID" name="id" class="xxx" />
                    &nbsp<input type="number" placeholder="Age" name="age" class="xxx" style="margin-left:5.8%;" /><br>
                    <input type="text" placeholder="Trade" name="trade" class="xxx" />
                    &nbsp<input type="number" placeholder="contact" name="contact" class="xxx" style="margin-left:5.8%;" /><br>
                    <input type="text" placeholder="Temp Add" name="from" class="xxx" />
                    &nbsp<input type="text" placeholder="Par Add" name="live" class="xxx" style="margin-left:5.8%;" /><br>
                    <select name="select" class="mmm">
                        <option value="">---sex---</option>
                        <option value="m">male</option>
                        <option value="f">female</option>
                    </select>
                    <input type="submit" value="Submit" name="process" class="mmm" id="mmmm"/>
                </form>
                <form action="" method="POST" class="updatedata">
                    <input type="text" Placeholder="change value" name="firstvalue" class="up" />
                    <select name="choose" class="up1">
                        <option value="">---select---</option>
                        <option value="firstname">Firstname</option>
                        <option value="lastname">Lastname</option>
                        <option value="age">Age</option>
                        <option value="gender">Gender</option>
                        <option value="slevel">Trade</option>
                        <option value="contact">contact</option>
                        <option value="addresss">Form</option>
                        <option value="addresss2">Lives In</option>
                    </select>
                    <input type="number" Placeholder="ID" name="Secondvalue" class="up" />
                    <input type="submit" value="Update" name="processing" class="up1" />
                </form>
            </li>





            <?php
            if (isset($_POST['process'])) {
                $id = ($_POST['id']);
                $fname = ($_POST['first']);
                $lname = ($_POST['second']);
                $gender = ($_POST['select']);
                $age = ($_POST['age']);
                $trade = ($_POST['trade']);
                $contact = ($_POST['contact']);
                $from = ($_POST['from']);
                $live = ($_POST['live']);
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "ibasanta";
                $link = mysqli_connect($servername, $username, $password, $database);
                if (!$link) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                } else {

                    $sql = "INSERT INTO basanta (id,firstname, lastname,age,gender,slevel,contact,addresss,addresss2) VALUES
                ('$id','$fname','$lname','$age','$gender','$trade','$contact','$from','$live')
               ";

                    if (mysqli_query($link, $sql)) {
                        print("<script> window.location.href='https://localhost/dream/record.php';</script>");
                    } else {
                        print "";
                    }
                }
                mysqli_close($link);
            }

            ?>
        </ul>

</body>
<?php
if (isset($_POST['proccessing'])) {
    $id = $_POST['value1'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ibasanta";
    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if (!$conn) {
        die("Connection Failed." . mysqli_connect_error());
    } else {
        $sql = "delete from basanta where id=$id"; //The Program Is COded By Basanta Chaudhary
        if (mysqli_query($conn, $sql)) {
            print("<script> window.location.href='https://localhost/dream/record.php';</script>");
        } else {
            echo "Unsuccessfully Delete." . mysqli_connect_error($conn);
        }
    }
    mysqli_close($conn);
}
?>

</html>
<?php
if (isset($_POST['processing'])) {
    $myid = $_POST['Secondvalue'];
    $mytext = $_POST['firstvalue'];
    $mychoose = $_POST['choose'];
    $hostsname = "localhost";
    $myuser = "root";
    $mypassword = "";
    $mydatabasename = "ibasanta";
    $conn = mysqli_connect($hostsname, $myuser, $mypassword, $mydatabasename);
    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    } else {
        $sql = "update basanta set $mychoose='$mytext' where id=$myid";
        if (mysqli_query($conn, $sql)) {
            print("<script> window.location.href='https://localhost/dream/record.php';</script>");
        } else {
            print "failed update" . mysqli_connect_error($conn);
        }
    }
    mysqli_close($conn);
}

?>