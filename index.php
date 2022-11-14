<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ve JS</title>
</head>
<body>
    
<div id="app">
    <input type="text" v-model="group_name"><br>
    <button type="button" @click.prevent.stop="ekle">Ekle</button>
    <div v-if="eklenenler">
        <ul>
            <li v-for="eklenen in eklenenler" :key="eklenen.id">{{eklenen.name}}</li>
        </ul>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
<script src="app.js"></script>
</body>
</html>