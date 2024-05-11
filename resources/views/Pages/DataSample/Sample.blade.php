<!DOCTYPE html>
<html>

<head>
    <title>Data Sample</title>
    <!-- Tambahkan link CSS atau style sesuai kebutuhan -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2>Data Sample</h2>

    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Temperature</th>
                <th>Kelembapan</th>
                <th>Tanah</th>
                <th>Kualitas Tanah</th>
                <th>Gas</th>
                <th>Kualitas Gas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($samples as $sample)
                <tr>
                    <td>{{ $sample->tanggal }}</td>
                    <td>{{ $sample->hari }}</td>
                    <td>{{ $sample->jam }}</td>
                    <td>{{ $sample->temperature }}</td>
                    <td>{{ $sample->kelembapan }}</td>
                    <td>{{ $sample->tanah }}</td>
                    <td>{{ $sample->kualitas_tanah }}</td>
                    <td>{{ $sample->gas }}</td>
                    <td>{{ $sample->kualitas_gas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>