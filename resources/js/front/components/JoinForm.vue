<template>
  <div id="join" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Formulario de postulación Equipo Isapres Chile Asesores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form @submit.prevent="submit">
              <div class="form-group">
                  <label for="name">Nombre</label>
                  <input id="name"
                  name="name"
                  class="form-control"
                  type="text" 
                  v-model="fields.name">
                  <span class="badge badge-danger" v-if="errors.name">{{errors.name[0]}}</span>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input 
                id="email"
                name="email"
                class="form-control"
                type="text" 
                v-model="fields.email">
                <span class="badge badge-danger" v-if="errors.email">{{errors.email[0]}}</span>
            </div>
            <div class="form-group">
                <label for="phone">Fono</label>
                <input 
                id="phone"
                name="phone"
                class="form-control" 
                type="text" 
                v-model="fields.phone">
                <span class="badge badge-danger" v-if="errors.phone">{{errors.phone[0]}}</span>
            </div>
            <div class="form-group">
              <label for="message">Comenta tu experiencia | max 200 caracteres</label>
              <textarea 
              class="form-control" 
              id="message" rows="3" name="message" 
              v-model="fields.message"
              >
              </textarea>
              <span class="badge badge-danger" v-if="errors.message">{{errors.message[0]}}</span>
            </div>
            <div class="form-check form-check-inline mb-3">
              <input 
              id="checkbox"
              name="checkbox" 
              class="form-check-input" 
              type="checkbox"
              v-model="fields.checkbox"
              @change="resetSelect">
              <label for="checkbox" class="form-check-label">Ya soy ejecutivo</label>
            </div>
            <div class="form-group"
            v-if="this.fields.checkbox == true">
              <select 
              id="isapre"
              name="isapre"
              class="form-control"
              v-model="fields.isapre">
                <option value="inicio">¿De qué isapre es ejecutivo?</option>
                <option value="banmedica">Banmédica</option>
                <option value="colmena">Colmena</option>
                <option value="consalud">Consalud</option>
                <option value="cruzblanca">Cruz Blanca</option>
                <option value="nuevamasvida">Nueva Masvida</option>
                <option value="vidatres">Vida Tres</option>
              </select>
               <span class="badge badge-danger" v-if="errors.isapre">{{errors.isapre[0]}}</span>
            </div>
            <button
            type="submit"
            class="btn btn-primary btn-block btn-lg"
            :disabled="btn.disabled">
            {{btn.text}}
            <pulse-loader :color="btn.loading.color" :size="btn.loading.size" v-if="btn.disabled"></pulse-loader>
            </button>
          </form>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import { PulseLoader } from 'vue-spinner/dist/vue-spinner.min';
import Toastr from 'toastr';

export default {
  mounted() {
    console.log('form modal mounted');
    $('#join').modal('show');
  },

  data() {
    return {
      fields: {
        name: "",
        email:"",
        phone:"",
        message:"",
        isapre:"inicio",
        checkbox: false,
      },
      errors: [],

      extraValueSelect:"",

      btn: {
        disabled: false,
        text: 'Postular',
        loading:{
          color: '#fff',
          size: '10px'
        }
      }
    }
  },

  methods: {
    resetSelect(event){
      if(this.fields.checkbox == false) {
        this.fields.isapre = "inicio";
        this.errors.isapre = "";
      }

    },
    submit() {
      this.btn.disabled = true;
      this.btn.text = "";
      if(this.fields.checkbox == true && this.fields.isapre == "inicio") {
        this.fields.isapre = "inicio";
        this.extraValueSelect = null;
      }

      if(this.fields.checkbox == true && this.fields.isapre != "inicio") {
        this.extraValueSelect = this.fields.isapre;
      }

      if(this.fields.checkbox == false) {
        this.extraValueSelect = 'no-isapre';
      }

      axios.post(this.url_store, {
        name: this.fields.name,
        email: this.fields.email,
        phone: this.fields.phone,
        message: this.fields.message,
        isapre: this.extraValueSelect
      })
      .then(res=> {
        $('#join').modal('hide');
        toastr.success('Nuestro equipo revisará tu información.', '¡Mensaje enviado!');
        this.btn.disabled = false;
        this.btn.text = "Enviar";
        this.fields.name = "",
        this.fields.email = "",
        this.fields.phone = "",
        this.fields.isapre = "",
        this.errors = "",
        this.extraValueSelect = ""
      })
      .catch(err=>{
        this.btn.disabled = false;
        this.btn.text = "Enviar";
        if (err.response.status == 422){
          this.errors = err.response.data.errors;
        }
      })
    }
  },

  computed: {
  },

  props: ['url_store'],

  components: {
    PulseLoader,
    Toastr
  }

}
</script>

<style>
.modal-title {
  line-height: 1.3;
}

</style>