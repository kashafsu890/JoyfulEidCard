<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eid Mubarak Invitation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #0a1931;
            margin: 0;
            text-align: center;
        }
        .container {
            text-align: center;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .form-container input {
            padding: 10px;
            width: 80%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            background: #008000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .card {
            display: none;
            background: url('moon.jpg') no-repeat center center/cover;
            width: 320px;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }
        .eid-card {
            display: none;
            background: url('moons.jpg') no-repeat center center/cover;
            width: 320px;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s ease-in-out;
        }
        .eid-card h2, .card h2 {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Name Input Form -->
        <form id="eidForm">
            <div class="form-container" id="nameForm">
                <h2>Enter Your Name?</h2>
                <input type="text" id="userName" name="full_name" placeholder="Enter Your Name?" required>
                <button type="submit">Submit</button>
            </div>
        </form>
        
        <!-- Eid Mubarak Card -->
        <div class="card" id="firstCard" onclick="showEidCard()">
            <h2>🌙 Noor-e-Eid Mubarak</h2>
        </div>
        
        <div class="eid-card" id="secondCard">
            <h2>Eid Mubarak!</h2>
            <p><strong> May Allah fill your life with happiness and accept all your prayers. 🤲💖</strong></p>
            <p><strong>A heartfelt Eid greeting from Kashaf! 🌙</strong></p>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#eidForm").submit(function (e) {
                e.preventDefault(); // Prevent default form submission

                var name = $("#userName").val();
                if (name.trim() === "") {
                    alert("Please enter your name.");
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: "data_manage.php",
                    data: { full_name: name, Submit: true },
                    success: function (response) {
                        $("#nameForm").hide();
                        $("#firstCard").show();
                    },
                    error: function () {
                        alert("An error occurred while submitting the form.");
                    }
                });
            });
        });

        function showEidCard() {
            $("#firstCard").hide();
            $("#secondCard").show();
        }
    </script>
</body>
</html>
