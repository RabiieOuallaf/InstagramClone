<script setup>
import { computed, toRefs } from 'vue'
import { usePage } from '@inertiajs/vue3'

import Heart from 'vue-material-design-icons/Heart.vue'
import HeartOutline from 'vue-material-design-icons/HeartOutline.vue'
import CommentOutline from 'vue-material-design-icons/CommentOutline.vue'
import SendOutline from 'vue-material-design-icons/SendOutline.vue'
import BookmarkOutline from 'vue-material-design-icons/BookmarkOutline.vue'
</script>


<template>
    <div class="flex z-20 items-center justify-between">
        <div class="flex items-center">
            <button class="-mt-[14px]">
                <HeartOutline class="pl-3 cursor-pointer" :size="30"/>
            </button>
        </div>
    </div>

</template>


<style>

    </style>