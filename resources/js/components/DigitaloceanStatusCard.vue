<template>
    <loading-card :loading="loading" v-if="data" :class="'flex flex-col items-center justify-center status-'+ data.status.indicator">
        <div class="px-3 py-3">
            <h1 class="text-center text-3xl text-80 font-light text-white">
                {{ data.status.description }}
            </h1>
        </div>
    </loading-card>
</template>

<script>
export default {
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
            loading: true
        }
    },

    methods: {
        getDOStatus () {
            Nova.request().get('https://s2k7tnzlhrpw.statuspage.io/api/v2/status.json').then(response => {
                this.loading = false
                this.data = response.data
            })
        }
    },

    mounted() {
        this.getDOStatus()
    },
}
</script>

<style scoped>
    .status-none {
        background-color: #2ecc71
    }

    .status-critical {
        background-color: #e74c3c
    }

    .status-major {
        background-color: #e67e22
    }

    .status-minor {
        background-color: #f1c40f
    }

    .status-maintenence {
        background-color: #3498db
    }
</style>
