<template>
    <loading-card :loading="loading" class="px-4 py-4" style="height: 100%;">
        <div class="flex mb-4">
            <h2 class="mr-3 text-base text-80 font-bold">Digitalocean - Unresolved Incidents</h2>
        </div>
        <div v-if="!data.incidents" class="flex items-center">
            <p class="text-80 font-bold">No Data</p>
        </div>
        <ul v-else class="incidents-list mt-2 overflow-y-scroll list-reset">
            <incident v-for="(incident, index) in data.incidents" :key="index" :incident="incident" />
        </ul>
    </loading-card>
</template>

<script>
    import Incident from './partials/_incident'
    export default {
        components:{ Incident },
        props: [
            'card',

            // The following props are only available on resource detail cards...
            // 'resource',
            // 'resourceId',
            // 'resourceName',
        ],

        data () {
            return {
                data: '',
                loading: true,
                format: 'yyyy-MM-dd',
            }
        },

        methods: {
            getDOIncidents () {
                Nova.request().get('https://s2k7tnzlhrpw.statuspage.io/api/v2/incidents/unresolved.json').then(response => {
                    this.loading = false
                    this.data = response.data
                })
            }
        },

        mounted () {
            this.getDOIncidents()
        }
    }
</script>

<style scoped>
    .incidents-list{
        height: 15rem;
    }
</style>
