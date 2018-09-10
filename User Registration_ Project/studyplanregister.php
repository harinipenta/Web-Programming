<?php
if (isset($_SERVER['HTTP_HOST']))
{
    if($_SERVER['HTTP_HOST'] == "localhost")
    {
        $root =  realpath($_SERVER["CONTEXT_DOCUMENT_ROOT"]);
        define("ROOT",$root."/student/ogms/public_html");
        $root = ROOT;
    }
    else
    {
        $root =  realpath($_SERVER["CONTEXT_DOCUMENT_ROOT"]);
    }
}
else
{
    $root =  realpath($_SERVER["CONTEXT_DOCUMENT_ROOT"]);
}
session_start();
$user_name = $_SESSION['user']['name'] ;
$user_email = $_SESSION['user']['mail'] ;
$user_pantherid = $_SESSION['user']['pid'] ;
//include $root.'/authenticate.php';
include($root.'/osms.dbconfig.inc');
$error_message = "";
$counter = 0;

$mysqli = new mysqli($hostname,$username, $password,$dbname);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
<?php
//connect to database
$db=$mysqli;

if(isset($_POST['register_btn']))
{
    $pantherid=($_POST['pantherid']);
    $termid=($_POST['termid']);
    $course1id=($_POST['course1id']);
    $course2id=($_POST['course2id']);
    $course3id=($_POST['course3id']);
    $course4id=($_POST['course4id']);
    $course5id=($_POST['course5id']);
    $course6id=($_POST['course6id']);


     if($_SESSION["status"]=="create") {
         echo 'id is null';
         $sql = "insert into tbl_studyplan(PantherID,Termid,Course1id,Course2id,
                                          Course3id,Course4id,Course5id,Course6id)
                values($pantherid,$termid,$course1id,$course2id,
                $course3id,$course4id,$course5id,$course6id)
                ";
     }
     else
     {
         $id = $_SESSION["id"];
         $sql="update tbl_studyplan
                set PantherID=$pantherid,Termid=$termid,Course1id=$course1id,Course2id=$course2id,
                Course3id=$course3id,Course4id=$course4id,Course5id=$course5id,Course6id=$course6id
                where Studyplanid=$id
            ";

     }
    echo  $sql;
    $result=mysqli_query($db,$sql);

    echo $result;
    if ($result) {
        echo 'Test delete tbl_student_info Success';
    } else {
        echo 'Test delete tbl_student_info fail';
        echo("Error description: " . mysqli_error($db));
    }
    //echo $ret;
    header("location:studyplanviewdashboard.php");  //redirect home page
}
else
{
    if(empty($_GET['id'])==false) {
        if (is_numeric($_GET['id'])) {

            $id = (int)$_GET['id'];
            $sql="select
                    Studyplanid as id,
                    PantherID as pantherid,
                    Termid as termid,
                    Course1id as course1id,
                    Course2id as course2id,
                    Course3id as course3id,
                    Course4id as course4id,
                    Course5id as course5id,
                    Course6id as course6id
                     from tbl_studyplan
                    where  Studyplanid = " . $id;
            //echo $sql;
            $result = mysqli_query($db, $sql);
//            echo $result;
//            if ($result) {
//                echo 'Test delete tbl_student_info Success';
//            } else {
//                echo 'Test delete tbl_student_info fail';
//                echo("Error description: " . mysqli_error($db));
//            }

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    //echo "id: " . $row["id"] . "<br>";
                    $id = $row["id"];
                    $pantherid = $row["pantherid"];
                    $termid = $row["termid"];
                    $course1id = $row["course1id"];
                    $course2id = $row["course2id"];
                    $course3id = $row["course3id"];
                    $course4id= $row["course4id"];
                    $course5id = $row["course5id"];
                    $course6id = $row["course6id"];
                    $_SESSION["id"] = $id;
                }
            } else {
                //echo "0 results";
            }

            $_SESSION["status"] = "update";
            //echo $_SESSION["status"];
        }
    }
    else
    {
        $_SESSION["status"] = "create";
        //echo $_SESSION["status"];
    }
}
?>
<!DOCTYPE html>
<html>
<!-- Header -->
<head>
    <?php
    include $root.'/links/header.php';
    include $root.'/links/footerLinks.php';
    ?>

</head>
<!-- /#Header -->
<body>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>

<script LANGUAGE="JavaScript">
    function ChangTerm(selectObject){

        //var pvalue=document.tacourse_newregister.term.options[document.tacourse_newregister.term.selectedIndex].label;

        //var res = pvalue.split(":");
        //document.tacourse_newregister.startdate.value = res[0];
        //document.tacourse_newregister.enddate.value = res[1];


    }
</script>

<!-- page-wrapper -->
<div id="page-wrapper">
    <form method="post" action="studyplanregister.php" name ="studyplanregister" >
  <table>

      <tr>
          <td class="select">pantherid :</td>
          <td ALIGN="center">
              <select name="pantherid">
                  <?php
                  //$db=mysqli_connect("localhost","root","hu1015","authentication");
                  $sql = "select CONCAT(coalesce(stn.FirstName,' '),coalesce(stn.MiddleName,' '),coalesce(stn.LastName,' ')) as studentname,
                          stn.PantherID
                          from tbl_student_info as stn
                        ";
                  $result = mysqli_query($db,$sql);
                  //add NULL
                  //echo  "<option  >NULL</option>";

                  while ($facultyrow=mysqli_fetch_array($result)) {
                      $studentname = $facultyrow["studentname"];
                      $panther_id = $facultyrow["PantherID"];
                      echo "<option value='$panther_id'";
                      if(empty($id)==false)
                      {
                          if ($panther_id==$pantherid)
                          {
                              echo "selected";
                          }
                      }
                      echo  "    >
                            $studentname
                            </option>";
                  }
                  ?>
              </select>
          </td>
      </tr>
      <tr>
          <td class="select">TermID :</td>
          <td ALIGN="center">
              <select name="termid">
                  <?php
                  //$db=mysqli_connect("localhost","root","hu1015","authentication");
                  $sql = "select Term,Termid
                          from tbl_term
                        ";
                  $result = mysqli_query($db,$sql);
                  //add NULL
                  //echo  "<option  >NULL</option>";

                  while ($facultyrow=mysqli_fetch_array($result)) {
                      $termname = $facultyrow["Term"];
                      $term_id = $facultyrow["Termid"];
                      echo "<option value='$term_id'";
                      if(empty($id)==false)
                      {
                          if ($term_id==$termid)
                          {
                              echo "selected";
                          }
                      }
                      echo  "    >
                            $termname
                            </option>";
                  }
                  ?>
              </select>
          </td>
      </tr>
      <tr>
          <td class="select">Course 1:</td>
          <td ALIGN="center">
              <select name="course1id">
                  <?php
                  //$db=mysqli_connect("localhost","root","hu1015","authentication");
                  $sql = "select Courseid as Courseid,
                                CRN as Name
                          from tbl_course
                        ";
                  $result = mysqli_query($db,$sql);
                  //add NULL
                  echo  "<option  >NULL</option>";

                  while ($facultyrow=mysqli_fetch_array($result)) {
                      $Coursename = $facultyrow["Name"];
                      $Courseid = $facultyrow["Courseid"];
                      echo "<option value='$Courseid'";
                      if(empty($id)==false)
                      {
                          if ($Courseid==$course1id)
                          {
                              echo "selected";
                          }
                      }
                      echo  "    >
                            $Coursename
                            </option>";
                  }
                  ?>
              </select>
          </td>
      </tr>

      <tr>
          <td class="select">Course 2:</td>
          <td ALIGN="center">
              <select name="course2id">
                  <?php
                  //$db=mysqli_connect("localhost","root","hu1015","authentication");
                  $sql = "select Courseid as Courseid,
                                CRN as Name
                          from tbl_course
                        ";
                  $result = mysqli_query($db,$sql);
                  //add NULL
                  echo  "<option >NULL</option>";

                  while ($facultyrow=mysqli_fetch_array($result)) {
                      $Coursename = $facultyrow["Name"];
                      $Courseid = $facultyrow["Courseid"];
                      echo "<option value='$Courseid'";
                      if(empty($id)==false)
                      {
                          if ($Courseid==$course2id)
                          {
                              echo "selected";
                          }
                      }
                      echo  "    >
                            $Coursename
                            </option>";
                  }
                  ?>
              </select>
          </td>
      </tr>

      <tr>
          <td class="select">Course 3:</td>
          <td ALIGN="center">
              <select name="course3id">
                  <?php
                  //$db=mysqli_connect("localhost","root","hu1015","authentication");
                  $sql = "select Courseid as Courseid,
                                CRN as Name
                          from tbl_course
                        ";
                  $result = mysqli_query($db,$sql);
                  //add NULL
                  echo  "<option >NULL</option>";

                  while ($facultyrow=mysqli_fetch_array($result)) {
                      $Coursename = $facultyrow["Name"];
                      $Courseid = $facultyrow["Courseid"];
                      echo "<option value='$Courseid'";
                      if(empty($id)==false)
                      {
                          if ($Courseid==$course3id)
                          {
                              echo "selected";
                          }
                      }
                      echo  "    >
                            $Coursename
                            </option>";
                  }
                  ?>
              </select>
          </td>
      </tr>
      <tr>
          <td class="select">Course 4:</td>
          <td ALIGN="center">
              <select name="course4id">
                  <?php
                  //$db=mysqli_connect("localhost","root","hu1015","authentication");
                  $sql = "select Courseid as Courseid,
                                CRN as Name
                          from tbl_course
                        ";
                  $result = mysqli_query($db,$sql);
                  //add NULL
                  echo  "<option >NULL</option>";

                  while ($facultyrow=mysqli_fetch_array($result)) {
                      $Coursename = $facultyrow["Name"];
                      $Courseid = $facultyrow["Courseid"];
                      echo "<option value='$Courseid'";
                      if(empty($id)==false)
                      {
                          if ($Courseid==$course4id)
                          {
                              echo "selected";
                          }
                      }
                      echo  "    >
                            $Coursename
                            </option>";
                  }
                  ?>
              </select>
          </td>
      </tr>
      <tr>
          <td class="select">Course 5:</td>
          <td ALIGN="center">
              <select name="course5id">
                  <?php
                  //$db=mysqli_connect("localhost","root","hu1015","authentication");
                  $sql = "select Courseid as Courseid,
                                CRN as Name
                          from tbl_course
                        ";
                  $result = mysqli_query($db,$sql);
                  //add NULL
                  echo  "<option >NULL</option>";

                  while ($facultyrow=mysqli_fetch_array($result)) {
                      $Coursename = $facultyrow["Name"];
                      $Courseid = $facultyrow["Courseid"];
                      echo "<option value='$Courseid'";
                      if(empty($id)==false)
                      {
                          if ($Courseid==$course5id)
                          {
                              echo "selected";
                          }
                      }
                      echo  "    >
                            $Coursename
                            </option>";
                  }
                  ?>
              </select>
          </td>
      </tr>
      <tr>
          <td class="select">Course 6:</td>
          <td ALIGN="center">
              <select name="course6id">
                  <?php
                  //$db=mysqli_connect("localhost","root","hu1015","authentication");
                  $sql = "select Courseid as Courseid,
                                CRN as Name
                          from tbl_course
                        ";
                  $result = mysqli_query($db,$sql);
                  //add NULL
                  echo  "<option >NULL</option>";

                  while ($facultyrow=mysqli_fetch_array($result)) {
                      $Coursename = $facultyrow["Name"];
                      $Courseid = $facultyrow["Courseid"];
                      echo "<option value='$Courseid'";
                      if(empty($id)==false)
                      {
                          if ($Courseid==$course6id)
                          {
                              echo "selected";
                          }
                      }
                      echo  "    >
                            $Coursename
                            </option>";
                  }
                  ?>
              </select>
          </td>
      </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register" value="Submit"></td>
     </tr>
</table>
</form>
</div>
</body>
</html>
