<template>
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
    <b-img :src="image" rounded="circle" slot="aside" height="60" width="60" alt="placeholder" />
        <b-card>
            <slot></slot>
        </b-card>
    </b-media>
</template>

<script>
    export default {
        props: {
            image: String,
            writtenByMe:Boolean
            },
        data(){
            return {
            };
        },
        mounted() {
        }
    }
</script>
