<template>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="url in url_data">
                    <td>{{url.title}}</td>
                    <td>{{url.url}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:[
            'url_data'
        ],
        methods:{
            update: function()
            {
                //console.log(this.url_data);
            }
        },
        mounted()
        {
            this.update();

        }
    }
</script>
