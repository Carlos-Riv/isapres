<template>
  <!-- Modal -->
  <div
    class="modal fade"
    id="short"
    tabindex="-1"
    role="dialog"
    aria-labelledby="modalFormLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="modalFormLabel">App asesoría Isapres Chile Asesores</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submit" method="POST">
            <h3>{{message}}</h3>
            <!-- nombre -->
            <div class="form-group">
              <label for="name">Nombre</label>
              <input id="name" class="form-control" type="text" name="name" v-model="name" />
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
            <!-- rut -->
            <div class="form-group">
              <label for="rut">Rut</label>
              <input id="rut" class="form-control" type="text" name="rut" v-model="rut" />
              <div class="badge badge-danger" v-if="errors.rut">{{errors.rut[0]}}</div>
            </div>
            <!-- email -->
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" type="email" name="email" v-model="email" />
              <div class="badge badge-danger" v-if="errors.email">{{errors.email[0]}}</div>
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
            <!-- city -->
            <div class="form-group">
              <label for="city">Ciudad</label>
              <input id="city" class="form-control" type="text" name="city" v-model="city" />
              <div class="badge badge-danger" v-if="errors.city">{{errors.city[0]}}</div>
            </div>
            <!-- isapres -->
            <div class="form-group">
              <label for="isapre_select">A qué isapre pertenece</label>
              <select class="form-control" id="isapre_select" name="isapre_select" v-model="isapre_select">
                <option v-for="option in Dataisapres" :key="option.id" :value="option.id">{{option.name}}</option>
              </select>
              <div class="badge badge-danger" v-if="errors.isapre_select">{{errors.isapre_select[0]}}</div>
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
  props: ["url_store"],

  data() {
    return {
      name: "",
      last_name: "",
      rut: "",
      email: "",
      phone: "",
      city: "",
      isapre_select:"1",
      errors: [],
      message: "Favor complete el formulario",
      Dataisapres: []
    };
  },

  mounted() {
    axios.get(route("isapre.index")).then(res => {
      this.Dataisapres = res.data.isapres;
    });
  },

  methods: {
    submit: function() {
      axios
        .post(this.url_store, {
          name: this.name,
          last_name: this.last_name,
          rut: this.rut,
          email: this.email,
          phone: this.phone,
          city: this.city,
          isapre_select: this.isapre_select
        })
        .then(res => {
          if (res.data = "success")
          {
              this.name = "",
              this.last_name = "",
              this.rut = "",
              this.email = "",
              this.phone = "",
              this.city = "",
              this.isapre_select = "1"
              this.errors = "",
              this.message = "Gracias! En breves momentos nos contactaremos con UD.";
          }
        })
        .catch(error => {
          this.message = "Favor revise los campos solicitados",
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