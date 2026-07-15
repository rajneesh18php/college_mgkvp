<!DOCTYPE html>
<html>
<head>
    <title>Engineering College Timetable</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            padding: 20px;
        }
        .timetable {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
            border-radius: 10px;
            overflow: hidden;
        }
        .timetable th, .timetable td {
            border: 2px solid #0077b6;
            padding: 12px;
            text-align: center;
        }
        .timetable th {
            background: #00b4d8;
            color: white;
        }
        .timetable caption {
            font-size: 20px;
            font-weight: bold;
            margin: 10px;
            color: #023e8a;
        }
        tr:nth-child(even) { background: #f9f9f9; }
    </style>
</head>
<body>

<table class="timetable">
    <caption>Engineering College Timetable</caption>
    <thead>
        <tr>
            <th>Day</th>
            <th>09:00 - 10:00</th>
            <th>10:00 - 11:00</th>
            <th>11:00 - 12:00</th>
            <th>12:00 - 01:00</th>
            <th>01:00 - 02:00</th>
            <th>02:00 - 03:00</th>
            <th>03:00 - 04:00</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>Monday</b></td>
            <td>Maths</td>
            <td>Physics</td>
            <td>Electronics</td>
            <td>DBMS</td>
            <td rowspan="5"><b>Lunch Break</b></td>
            <td>Computer Networks</td>
            <td>Programming Lab</td>
        </tr>
        <tr>
            <td><b>Tuesday</b></td>
            <td>DBMS</td>
            <td>Maths</td>
            <td>Operating Systems</td>
            <td>Electronics</td>
            <td>Web Development</td>
            <td>Workshop</td>
        </tr>
        <tr>
            <td><b>Wednesday</b></td>
            <td>Operating Systems</td>
            <td>Physics</td>
            <td>Maths</td>
            <td>DBMS Lab</td>
            <td>AI & ML</td>
            <td>Project Work</td>
        </tr>
        <tr>
            <td><b>Thursday</b></td>
            <td>Electronics</td>
            <td>Maths</td>
            <td>Computer Networks</td>
            <td>DBMS</td>
            <td>Workshop</td>
            <td>Sports</td>
        </tr>
        <tr>
            <td><b>Friday</b></td>
            <td>Web Development</td>
            <td>DBMS</td>
            <td>Operating Systems</td>
            <td>AI & ML</td>
            <td>Seminar</td>
            <td>Library</td>
        </tr>
    </tbody>
</table>

</body>
</html>
