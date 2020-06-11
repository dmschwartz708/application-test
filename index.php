<?php
$people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
 );
 ?>
<!doctype html>
<html>
<head>
    <title>Application Test - Dave Schwartz</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
    <table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>&nbsp;</th>
    </tr>
<?php foreach($people as $person): ?>
    <tr>
        <td><?= $person['id']; ?></td>
        <td><?php echo htmlentities($person['first_name']); ?></td>
        <td><?php echo htmlentities($person['last_name']); ?></td>
        <td><?php echo htmlentities($person['email']); ?></td>
        <td><button class="table_button" data-name="<?php echo trim($person['first_name']) . " " . trim($person['last_name']); ?>" data-email="<?= $person['email']; ?>">Info</button></td>
    </tr>
<?php endforeach; ?>
    </table>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.table_button').click(function() {
            alert('Name: ' + $(this).attr('data-name') + ' Email: ' + $(this).attr('data-email'))
        })
    });
    </script>
 </body>
 </html?