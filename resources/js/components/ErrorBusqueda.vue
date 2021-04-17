<template>
  <input type="button" hidden />
</template>

<script>
export default {
  props: ["band"],
  methods: {
    mostrarMesanje() {
      this.$swal({
        title: "Probando",
        text: "texto",
        icon: "success",
      });
    },
  },
};
</script>
