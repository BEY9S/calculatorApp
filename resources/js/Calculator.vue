<script setup>
    import { reactive } from 'vue'
    import { OPERAND } from './constants.ts'

    const result = reactive({expr: ''});
    const addOperand = (operand) => {
        result.expr = result.expr + String(operand);
    };

    const calculate = () => {
        result.expr = eval(result.expr);
    }

    const clear = () => {
      result.expr = '';
    }
</script>

<template>
    <div class="grid grid-cols-1 py-2">
        {{ result.expr }}
    </div>
    <div class="grid grid-cols-4 gap-4 gap-x-8 gap-y-4">
        <button
            class="p-2 w-full rounded bg-gray-800/20 hover:bg-gray-800/50"
            v-for="opera in OPERAND"
            v-on:click="addOperand(opera)">
            {{ opera }}
        </button>
    </div>
    <div class="grid grid-cols-2 gap-4 gap-x-8 gap-y-4 py-2">
        <button
            class="p-2 w-full rounded bg-gray-800/20 hover:bg-gray-800/50"
            v-on:click="clear">
            CLEAR
        </button>
        <button
            class="p-2 w-full rounded bg-gray-800/50 hover:bg-gray-800/20"
            v-on:click="calculate">
            =
        </button>
    </div>
</template>

<style scoped>

</style>
