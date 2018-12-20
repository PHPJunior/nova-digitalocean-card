<template>
    <li  class="p-2 mb-2">
        <p class="flex">
            <span :class="'font-bold ' + incident.impact ">{{ incident.status.toUpperCase() }} [ {{ incident.impact.toUpperCase() }}]</span>
            <vueDateFormat class="ml-auto" :format="format" :time="incident.created_at"></vueDateFormat>
        </p>
        <p class="mt-1">{{ incident.name }}</p>
        <p v-if="incident.resolved_at" class="mt-1 text-80">
            Resolved <vueDateFormat format="yyyy-MM-dd hh:mm:ss" :time="incident.resolved_at"></vueDateFormat>
        </p>
        <button @click="fileModalOpen = true" type="button" class="mt-1 btn btn-link">Incident Details</button>

        <portal to="modals">
            <modal v-if="fileModalOpen">
                <div class="bg-white">
                    <div style="overflow: overlay;" class="p-3">
                        <div>
                            <button type="button" @click="fileModalOpen = false" class="btn text-danger float-right p-2">
                                X
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <h2 class="mb-4">
                                {{ incident.name }}
                            </h2>
                        </div>
                        <div>
                            <ul class="mt-2 overflow-y-scroll list-reset">
                                <li v-for="(update, index) in incident.incident_updates" :key="index" class="p-2 mb-2">
                                    <p class="font-bold">{{ update.status.toUpperCase() }}</p>
                                    <p class="mt-1">{{ update.body }}</p>
                                    <p v-if="update.created_at" class="mt-1 text-80">
                                        - <vueDateFormat format="yyyy-MM-dd hh:mm:ss" :time="update.created_at"></vueDateFormat>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </modal>
        </portal>
    </li>
</template>

<script>
    export default {
        props: [
            'incident'
        ],
        data () {
            return {
                fileModalOpen: false,
            }
        }
    }
</script>

<style scoped>
    .minor { color: #f1c40f}
    .major { color: #e67e22 }
    .none { color: #000 }
    .critical { color: #e74c3c}
</style>
