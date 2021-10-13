<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Vue Dischi metodo Json</title>
</head>
<body>
    <div id="root">
        <div class="header">
        </div>
        <div class="box-fluid">
            <div class="box">
                <div class="box-vinyl" v-for="(vinyl,index) in vinyls" :key="index">
                        <div class= "box-vinyl-top" >
                            <img :src="`${vinyl.poster}`">
                        </div>
                        <div class= "box-vinyl-bottom" >
                            <h1>{{vinyl.title}}</h1>
                            <p>{{vinyl.author}}</p>
                            <p>{{vinyl.year}}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>