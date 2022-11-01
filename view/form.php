<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>th, td {border: 1px solid black;font: 1em sans-serif;padding: 1rem;}</style>
    <style> form {padding:0.5rem;font: 1em sans-serif;}</style>
    <style> input {padding: 0.5rem; font: 1em sans-serif;}</style>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Form</title>
</head>
<body>
    <div id = 'div1' style="float: left;padding: 1rem;">
    <h1 style="padding:0.5rem;font: 1.5rem sans-serif;">Add New Record</h1>
    <form action = "../actions/submit.php" method="POST">
        <input type = "text" name = "fname" id = "fname" placeholder="Enter your full name...."  required>
        <br>
        <br>
        <input type = "text" name = "pnumber" id = "pnumber" placeholder="Enter your phone number" required>
        <br>
        <br>
        <input type = "Submit" name = "submit" id = "sub" value="Submit">
    </form>
    </div>
    <br>
    <div id = "div2" style="float: left;padding:1rem">
    <table>
        <thead>
        <tr>
            <th colspan="2">Phonebook Records</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Name</th>
        <th>Contact</th>
        </tr>
        <?php 
        include "../controllers/general_controller.php";
        $recs = sel_all_ctr("phonebook");
        
        foreach ($recs as $rec):
        ?>
        <tr>
        <td><?php echo $rec['pname']; ?></td>
        <td><?php echo $rec['pphoned']; ?></td>
        <td><?php echo '<a href="../actions/read.php?id='. $rec['pid'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-address-card-o"></span></a>';?></td>
        <td><?php echo '<a href="../actions/update.php?id='. $rec['pid'] .'" class="mr-3" title="Edit Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';?></td>
        <td><?php echo '<a onClick="return confirm(\'Are you sure you want to delete\');" href="../actions/delete.php?id='. $rec['pid'] .'" class="mr-3" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';?></td>
        
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>

        


    </div>
</body>
</html>