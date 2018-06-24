<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <script src="validation.js"></script>
    
</head>
<body>

<form method="post" action="display.php" enctype="multipart/form-data">
User ID*: <input type="text" name="id" id="id" pattern=".{5,12}" required placeholder="5-12 symbols" maxlength="12"> <br />
Password*: <input type="password" name="passw" id="passw" pattern=".{7,12}" maxlength="12" required placeholder="7-12 symbols"> <br />
Name*:  <input type="text" name="name" id="name" pattern="[A-Za-z ]+" required> <br />
Address:  <input type="text" name="address" id="address"> <br />
Country*:  <select name="country" id="country" required>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Germany">Germany</option>
    <option value="other">Other</option>
</select><br />
ZIP Code:  <input type="text" name="zip" id="zip" > <br />
Email*:  <input type="email" name="email" id="email" required><br />
Sex*:  Male <input type="radio" name="sex" value="male"> Female<input type="radio" name="sex" value="female"> <br />
Language:  English<input type="checkbox" name="lang" value="lang-eng" checked> Non-English<input type="checkbox" name="lang" value="lang-noneng"><br />
About:  <textarea name="about" id="about" cols="30" rows="10"></textarea> <br />
User Image:  <input type="file" name="fileToUpload" id="fileToUpload"> <br />
<input type="submit" value="Submit">

</form>

<script>

</script>
    
</body>
</html>