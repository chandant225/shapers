<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h4>A new form has been submitted, please click on the link below to visit.</h4>
        {{ $fromEmail }}
        <a href="https://ktmshapers.org/admin/contactuses"><button>click here</button></a>

        <table>
            <tr>
                <th>Name</th>
                <td>{{ $fromName }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $fromEmail }}</td>
            </tr>
            {{-- <tr>
                <th>Phone</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>{{ $subject }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ $message }}</td>
            </tr> --}}
        </table>
    </div>
</body>

</html>
