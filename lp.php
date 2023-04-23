<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LESSON PLAN AND LECTURE MATERIAL</title>
    <link rel="icon" type="image/x-icon" 
    href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOzo0CZyGwFCr4D2X6wh5IxMa6N_GdlpU_Z0sEvp0&usqp=CAE&s/images/favicon.ico">
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 40px;
}
table {
  border-spacing: 10px;
}
</style>
</head>
<body>
<p id="time"></p>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
var timestamp = '<?=time();?>';
function updateTime(){
  $('#time').html(Date(timestamp));
  timestamp++;
}
$(function(){
  setInterval(updateTime, 1000);
});
</script>
    <div>
        <h1>SYLLABUS 2022-2023</h1>
        <table>
            <tr>
                <th>SUBJECT CODE</th>
                <th>SUBJECT</th>
                <th>LECTURE MATERIAL</th>
</tr>
<tr>
    <td>22MA101</td>
    <td>ENGINEERING MATHEMATICS</td>
    <td><a href="lecture_material.php">LM</a>
    </td>
</tr>
<tr>
    <td>22PH102</td>
    <td>ENGINEERING PHYSICS</td>
    <td><a href="lecture_material.php">LM</a>
</tr>
<tr>
    <td>22CH103</td>
    <td>ENGINEERING CHEMISTRY</td>
    <td><a href="lecture_material.php">LM</a>
</tr>
<tr>
    <td>22GE001</td>
    <td>COMPUTATIONAL KNOWLEDGE</td>
    <td><a href="lecture_material.php">LM</a>
</tr>
<tr>
    <td>22GE003</td>
    <td>BASICS OF ELECTRICAL ENGINEERING</td>
    <td><a href="lecture_material.php">LM</a>
</tr>
<tr>
    <td>22GE004</td>
    <td>BASICS OF ELECTRONICS ENGINEERING</td>
    <td><a href="lecture_material.php">LM</a>
</tr>
</body>
</html>