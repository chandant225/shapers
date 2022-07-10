<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join us details</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        .btn-wrapper {
            padding: 20px 20px;
        }

        .pdf_btn {
            float: right;
            background-color: cadetblue;
            padding: 6px 14px;
            color: white;
            border-radius: 5px;
        }

        .cv_btn {
            float: right;
            background-color: green;
            padding: 6px 14px;
            color: white;
            border-radius: 5px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table style="width:100%">
            <tr>
                <th>Fullname</th>
                <td>{{ $details->fullname }}</td>
            </tr>
            <tr>
                <th>Date Of Birth</th>
                <td>{{ $details->date_of_birth }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $details->phone }}</td>
            </tr>
            <tr>
                <th>Social Media</th>
                <td>{{ $details->social_media }}</td>
            </tr>
            <tr>
                <th>Name Of Organization</th>
                <td>{{ $details->name_of_organization }}</td>
            </tr>
            <tr>
                <th>Expertise</th>
                <td>{{ $details->expertise }}</td>
            </tr>
            <tr>
                <th>Best_skills</th>
                <td>{{ $details->best_skills }}</td>
            </tr>
            <tr>
                <th>How did you get to know about us</th>
                <td>{{ $details->get_to_know_about }}</td>
            </tr>
            <tr>
                <th>Have you been involved in others groups</th>
                <td>{{ $details->involved_in_other_group }}</td>
            </tr>
            <tr>
                <th>Why do you want to join our community</th>
                <td>{{ $details->join_our_community }}</td>
            </tr>
            <tr>
                <th>If you had had the chance to lead a project what would it be and why?</th>
                <td>{{ $details->chance_to_lead_a_project }}</td>
            </tr>
            <tr>
                <th>If selected, how many hours per week will you be able to commit to hub activities.?</th>
                <td>{{ $details->hours_per_week }}</td>
            </tr>
        </table>
        <div class="btn-wrapper">
            <a href="{{ route('download_pdf', ['id' => $details->id]) }}"><button class="pdf_btn">Download
                    PDF</button></a>
            <a href="/storage/pdf_storage/{{ $details->cv_file }}"><button class="cv_btn">Download CV</button></a>

        </div>
    </div>
</body>

</html>
