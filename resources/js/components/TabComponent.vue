<template>
    <transition name="tab">
        <div class="tabs__item" v-show="isActive"><slot></slot></div>
    </transition>
</template>
<script>
export default {
    name: 'tab',
    props: {
        name: { required: true },
        selected: { default: false}
    },    
    data() {        
        return {
            isActive: false
        };        
    },    
    computed: {        
        href() {
            return '#' + this.name.toLowerCase().replace(/ /g, '-');
        }
    },    
    mounted() {        
        this.isActive = this.selected;        
    }
}
</script>
<style>
.tab-leave-active, .tab-enter-active {
  transition: all .5s;
}

.tab-enter, .tab-leave-to {
  opacity: 0;
  transform: scale(1.1);
}
</style>