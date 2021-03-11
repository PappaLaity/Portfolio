<template>
<div class="container">
    <h3>Ce que je fais??</h3> <br>

    <nav class="nav nav-tabs">
        <a class="nav-item nav-link active pl-5 pr-5" href="#p1" data-toggle="tab">
            WEB 
        </a>
        <a class="nav-item nav-link pl-5 pr-5" href="#p2" data-toggle="tab">
            MOBILE
        </a>
        <a class="nav-item nav-link pl-5 pr-5" href="#p3" data-toggle="tab">
            DATA SCIENCE
        </a>
        <a class="nav-item nav-link pl-5 pr-5" href="#p4" data-toggle="tab">
            IOT 
        </a>
    </nav>
    <br>
    <div class="tab-content">
        <div class="tab-pane active" id="p1">WEB:</div>
        <div class="tab-pane" id="p2">Mobile:</div>
        <div class="tab-pane" id="p3">Data Science:</div>
        <div class="tab-pane" id="p4">IoT:</div>
    </div>

    <br>
    <hr class="mt-5">
</div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
        };
    }
};
</script>

<style>

</style>
