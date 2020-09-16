<template>
    <div>
        <button type="button" v-on:click="addInput" >Click Me!</button>
        <h1>Hello</h1>
        <p class="hello">Hi {{ name || '匿名' }}</p>
        <p>{{ msg }}</p>
        <div v-for="input in inputs" class="form-input"></div>
    </div>
</template>

<script>

export default {
    props: ['name'],
    data () {
        return {
            msg: 'This is a Laravel with Vue Demo.',
            inputs: [],
            nextInputId: 0
        }
    },
    methods: {
        addInput: function () {
            this.inputs.push({
                id: this.nextTodoId++,
            })
            console.log(this.inputs);
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
