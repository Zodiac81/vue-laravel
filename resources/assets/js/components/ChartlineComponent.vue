<template>
    <div class="container">
        <div class="row">
            <button class="btn btn-default mb-2 col-md-pull-4" @click="update">Refresh</button>
            <div class="col-sm-12">
                <line-chart :chart-data="data" :height="100" :options="{responsive: true, maintainAspectRation: true}"></line-chart>
            </div>
        </div>
    </div>
</template>

<script>

    import LineChart from './LineChart.js'

    export default {
        components:{
            LineChart
        },
        data:function(){
            return {
                data: []
            }
        },
        methods:{
            update: function()
            {
                axios.get('/data-chart').then((response) =>{
                     console.log(response.data);
                    this.data = response.data
                })
            }
        },
        mounted()
        {
            this.update();

        }

    }
</script>