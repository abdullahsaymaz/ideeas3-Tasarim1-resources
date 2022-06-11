<template>
    <div>
        <a class="default-font-color h1" :href="link">
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
    </div>
</template>


<script>


    export default {
        props: ['goTo'],

        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                origin: window.location.origin + '/home'
            }
        },

        computed: {
            link() {
                return window.location.origin + (this.goTo ?? '/home');
            }
        }
    }


</script>
