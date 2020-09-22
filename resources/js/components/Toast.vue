<template>
    <div :class="'toast ' + type" role="alert" aria-live="assertive" aria-atomic="true" :data-delay="delay" style="position: relative; width: 100%;">
        <div class="toast-header">
            <strong class="mr-auto">{{title}}</strong>
            <small class="text-muted">{{time}}</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            {{message}}
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'toast'
        ],
        data() {
            
        },

       methods: {
           
       },

       computed: {
           type() {
               return this.toast.type;
           },
           delay() {
               return this.toast.delay;
           },
           title() {
               return this.toast.title;
           },
           time() {
               return this.toast.time;
           },
           message() {
               return this.toast.message;
           }
       }
    }


</script>
