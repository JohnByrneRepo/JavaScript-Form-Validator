<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
    <div class="users"></div>
    <script src="js/jquery-1.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            // This user data could be populated from an sql query
            // into objects or arrays, but this is an offline test.
            // Non-allowed xhttp request when offline in Chrome:
            // $.getJSON('data/users.json', function(data) {
            var data = {"users":[
            {
                "profileName":"WebDeveloper",
                "firstName":"John",
                "lastName":"Byrne",
                "email":"html5css3@outlook.com",
                "password":"pword",
                "joinedMonth":"Jun",
                "joinedDay":10,
                "joinedYear":2010
            },
            {
                "profileName":"BlogJoe",
                "firstName":"Joe",
                "lastName":"Bloggs",
                "email":"jbl@gmail.com",
                "password":"jbpw87",
                "joinedMonth":"Jul",
                "joinedDay":12,
                "joinedYear":2008
            },
            {
                "profileName":"SueJones",
                "firstName":"Sue",
                "lastName":"Jones",
                "email":"test@test.com",
                "password":"p12345",
                "joinedMonth":"Aug",
                "joinedDay":26,
                "joinedYear":2000
            }
            ]};
            var output="<table class=users-table>";
                output+="<tr class=table-row-title>"
                       +"<td align=center colspan=3><strong>Existing Users</strong></td>"
                       +"</tr>";
            var odd=true;
            for (var i in data.users) {
                  output+="<tr ";
                  if(odd)  output+="class=table-row-odd";
                  if(!odd) output+="class=table-row-even";
                  odd=!odd;
                  output+="><td width=33% align=center>" 
                        + data.users[i].firstName + " " 
                        + data.users[i].lastName 
                        + "</td><td width=33% align=center>"
                        + data.users[i].email
                        + "</td><td width=33% align=center>"
                        + data.users[i].password + "</tr>";
            }
            output+="</table>";
            document.getElementsByClassName("users")[0].innerHTML=output;
            // });
        });
    </script>
</body>
</html>