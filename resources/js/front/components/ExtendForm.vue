<template>
  <!-- Modal -->
  <div
    class="modal fade"
    id="extend"
    tabindex="-1"
    role="dialog"
    aria-labelledby="modalFormLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="modalFormLabel">ICA Formulario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div 
        class="alert alert-success" 
        role="alert"
        v-if="this.msgresponse">
          {{msgresponse}}
        </div>
        <div class="modal-body">
          <form @submit.prevent="submit" method="POST">
            <h3></h3>
            <!-- nombre -->
            <div class="form-group">
              <label for="name">Nombre</label>
              <input
              id="name"
              class="form-control"
              type="text"
              name="name"
              v-model="name"
              />
              <div class="badge badge-danger" v-if="errors.name">{{errors.name[0]}}</div>
            </div>
            <!-- apellido -->
            <div class="form-group">
              <label for="last_name">Apellido</label>
              <input
                id="last_name"
                class="form-control"
                type="text"
                name="last_name"
                v-model="last_name"
              />
              <div class="badge badge-danger" v-if="errors.last_name">{{errors.last_name[0]}}</div>
            </div>
            <!-- email -->
            <div class="form-group">
              <label for="email">Email</label>
              <input 
              id="email" 
              class="form-control" 
              type="email" 
              name="email" 
              v-model="email" 
              />
              <div class="badge badge-danger" v-if="errors.email">{{errors.email[0]}}</div>
            </div>
            <!-- rut -->
            <div class="form-group">
              <label for="rut">Rut</label>
              <input
              id="rut"
              class="form-control"
              type="text"
              name="rut" 
              v-model="rut"
              />
              <div class="badge badge-danger" v-if="errors.rut">{{errors.rut[0]}}</div>
            </div>
            <!-- fono -->
            <div class="form-group">
              <label for="phone">Télefono móvil</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">+569</span>
                </div>
                <input
                  type="text"
                  id="phone"
                  class="form-control"
                  placeholder="86655779"
                  name="phone"
                  v-model="phone"
                />
              </div>
              <div class="badge badge-danger" v-if="errors.phone">{{errors.phone[0]}}</div>
            </div>
            <!-- salario -->
            <div class="form-group">
              <label for="phone">Salario Aprox</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <input
                  type="number"
                  id="salary"
                  class="form-control"
                  placeholder="400000"
                  name="salary"
                  v-model="salary"
                />
              </div>
              <div class="badge badge-danger" v-if="errors.salary">{{errors.salary[0]}}</div>
            </div>
            <!-- work -->
            <div class="form-group">
              <label for="work">Tipo de trabajo</label>
              <select class="form-control"
              id="work"
              name="work"
              v-model="work"
              >
                <option v-for="work in this.data_works" :key="work.index" :value="work">{{work}}</option>
              </select>
              <div class="badge badge-danger" v-if="errors.work">{{errors.work[0]}}</div>
            </div>
            <!-- responsibilities -->
            <div class="form-group">
              <label for="responsibilities">Número de cargas familiares</label>
              <select
              class="form-control"
              id="responsibilities"
              name="responsibilities"
              v-model="responsibilities"
              >
                <option v-for="resp in data_responsibilities" :key="resp.index" :value="resp">{{resp}}</option>
              </select>
              <div class="badge badge-danger" v-if="errors.responsibilities">{{errors.responsibilities[0]}}</div>
            </div>
            <!-- city -->
            <div class="form-group">
              <label for="city">Ciudad</label>
              <input
              id="city"
              class="form-control"
              type="text"
              name="city"
              v-model="city"
              />
              <div class="badge badge-danger" v-if="errors.city">{{errors.city[0]}}</div>
            </div>
            <!-- commune -->
            <div class="form-group">
              <label for="city">Comuna</label>
              <input
              id="commune"
              class="form-control"
              type="text"
              name="commune"
              v-model="commune"
              />
              <div class="badge badge-danger" v-if="errors.commune">{{errors.commune[0]}}</div>
            </div>
            <!-- isapres -->
            <div class="form-group">
              <label for="isapre_id">A qué isapre pertenece</label>
              <select
              class="form-control"
              id="isapre_id"
              name="isapre_id"
              v-model="isapre_id"
              >
                <option v-for="option in this.data_isapres" :key="option.id" :value="option.id">{{option.name}}</option>
              </select>
              <div class="badge badge-danger" v-if="errors.iisapre_id">{{errors.iisapre_id[0]}}</div>
            </div>
            <!-- message -->
            <div class="form-group">
              <label for="message">Mensaje (opcional)</label>
              <textarea 
              id="message" 
              class="form-control" 
              name="message"
              v-model="message"
              rows="3">
              </textarea>
            </div>
            <!-- send -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
          </form>
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {

  data() {
    return {
      name: "",
      last_name: "",
      email: "",
      rut: "",
      phone: "",
      // birthdate:"",
      salary:"",
      work:"seleccione",
      responsibilities:"seleccione",
      city: "",
      commune:"",
      isapre_id:"1",
      message: "",

      data_works:['seleccione', 'dependiente', 'independiente'],
      data_isapres: ['seleccione'],
      data_responsibilities: ['seleccione', '0', '1', '2', '3', '4', '5', '6', '7'],
      msgresponse:"",
      errors: [],
    };
  },

  mounted() {
    axios.get(route("isapres")).then(res => {
      this.data_isapres = res.data.isapres;
      console.log(this.data_isapres);
    });
  },

  methods: {
    submit: function() {
      axios
        .post(route("extendform.store"), {
          name: this.name,
          last_name: this.last_name,
          email: this.email,
          rut: this.rut,
          phone: this.phone,
          // birthdate: this.birthdate,
          salary: this.salary,
          work:this.work,
          responsibilities:this.responsibilities,
          city: this.city,
          commune: this.commune,
          isapre_id: this.isapre_id,
          message:this.message
        })
        .then(res => {
          if (res.data = "success")
          {
              // google ads goal
              gtag('event', 'conversion', {'send_to': 'AW-727396406/cl_uCKH569cBELbg7NoC'});
              // end google ads goal
              this.name = "",
              this.last_name = "",
              this.email = "",
              this.rut = "",
              this.phone = "",
              // this.birthdate = "",
              this.salary ="",
              this.work ="seleccione",
              this.responsibilities = "seleccione",
              this.city = "",
              this.commune = "",
              this.isapre_id = "1",
              this.message = "",
              //
              this.msgresponse = "Gracias, en breves momentos responderemos" 
              this.errors = ""
          }
        })
        .catch(error => {
          this.errors = error.response.data.errors;
        });
    }
  }
};
</script>

<style>
.modal-title {
  color: white;
}
</style>