<template>
    <div class="container">
        <button class="btn btn-default mb-2 col-md-pull-4" @click="update" v-if="!is_refresh">Refresh = {{id}}</button>
        <span class="badge badge-primary mb-1" v-if="is_refresh">Refresging ...</span>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="url in urldata">
                    <td>{{url.title}}</td>
                    <td>{{url.url}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
       data:function(){
           return {
                    urldata: [],
                    id: 0,
                    is_refresh: false
                }
       },
        methods:{
            update: function()
            {
                this.is_refresh = true;
                axios.get('/get-json').then((response) =>{

                       // console.log(response);
                        this.urldata = response.data,
                        this.is_refresh = false;
                        this.id++
                })
            }
        },
        mounted()
        {
            this.update();

        }
    }
</script>
