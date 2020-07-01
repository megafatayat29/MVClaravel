<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div>
        <h1>Buat Account Baru!</h1>
        <h4>Sign Up Form</h4>
    </div>

    <form action="/welcome" method="POST">
        @csrf
        <label for="nama_depan">First Name:</label> <br><br>
        <input name="nama_depan" type="text" id="nama_depan"><br><br>
        <label for="nama_belakang">Last Name:</label> <br><br>
        <input name="nama_belakang" type="text" id="nama_belakang"><br><br>
        <Label>Gender:</label><br><br>
        <input type="radio" name="gender" value="0"> Male <br>
        <input type="radio" name="gender" value="1"> Female <br>
        <input type="radio" name="gender" value="3"> Other <br><br>
        <label>Nationality:</label><br><br>
        <select>
            <option value="Indonesian">Indonesian</option>
            <option value="Arabian">Arabian</option>
            <option value="England">England</option>
        </select><br><br>
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="Bahasa" value="0"> Bahasa Indonesia <br>
        <input type="checkbox" name="Bahasa" value="1"> English <br>
        <input type="checkbox" name="Bahasa" value="2"> Other <br>
        <p>Bio:</p>
        <textarea cols="22" rows="7"></textarea><br><br>
        <button type="submit">Sign Up</button>
    </form> 
</body>
</html>