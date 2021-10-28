<template>
    <div class="container">
        <phone-component/>
        <component-2/>
    </div>
</template>

<script>
    export default {
        name: 'ExampleComponent',
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
