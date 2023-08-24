<script setup>
import { ref } from 'vue';

import { Link } from '@inertiajs/vue3';
import Magnify from 'vue-material-design-icons/Magnify.vue';
import HeartOutline from 'vue-material-design-icons/HeartOutline.vue';
import HomeOutline from 'vue-material-design-icons/HomeOutline.vue';
import Compass from 'vue-material-design-icons/Compass.vue';
import SendOutline from 'vue-material-design-icons/SendOutline.vue';
import Plus from 'vue-material-design-icons/Plus.vue';
import AccountOutline from 'vue-material-design-icons/AccountOutline.vue';
import ChevronLeft from 'vue-material-design-icons/ChevronLeft.vue';
import AccountPlusOutline from 'vue-material-design-icons/AccountPlusOutline.vue';

</script>

<template>
    <div id="MainLayout" class="w-full h-screen">

        <div v-if="$page.url === '/'" id="TopNavHome"
            class="fixed z-30 md:hidden block w-full bg-white h-[61px] border-b border-b-gray-300">
            <div class="flex items-center justify-between h-full">

                <Link href="/">
                <img class="w-[105px] ml-6 cursor-pointer" src="/insta-logo.png" />
                </Link>


                <div class="flex items-center w-[50%]">
                    <div class="flex items-center w-full bg-gray-100 rounded-lg">
    
                        <Magnify class="pl-4" fillColor="#8E8E8E" :size="27" />
                        <input type="text" placeholder="Search"
                            class="bg-transparent w-full placeholder-[#8E8E8E] border-0 ring-0 focus:ring-0" />
    
                    </div>

                    <HeartOutline class="pl-4 pr-3" fillColor="#0000000" :size="27" />
                </div>

                
            </div>

        </div>
    </div>

    <slot />
</template>
