import vueDateFormat from 'vue-date-format'

Nova.booting((Vue, router) => {
    Vue.use(vueDateFormat)
    Vue.component('digitalocean-status-card', require('./components/DigitaloceanStatusCard'));
    Vue.component('digitalocean-incidents-card', require('./components/DigitaloceanIncidentsCard'));
    Vue.component('digitalocean-unresolved-incidents-card', require('./components/DigitaloceanUnresolvedIncidentsCard'));
})
