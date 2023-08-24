<script setup>
import { ref, reactive } from 'vue'
import { router, usePage } from '@inertiajs/vue3'
import Close from 'vue-material-design-icons/Close.vue'
import ArrowLeft from 'vue-material-design-icons/ArrowLeft.vue'

const emit = defineEmits(['close'])

const form = reactive({
    text: null,
    file: null,
})

let isValidFile = ref(null)
let fileDisplay = ref('')
let textarea = ref('')
let error = ref({
    text: null,
    file: null,
})

const closeOverlay = () => {
    form.text = null
    form.file = null
    fileDisplay.value = ''
    emit('close')
}
</script>

<template>
    <div id="OverlaySection" class="fixed z-50 top-0 left-0 w-full h-screen bg-[#000000] bg-opacity-60 p-3">
        <button class="absolute right-3 cursor-pointer" @click="closeOverlay()">
            <Close :size="27" fillColor="#FFFFFF" />
        </button>

        <div class="max-w-6xl h-[calc(100%-100px)] mx-auto mt-10 bg-white rounded-xl">
            <div class="flex items-center justify-between w-full rounded-t-xl p-3 border-b border-b-gray-300">
                <ArrowLeft :size="30" fillColor="#000000" @click="closeOverlay()" />
                <div class="text-lg font-extrabold">New reel</div>
                <button @click="createPostFunc()" class=" text-lg text-blue-500 hover:text-gray-900 font-extrabold">
                    Share
                </button>
            </div>

            <div class="w-full md:flex h-[calc(100%-55px)] rounded-xl overflow-auto">
                <div class="flex items-center bg-gray-100 w-full h-full overflow-hidden">
                    <div v-if="!fileDisplay" class="flex flex-col items-center mx-auto">
                        <label for="file"
                            class="hover:bg-blue-700 bg-blue-500 rounded-lg p-2.5 text-white font-extrabold cursor-pointer">
                            Select From Computer
                        </label>
                    </div>
                </div>
            </div>
        </div>



    </div>
</template>