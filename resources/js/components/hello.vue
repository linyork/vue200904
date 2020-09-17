<template>
    <div>
        <button type="button" v-on:click="addInput">Click Me!</button>
        <h1>Hello</h1>
        <p class="hello">Hi {{ name || '匿名' }}</p>
        <p>{{ msg }}</p>
        <div class="form-input">
        </div>
    </div>
</template>

<script>

export default {
    props: ['name', 'comp'],
    data () {
        return {
            msg: 'This is a Laravel with Vue Demo.',
            inputs: [],
            nextInputId: 0,
        }
    },
    components: {},
    methods: {
        addInput: function () {
            console.log(this);
            const parts = Vue.extend(Vue.component(this.comp));
            const toMount = document.createElement('DIV');
            this.$el.querySelector('.form-input').appendChild(toMount);
            const p = new parts()
            p.$mount(toMount);
            console.log(p);
        }
    },
}
</script>

<style>
.hello {
    font-size: 2em;
    color: green;
}
</style>
