<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="thanks.php" method="post">

    <div>
        <label  for="surname">Surname :</label>
        <input  type="text"  id="surname"  name="surname">
    </div>
    <div>
        <label  for="firstname">First Name :</label>
        <input  type="text"  id="firstname"  name="firstname">
    </div>
    <div>
        <label  for="mail">E-mail :</label>
        <input  type="text"  id="mail"  name="mail">
    </div>
    <div>
        <label  for="phone">Phone no :</label>
        <input  type="text"  id="phone"  name="phone">
    </div>
    <div>
    <label  for="subject">Subject :</label>
        <select id="subject" name="subject">
            <option value="English">English</option>
             <option value="math">math</option>
             <option value="art">art</option>
             <option value="science">science</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit" >Message</button>
    </div>
</form>

</body>
</html>

