<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #333;
        }

        h1 {
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
        }

        .section {
            margin-bottom: 20px;
        }

        .job-title {
            font-weight: bold;
        }

        .contact-info,
        .skills,
        .education,
        .experience {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>{{ $resume->name }}</h1>
        <p>{{ $resume->email }}</p>
        <p>{{ $resume->phone }}</p>
        <p>{{ $resume->address }}</p>

        <div class="section">
            <h2>Objective</h2>
            <p>{{ $resume->objective }}</p>
        </div>

        <div class="section">
            <h2>Core Skills</h2>
            <ul class="skills">
                @foreach($resume->core_skills as $skill)
                <li>{{ $skill }}</li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <h2>Experience</h2>
            <ul class="experience">
                @foreach($resume->experience as $job)
                <li>
                    <span class="job-title">{{ $job['title'] }} - {{ $job['company'] }}</span> ({{ $job['start_date'] }} - {{ $job['end_date'] }})
                </li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <h2>Educational Background</h2>
            <ul class="education">
                @foreach($resume->education as $edu)
                <li>
                    <span class="job-title">{{ $edu['degree'] }}</span> ({{ $edu['years'] }})
                    <p>{{ $edu['school'] }}</p>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <h2>PERSONAL INFORMATION</h2>
            <ul>
                <li>Date of Birth: {{ $resume->personal_information['dob'] }}</li>
                <li>Place of Birth: {{ $resume->personal_information['place_of_birth'] }}</li>
                <li>Age: {{ $resume->personal_information['age'] }} years old</li>
                <li>Sex: {{ $resume->personal_information['sex'] }}</li>
                <li>Nationality: {{ $resume->personal_information['nationality'] }}</li>
                <li>Civil Status: {{ $resume->personal_information['civil_status'] }}</li>
                <li>Height: {{ $resume->personal_information['height'] }}</li>
                <li>Weight: {{ $resume->personal_information['weight'] }}</li>
            </ul>
        </div>

        <div class="section">
            <h2>Certifications</h2>
            <ul>
                @foreach($resume->certifications as $cert)
                <li>{{ $cert }}</li>
                @endforeach
            </ul>
        </div>
    </div>

</body>

</html>