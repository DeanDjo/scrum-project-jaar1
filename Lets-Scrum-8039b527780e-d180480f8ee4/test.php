<!DOCTYPE html>
<html>
<head>
    <title>Custom GET Request</title>
    <script>
        function getRecord() {
            // Get the input field element
            var id = document.getElementById('recordId').value;
            var url;

            // Determine the URL based on whether an ID was provided
            if (id === "") {
                url = 'http://localhost/Scrum/1/Lets-Scrum-8039b527780e-d180480f8ee4/api/house_availability_api.php';
            } else {
                url = 'http://localhost/Scrum/1/Lets-Scrum-8039b527780e-d180480f8ee4/api/house_availability_api.php?id=' + id;
            }

            // Perform the GET request using fetch API
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Display the response in the result div
                    document.getElementById('result').innerHTML = JSON.stringify(data, null, 2);
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('result').innerHTML = 'Error: ' + error;
                });
        }
    </script>
</head>
<body>
    <h1>Custom GET Request</h1>
    <input type="text" id="recordId" placeholder="Enter ID (leave blank for all records)">
    <button onclick="getRecord()">Get Record</button>
    <pre id="result"></pre>
</body>
</html>
