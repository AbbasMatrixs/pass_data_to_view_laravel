
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f5f7;
            padding: 30px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 14px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f0f1f4;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .role {
            background: #e9e9ee;
            padding: 5px 9px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h2>Student Portal</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>About</th>
            </tr>
        </thead>

        <tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['email'] }}</td>
            <td>{{ $student['role'] }}</td>
            <td>{{ $student['about'] }}</td>
        </tr>
    @endforeach
</tbody>
    </table>
</body>
</html>
