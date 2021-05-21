<template>
    <div class="container">
        <div class="services__header">Электронная подпись</div>                  
            <div class="row services__list">
                <div class="services__item col-12 col-sm-12 col-md" v-for ='item in sortingECP' :key='item.id'>
                    <a href="/services" class="service__item-link">
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
            
        <div class="services__header">Электронная отчетность</div>
            <div class="row services__list">
                <div class="services__item col-12 col-sm-12 col-md" v-for ='item in sortingEO' :key='item.id'>
                    <a href="/services" class="service__item-link">
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
        <div class="services__header">Бухгалтерский аутсорсинг</div>
            <div class="row services__list">
                <div class="services__item col col-sm col-md" v-for ='item in sortingBA' :key='item.id'>
                    <a href="/services" class="service__item-link">
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
        <div class="services__header">Онлайн кассы</div>
            <div class="row services__list">
                <div class="services__item col col-sm col-md" v-for ='item in sortingOK' :key='item.id'>
                    <a href="/services" class="service__item-link">
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
    </div>
</template>
<script>
export default {
    name: "services",
    data(){
        return{
            
            service_data: [],            
            error: null,
            loading:false,
            
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
