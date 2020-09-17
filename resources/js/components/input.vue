<template>
    <div>
        <label>{{title}}</label>
        <input v-bind:id="id" type="text"/>
    </div>
</template>
<script>

export default {
    props: ['title', 'id'],
    data () {
        return {};
    }
}
</script>
