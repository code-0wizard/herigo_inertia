<script setup>
</script>

<template>
  <div>
    <header class="fixed top-0 right-0 left-0 z-[500]">
      <div class="w-4/5 h-20 mx-auto py-2.5 flex justify-between items-center ">
        <img :src="'/images/Herigo_logo.png'" alt="Logo" width="80px" height="60px">
        <div class="w-[25vw]">
          <input type="text" class="border-gray-300 p-2 rounded">
        </div>
      </div>
    </header>

    <main>
      <slot />
    </main>
  </div>
</template>
