<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            padding: 8px 12px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php  
        $name = "Safiah Yusof";
        $matric = "AI230114";
        $course = "BIM";
        $year = "Year 2";
        $address = "No 12, Jalan Seruling Jaya 1,Taman Seruling Jaya, 70200 Seremban, Negeri Sembilan";
    ?>

    <h2>Faculty of Computer Science and Information Technology</h2>
    <h3>BIC21203 Web Development</h3>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>  
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>  
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>  
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>  
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>  
        </tr>
    </table>
</body>
</html>
