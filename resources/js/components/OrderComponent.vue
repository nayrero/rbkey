<template>
    <div class="col-auto order-form__form">
        <form name="orderForm" @submit="formSubmit">            
            <div class="form-group">
                <h4>Оставьте заявку на обратный звонок</h4>
                <input type="text" class="form-control" name="Name" v-model="name" maxlength="20" placeholder="Имя" required>							    
            </div>
            <div class="form-group">							    
                <input type="email" class="form-control" name="Email" maxlength="40" v-model="email" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="tel" id="phone" name="Phone" v-model="phone" v-phone class="form-control" autocomplete="tel" placeholder="8 (9**) ***-****" required>
            </div>
                <button type="submit" name="Button" class="btn btn-primary btn-block">Отправить заявку</button>            			
        </form>
          
        <transition name="modal">
            <modal v-if="showModal" @close="showModal = false">        
                <h3 slot="header">Заявка на получение ЭП</h3>
                <div v-if="successRequest" slot="body">Ваша заявка отправлена, в ближайшее время с вами свяжется наш менеджер!</div>
                <div v-else slot="body">При отправке заявки возникла ошибка, 
                приносим извинения за доставленные неудобства.</div>
            </modal>
        </transition>          
    </div>    
</template>
 
<script>
    import modal from './ModalComponent.vue';
    export default {
        components: {
            modal,
        },
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              name: '',
              email: '',
              phone: '',
              output: '',              
              showModal: false,
              successRequest: false,
              //requestError: false
            };
        },
        directives: {
            phone:{
                bind : function(el) {
                    el.oninput = function(e) {
                    if (!e.isTrusted) {
                        return
                    }
            
                    const x = this.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,4})/)

                    if (!x[2] && x[1] !== '') {
                        this.value = x[1] === '8' ? x[1] : '8' + x[1]
                    } else {
                        this.value = !x[3] ? x[1] + x[2] : x[1] + '(' + x[2] + ') ' + x[3] + (x[4] ? '-' + x[4] : '')
                    }
                }}
            }

        },
        methods: {
            /*showModal() {
                this.isModalVisible = true;
            },
            closeModal() {
                this.isModalVisible = false;
            },*/
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('/order', {
                    name: this.name,
                    phone: this.phone,
                    email: this.email
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    //console.log(currentObj.output);
                    currentObj.showModal = true;                                      
                    currentObj.successRequest = true;
                })
                .catch(function (error) {
                    currentObj.output = error;
                    currentObj.showModal = true;                    
                    currentObj.successRequest = false;
                });
            }
        }
    }
</script>
<style>
.modal-leave-active, .modal-enter-active {
  transition: all .5s;
}

.modal-enter, .modal-leave-to {
  opacity: 0;
  transform: scale(1.1);
}
</style>