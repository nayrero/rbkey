<template>
    <div>
            <div class="tabs">
              <ul class="nav nav-tabs">
                <li class="nav-item" v-for="tab in tabs" :key='tab.id' :class="{ 'is-active': tab.isActive }">
                    <a class="nav-link" :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
                </li>
              </ul>
            </div>

            <div class="tabs-details">
                <slot></slot>
            </div>
        </div>
</template>
<script>

export default {
    name: 'tabs',
    data() {
        return {tabs: [] };
    },
    
    created() {
        
        this.tabs = this.$children;
        
    },
    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (tab.name == selectedTab.name);
            });
        }
    }
}
</script>
