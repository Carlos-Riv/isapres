<template>
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <li class="glide__slide" v-for="slide in slides" :key="slide.index">
          <div class="slide">
            <img class="bg" :src="slide.bgurl" alt v-if="slide.bgurl" />
            <div class="content" v-if="slide.title">
              <h2 class="title">{{slide.title}}</h2>
              <p class="lead" v-if="slide.lead">{{slide.lead}}</p>
              <button type="button" class="btn btn-primary btn-lg"  @click="showmodal" v-if="slide.btn">{{slide.btn.cta}}</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import Glide from "@glidejs/glide";
export default {

  methods: {
      showmodal() {
        $('#join').modal('show')
    }
  },

  mounted() {
    new Glide(".glide").mount();
    console.log("bannertop mounted");
  },

  data() {
    return {
      slides: [
        {title:'Apertura proceso postulación 2020',
        lead:'Estamos buscando a personas entusiastas con experiencia en ventas para integrar equipo Marzo 2020.',
        bgurl:this.bg_path,
        btn: {
          cta: 'Me interesa, comenzar postulación.'
        }
        }
      ]
    };
  },

  props: ['bg_path']
};
</script>

<style lang="scss" scoped>
@import "node_modules/@glidejs/glide/src/assets/sass/glide.core";
@import "node_modules/@glidejs/glide/src/assets/sass/glide.theme";

// reset
.glide ul {
  margin-bottom: 0 !important;
}

.slide {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 400px;
  background:white;
  position: relative;
}

.slide::before {
  content: "";
  position: absolute;
  background: rgba(black, .6);
  width: inherit;
  height: inherit;
  z-index: 30;
}

.slide .bg {
  position: absolute;
  z-index: 20;
  width: inherit;
  height: inherit;
  object-fit: cover;
  object-position: center;
}

.slide .content {
  position: relative;
  z-index: 40;
  text-align: center;
}

.slide .content .title {
  font-size: 2.3rem;
}

.slide .content .title,
.slide .content .lead {
  color: white;
}

.content .title {
  font-size: 1.6rem;
}

@media (min-width: 768px) {
  .slide {
  height: 500px;
}

.slide .content .title {
  font-size: 2.8rem;
}

}
</style>