<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css " href="/all-views/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>

<body>

    <DIV class="topic">
        <h1>
            กรอกข้อมูลทะเบียนนักศึกษา
        </h1>
    </div>
    <div class="center">
        <div class="form">
            <form name="re">
                ชื่อ : <input type="text" id="FirstName" name="FirstName"> <br><br>
                นามสกุล : <input type="text"> <br><br>
                เพศ : <label for="male" >ชาย</label>
                <input type="radio" name="gender" id="male" value="male" checked>
                <label for="female" >หญิง</label>
                <input type="radio" name="gender" id="female" value="female" ><br><br>
                วันเกิด : <input type="date"><br><br>
                ที่อยู่ :
                <select>
                    <option value="">เลือกจังหวัด</option>
                    <% lists.forEach(function(user){ %>
                        <option value="<%= user.name_th %>">
                            <%= user.name_th %>
                        </option>
                        <% }) %>
                </select><br><br>
                <input type="reset" value="ล้างค่า"> <input type="submit" value="ยืนยันการส่ง"
                    onclick="alert(`คุณ ${document.getElementById('FirstName').value} บันทึกข้อมูลสำเร็จ`);"><br>
            </form>
    </div>


    </div>
</body>

</html>