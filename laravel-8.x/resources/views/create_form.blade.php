<!DOCTYPE html>
<html>
    <body>
        <form action='/create-user' method="POST">
            @csrf
            First Name: <input type="text" name="first_name" /><br />
            Last Name: <input type="text" name="last_name" /><br />
            Email Address: <input type="text" name="email" /><br />
            <input type="submit" value="Create User" />
        </form>
    </body>
</html>