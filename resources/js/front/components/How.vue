<template>
  <div class="wrap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 d-flex flex-column">
          <h1 class="title mx-auto" v-if="content.title">{{content.title}}</h1>
          <div class="underline mx-auto"></div>
          <p class="lead mx-auto" v-if="content.lead">{{content.lead}}</p>
        </div>
      </div>

      <div class="row justify-content-center pt-3">
        <div class="col-md-3" v-for="item in content.items" :key="item.index">
          <div class="card">
            <div class="card-body">
              <component :is="item.icon" size="2x" class="icon"></component>
              <h3>{{item.title}}</h3>
              <p>{{item.lead}}</p>
              <button type="button" class="btn btn-primary btn-block"  @click="showmodal" v-if="item.btn.c2a">{{item.btn.c2a}}</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ListIcon, EyeIcon, UsersIcon } from "vue-feather-icons";

export default {
  mounted() {
    console.log("sectionitems mounted");
  },

  data() {
    return {
      content: {
        title: "¿Cómo unirte a nuestro equipo de ejecutivos?",
        lead:
          "Simple, sigue los siguientes pasos para completar el proceso de postulación.",
        items: [
          {
            title: "1) Contáctanos",
            lead:
              "Favor completa el formulario con los datos solicitados.",
            icon: "list-icon",
            btn: {
              c2a: "Postular"
            }
          },
          {
            title: "2) Chekeamos información",
            lead:
              "Nuestro equipo revisará tu información y gestionará una reunión.",
            icon: "eye-icon",
            btn: {
              c2a: ""
            }
          },
          {
            title: "3) Reunión",
            lead:
              "Te notificaremos el día, hora y lugar de reunión. En este punto, serás capacitado y se te explicará sobre tu función.",
            icon: "users-icon",
            btn: {
              c2a: ""
            }
          }
        ]
      }
    };
  },

  // props:['styles', 'title', 'lead', 'items'],

  methods: {
    showmodal() {
      $('#join').modal('show');
    }
  },
  components: {
    ListIcon,
    EyeIcon,
    UsersIcon
  }
};
</script>

<style lang="scss" scoped>

.wrap {
  background: #3490dc;
  padding: 3.5rem 0;
}

// content top
.title,
.lead {
  color: white;
  text-align: center;
}

.title {
  max-width: 40rem;
}

.underline {
  background: white;
  width: 100px;
  height: 5px;
  margin-top: 0.5rem;
  margin-bottom: 1.6rem;
}

.lead {
  max-width: 25rem;
}

// items card

.card {
  margin-bottom: 1rem;
}

.card-body {
  text-align: center;
  color: #3490dc;
}

.icon {
  margin-bottom: .6rem;
}

@media (min-width: 768px){
  .card {
    margin-bottom: 0;
  }
}
</style>