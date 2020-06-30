<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <header>
            <h1>Buat Account Baru!</h1>
            <h2>Sign Up Form</h2>
        </header>

        <form action='/welcome' method="POST">
            @csrf
                <label>Firstname:</label><br><br>
                <input type="text" name="first_name"><br><br>
            
                <label>Lastname:</label><br><br>
                <input type="text" name="last_name"><br><br>

                <label>Gender:</label><br><br>
                <input type="radio" name="gender" value="0"> Male <br>
                <input type="radio" name="gender" value="1"> Female <br>
                <input type="radio" name="gender" value="2"> Other <br><br>  

                <label>Nationality:</label><br><br> 
                <select>
                    <option>Indonesia</option>
                    <option>Malaysia</option>
                    <option>Singapura</option>
                    <option>Other</option> 
                </select><br><br> 

                <label>Language Spoken:</label><br><br> 
                <input type="checkbox" name="language" value="0"> Bahasa Indonesia <br>
                <input type="checkbox" name="language" value="1"> English <br>
                <input type="checkbox" name="language" value="2"> Other <br><br>

                <label>Bio:</label><br><br> 
                <textarea cols="40" rows="10"></textarea><br><br> 

                <button type="submit">Sign Up</button>
        </form>
    </body>
</html>