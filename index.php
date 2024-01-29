<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center ">
                    <h1>TODO LIST</h1>
                </div>
                <div class="col-12">
                    <ul class="list-group">
                        <li v-for="list, key in listona" :key="key" class="list-group-item">{{ list.nome }}</li>
                    </ul>
                </div>
                <div class="col-4 my-3">
                    <input class="form-control" type="text" placeholder="INSERISCI UNA TASK">
                </div>
                <div class="col-4 my-3">
                    <button class="btn btn-success">INVIA</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js" type="text/javascript"></script>
</body>

</html>