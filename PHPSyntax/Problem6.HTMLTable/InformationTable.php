<?php
    $name = "Gosho";
    $phone = "0882-321-423";
    $age = 24;
    $address = "Hadji Dimitar";
?>
<!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <style>
                table td.left {border-left: 1px solid black; border-bottom: 1px solid black; text-align: left; font-weight: bold; background-color: #FF9C00;}
                table td.leftTop {border: 1px solid black; border-right: none; text-align: left; font-weight: bold; background: #FF9C00;}
                table td.right {border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; text-align: right;}
                table td.rightTop {border: 1px solid black; text-align: right;}
            </style>
        </head>
        <body>
            <table cellspacing=0 cellpadding=5>
                <tr>
                    <td class = "leftTop">Name</td>
                    <td class = "rightTop"><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td class = "left">Phone number</td>
                    <td class = "right"><?php echo $phone; ?></td>
                </tr>
                <tr>
                    <td class = "left">Age</td>
                    <td class = "right"><?php echo $age; ?></td>
                </tr>
                <tr>
                    <td class = "left">Address</td>
                    <td class = "right" class = "last"><?php echo $address; ?></td>
                </tr>
            </table>
        </body>
    </html>