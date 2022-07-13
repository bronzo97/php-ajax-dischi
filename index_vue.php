<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <title>INDEX VUE</title>
</head>
<body>
    <div id="app">
        <div class="container">
        <h1>{{ pageTitle }}</h1>
        <ul>
            <li v-for="disco in db">
            <img :src="disco.poster" alt="" srcset="">
            {{disco.title}}
            {{disco.author}}
            {{disco.year}}
            </li>
        </ul>
        </div>
    </div>

    <script src="js/vue.js"></script>
</body>
</html>