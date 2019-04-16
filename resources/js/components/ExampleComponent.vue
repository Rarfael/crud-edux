<template>
  <section class="row">
    <div class="col-md-12 col-lg-6">
      <div class="col-sm-12">
        <div class="col-xs-12 col-sm-8">
          <h2>{{ empresa.nome_fantasia }}</h2>
          <p>
            <strong>CNPJ:</strong>
            {{ empresa.CNPJ }}
          </p>
          <p>
            <strong>Razão Social:</strong>
            {{ empresa.razao_social }}
          </p>
          <p>
            <strong>CEP:</strong>
            {{ empresa.CEP }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  prop: {
    empresa: ""
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
