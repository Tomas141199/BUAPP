<template>
  <input type="button" hidden />
</template>

<script>
export default {
  props: ["band"],
  mounted() {
    console.log("hola");
    if (this.band == "si") {
      this.$swal({
        position: "top-end",
        icon: "success",
        title: "Tu informacion se ha guardado correctamente",
        showConfirmButton: false,
        timer: 2000,
      });
    }
  },
};
</script>