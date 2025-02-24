<template>
    <Link href="/">Main Page </Link>&nbsp;
    <Link href="/hello">Show Page </Link>

    <div>The page with time {{ timer }}</div>

    <slot>Default</slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

//As defined this way the timer variable is an object
const timer = ref(0)
setInterval(() => timer.value++, 1000)
</script>