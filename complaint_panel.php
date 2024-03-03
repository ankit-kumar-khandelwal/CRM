<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Complaint Panel</title>
</head>
<body>
    <div class="compalint outer">
        <form class="inner">
            <h1>Complaint Panel</h1>
            <div class="topic">
                <h4>Complaint Topic :</h4>
                <input type="text" class="complaintInput" readonly>
            </div>
            <div class="POC">
                <h4>POC Contact :</h4>
                <input type="text" class="complaintInput" readonly>
            </div>
            <h4>Complaint Description :</h4>
            <textarea id="textarea" cols="30" rows="10"></textarea>
            <button id="complaintSubmit">Submit</button>
        </form>
    </div>
</body>
</html>