<template>
    <span class="text-blue-300">{{ displayText }}</span>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const words = ['Restaurantes', 'Tiendas', 'Farmacias', 'Droguerías', 'Bares'];
const displayText = ref('');
let currentWordIndex = 0;
let currentCharIndex = 0;
let isDeleting = false;
let typingInterval;

const TYPE_SPEED = 150;
const DELETE_SPEED = 100;
const PAUSE_BEFORE_DELETE = 2000;

const typeText = () => {
    const currentWord = words[currentWordIndex];

    if (!isDeleting) {
        displayText.value = currentWord.substring(0, currentCharIndex + 1);
        currentCharIndex++;

        if (currentCharIndex === currentWord.length) {
            isDeleting = true;
            setTimeout(() => {
                typingInterval = setInterval(typeText, DELETE_SPEED);
            }, PAUSE_BEFORE_DELETE);
            clearInterval(typingInterval);
            return;
        }
    } else {
        displayText.value = currentWord.substring(0, currentCharIndex - 1);
        currentCharIndex--;

        if (currentCharIndex === 0) {
            isDeleting = false;
            currentWordIndex = (currentWordIndex + 1) % words.length;
        }
    }
};

onMounted(() => {
    typingInterval = setInterval(typeText, TYPE_SPEED);
});

onBeforeUnmount(() => {
    clearInterval(typingInterval);
});
</script>