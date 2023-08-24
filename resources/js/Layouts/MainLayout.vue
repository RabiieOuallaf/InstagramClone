<script setup>
import { ref } from 'vue';

import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div id="MainLayout" 
        class="w-full h-screen">

        <div v-if="$page.url === '/' " id="TopNavHome" class="fixed z-30 md:hidden block w-full bg-white h-[61px] border-b border-b-gray-300">
            <div class="flex items-center justify-between h-full">

                <Link href="/">
                    <img class="w-[105px] ml-6 cursor-pointer" src="/insta-logo.png"/>
                </Link>

                <div class="flex items-center w-[50%]">
                    
                    

                </div>
            </div>
        </div>
    </div>

    <slot />
</template>
