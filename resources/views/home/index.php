<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Disable Previous Date JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 50%;
            margin: 0 auto;
        }

        h3 {
            margin: 0 auto;
            width: 50%;
        }

        span {
            color: red;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=time], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=date], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

<h3>Reservation Form</h3>

<div class="container">
    <form action="#">
        <label>Doktor Name<span>*</span></label>
        <input type="text" id="name" name="name" placeholder="Doktor name.." >

        <label>Doktor SurnameName<span>*</span></label>
        <input type="text" id="name" name="surname" placeholder="Doktor surname.." >

        <label>Doktor Branch<span>*</span></label>
        <input type="text" id="name" name="branch" placeholder="Doktor Branch.." >

        <label>Treatment Name<span>*</span></label>
        <input type="text" id="mail" name="tname" placeholder="Treatment Name..." >

        <label>Fiyat<span>*</span></label>
        <input type="text" id="name" name="fiyat" placeholder="Fiyat.." >


       <!-- <div class="car-body">
            @foreach($datalist as $rs)

            <p>{{$rs->name}}</p>

            @endforeach

        </div>-->


        <input type="submit" value="Submit">
    </form>
</div>

<!-- Disable Previous Date -->
<script language="javascript">
    var currentDt = new Date();
    var dd = String(currentDt.getDate()).padStart(2, '0');
    var mm = String(currentDt.getMonth() + 1).padStart(2, '0');
    var yyyy = currentDt.getFullYear();

    currentDt = yyyy + '-' + mm + '-' + dd;
    $('#date').attr('min',currentDt);
</script>


</body>
</html>
