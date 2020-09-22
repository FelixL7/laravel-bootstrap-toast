<template>
        <div class="container result_details">
            <div aria-live="polite" aria-atomic="true" style="position: absolute; top: 10px; right: 10px; width: 300px;">
                <toast v-for="toast in toasts" :key="toast" :toast="toast"></toast>
            </div>
        </div>
</template>

<script>
    export default {
        data() {
            return {
                toasts: []
            }
        },

       methods: {
           
       },

       computed: {
           toasts() {
               return this.$store.state.toaster.toasts;
           }
       }
    }


</script>
