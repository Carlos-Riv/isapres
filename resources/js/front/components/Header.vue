<template>
<header class="navbar navbar-expand">
    <a class="navbar-brand" href="#">
        <img :src="src_brand" alt="isapres chile asesores">
    </a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <button type="button" class="to-form btn btn-success"  @click="showmodal"><check-icon size="2x" class="icon"></check-icon> {{text_btn}}</button>
        </li>
    </ul>
    <a href="#" class="call btn btn-primary"><i data-feather="phone-call"></i>{{phone_btn}}</a>
</header>
</template>

<script>
import { CheckIcon } from "vue-feather-icons";

export default {

    props: ['src_brand', 'text_btn', 'phone_btn', 'id_form'],

    methods: {
        showmodal() {
            $(this.id_form).modal('show');
        }
    },

    components: {
        CheckIcon
    }
}
</script>

<style lang="scss" scoped>

</style>