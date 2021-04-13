<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form id="submission" method="POST" action="//public.bc.fi/s2100134/contact.php">
<div>
<label for="username">Username</label>
<input type="text" name="username" id="username" placeholder="Your username">
</div>
<div>
<label for="password">Password</label>
<input type="password" name="password" id="password" placeholder="Your password">
</div>
<div>
<label for="massage">Send me a message</label>
<textarea name="message" id="" cols="30" rows="10"></textarea>
</div>
<div>
<button type="submit">Send email</button>
</div>

</form>

<!-- <script>
document.getElementById('submission').addEventListener('submit', (event) => {
    // Preventing default behaviour
    event.preventDefault();
    const username = event.target.username.value;
    const password = event.target.password.value;
    const message = event.target.message.value;

    fetch('/contact.php',{
        body: JSON.stringify( {
            username,
            password,
            message
        })
    })

    console.log(username, password, message)
})
</script> -->

</body>
</html>
