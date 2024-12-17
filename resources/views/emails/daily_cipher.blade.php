<!DOCTYPE html>
<html>
<head>
    <title>Daily Cipher</title>
</head>
<body>
    <h1>Daily Cipher Details</h1>
    <p><strong>Code:</strong> {{ $cipher['code'] }}</p>
    <!-- <p><strong>Morse Code:</strong> {{ $cipher['morse_code'] }}</p> -->
    <p><strong>Reward:</strong> {{ $cipher['reward'] }}</p>
    <p><strong>Valid For:</strong> {{ $cipher['valid_for']->format('Y-m-d') }}</p>
</body>
</html>
