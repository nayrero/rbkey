<template>
    <div class="container">
               
        <tabs>
             
            <tab name="Электронные подписи" :selected="true">
                <div class="services__header">Электронные подписи</div>                  
                <div class="row services__list_ecp">
                    <div class="services__item col-12 col-sm-12 col-md col-lg-6" v-for ='item in sortingECP' :key='item.id'>
                        <a href="#" class="service__item-link">
                            <div class="services__head">
                                <div class="services__title">{{ item.services_title }}</div>
                                <div class="services__desc">{{ item.services_desc }}</div>                            
                            </div>
                            <div class="services__bottom">
                                <div class="services__condition">
                                    <div class="services__condition-title">{{ item.services_condition_title }}</div>
                                    <div class="services__condition-value">{{ item.services_condition_value }}</div>                
                                </div>
                                <div class="services__icon"></div>
                            </div>
                        </a>      
                    </div>
                </div> 
            </tab>
            
            <tab name="Электронная отчетность">
                <div class="services__header">Электронная отчетность</div>
                <div class="row services__list_eo">
                    <div class="services__item col-12 col-sm-12 col-md col-lg-6" v-for ='item in sortingEO' :key='item.id'>
                        <a href="#" class="service__item-link">
                            <div class="services__head">
                                <div class="services__title">{{ item.services_title }}</div>
                                <div class="services__desc">{{ item.services_desc }}</div>                            
                            </div>
                            <div class="services__bottom">
                                <div class="services__condition">
                                    <div class="services__condition-title">{{ item.services_condition_title }}</div>
                                    <div class="services__condition-value">{{ item.services_condition_value }}</div>                                                
                                </div>
                                <div class="services__icon"></div>
                            </div>
                        </a>      
                    </div>
                </div>
            </tab>
            <tab name="Бухгалтерский аутсорсинг">
                <div class="services__header">Бухгалтерский аутсорсинг</div>
                <div class="row services__list_ba">
                    <div class="services__item col-12 col-sm-12 col-md-12 col-lg-6" v-for ='item in sortingBA' :key='item.id'>
                        <a href="#" class="service__item-link">
                            <div class="services__head">
                                <div class="services__title">{{ item.services_title }}</div>
                                <div class="services__desc">{{ item.services_desc }}</div>                            
                            </div>
                            <div class="services__bottom">
                                <div class="services__condition">
                                    <div class="services__condition-title">{{ item.services_condition_title }}</div>
                                    <div class="services__condition-value">{{ item.services_condition_value }}</div>                                                
                                </div>
                                <div class="services__icon"></div>
                            </div>
                        </a>      
                    </div>
                </div>
            </tab>
            <tab name="Онлайн кассы">
                <div class="services__header">Онлайн кассы</div>
                <div class="row services__list_ok">
                    <div class="services__item col-12 col-sm-12 col-md-12 col-lg-6" v-for ='item in sortingOK' :key='item.id'>
                        <a href="#" class="service__item-link">
                            <div class="services__head">
                                <div class="services__title">{{ item.services_title }}</div>
                                <div class="services__desc">{{ item.services_desc }}</div>                            
                            </div>
                            <div class="services__bottom">
                                <div class="services__condition">
                                    <div class="services__condition-title">{{ item.services_condition_title }}</div>
                                    <div class="services__condition-value">{{ item.services_condition_value }}</div>                                                
                                </div>
                                <div class="services__icon"></div>
                            </div>
                        </a>      
                    </div>
                </div>
            </tab>
        </tabs>
                                            
    </div>
</template>
<script>
import tabs from './TabsComponent.vue';
import tab from './TabComponent.vue';
export default {
    name: "services",
    components: {
            tabs,
            tab
        },
    data(){
        return{
            
            service_data: [],            
            error: null,
            loading: false,
            active: false
            
        }
    },
    created() {
        this.fetchData();
        //this.sortingData();
    },
    computed: {
        sortingECP() {                
                return this.service_data.filter(item => item.services_type === 'ecp')
            },
        sortingEO() {                
                return this.service_data.filter(item => item.services_type === 'eo')
            },
        sortingBA() {                
                return this.service_data.filter(item => item.services_type === 'ba')
            },
        sortingOK() {                
                return this.service_data.filter(item => item.services_type === 'ok')
            },
    },
    
    methods: {
            fetchData() {
                this.error = this.users = null;
                this.loading = true;
                axios
                    .get('/api/services')
                    .then(response => {
                        this.loading = false;
                        this.service_data = this.service_data2 = response.data;
                    }).catch(error => {
                    this.loading = false;
                    this.error = error.response.data.message || error.message;
                });
            },
            
        },
}
</script>
<style>



</style>