<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="myform">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <input type="hidden" name="student[]" value="<?php echo $i; ?>"> Student <?php echo $i; ?> &nbsp;&nbsp;
            <input type="radio" name="keys[]"> <br><br>
        <?php endfor; ?>

        <input type="submit" value="Submit">
    </form>

    <script>
        var myform = document.getElementById('myform');
        var radios = document.querySelectorAll("input[type='radio']");

        myform.onsubmit = function(evt){
            let data = new FormData(myform);
            data.delete('keys[]');

            for(let i = 0; i < radios.length; i++){
                if(radios[i].checked){
                    data.append(`keys[]`, 1);
                } else{
                    data.append(`keys[]`, 0);
                }
            }

            fetch('http://localhost:81/keyfile/mysubmit.php', {
                method: 'POST',
                body: data
            }).then(res => res.json()).then(me => console.log(JSON.stringify(me)));
            
            return false;
        }
    </script>
</body>
</html>