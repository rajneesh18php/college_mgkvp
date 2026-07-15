<?php
// Set up dummy timetable array (you can replace with DB data later)
$timetable = [
    "Monday" => ["Maths", "Physics", "Electronics", "DBMS", "Computer Networks", "Programming Lab"],
    "Tuesday" => ["DBMS", "Maths", "Operating Systems", "Electronics", "Web Development", "Workshop"],
    "Wednesday" => ["Operating Systems", "Physics", "Maths", "DBMS Lab", "AI & ML", "Project Work"],
    "Thursday" => ["Electronics", "Maths", "Computer Networks", "DBMS", "Workshop", "Sports"],
    "Friday" => ["Web Development", "DBMS", "Operating Systems", "AI & ML", "Seminar", "Library"]
];
?>

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
            <th>11:00 - 12:
