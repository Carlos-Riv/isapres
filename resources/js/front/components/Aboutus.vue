<template>
  <div class="wrap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 d-flex flex-column">
          <h1 class="title mx-auto" v-if="content.title">{{content.title}}</h1>
          <div class="underline mx-auto"></div>
          <p class="lead mx-auto" v-if="content.lead" v-html="content.lead"></p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return {
            content: {
                title: "Sobre Nosotros",
                lead: "Isapres Chile Asesores es una agrupación de ejecutivos con más de 15 años de experiencia en el rubro isapres. Nuestra misión es formar a expertos ejecutivos, con altos estandares y con amplio conocimiento del rubro, de esta manera, asesorar de una manera completa y correcta a nuestros clientes/usuarios."
            }
        }
    }
};
</script>

<style lang="scss" scoped>

.wrap {
  background: #11c2f8;
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
  max-width: 35rem;
}

</style>