<template>
  <div>
    <h2>Empresa</h2>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label>Nome Fantasia *</label>
          <input
            type="text"
            name="nome_fantasia"
            v-model="nome_fantasia"
            class="form-control"
            placeholder="Nomda da Empresa"
            required="required"
          >
          <div v-if="error" class="alert alert-danger">{{ error }}</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>CNPJ *</label>
          <input
            type="text"
            name="CNPJ"
            class="form-control"
            v-model="cnpj"
            placeholder="Ex: 12345678912345"
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Razão Social *</label>
          <input
            type="text"
            name="razao_social"
            v-model="razao_social"
            class="form-control"
            placeholder="Razão Social"
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label>Segmento</label>
          <select name="segmento" class="form-control" v-model="segmento">
            <option>Produto</option>
            <option>Serviço</option>
            <option>Produto e Serviço</option>
          </select>
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Inscrição Estadual *</label>
          <input
            type="text"
            name="inscricao_estadual"
            v-model="inscricao_estadual"
            class="form-control"
            placeholder="Inscrição estadual *"
            required="required"
            data-error="Valid email is required."
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Inscrição Municipal</label>
          <input
            type="text"
            name="inscricao_municipal"
            v-model="inscricao_municipal"
            class="form-control"
            placeholder="Inscrição municipal"
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
    </div>

    <h3>Contato</h3>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>Telefone *</label>
          <input
            type="tel"
            name="telefone"
            v-model="telefone"
            class="form-control"
            placeholder="Por favor escrava o numero de telefone"
            required="required"
            data-error="name is required."
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>Email *</label>
          <input
            type="email"
            name="email"
            v-model="email"
            class="form-control"
            placeholder="Por favor digite o e-mail"
            required="required"
            data-error="name is required."
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
    </div>

    <h3>Endereço</h3>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label>CEP *</label>
          <input
            type="number"
            name="CEP"
            v-model="cep"
            class="form-control"
            placeholder="Por favor digite o cep"
            required="required"
            data-error="name is required."
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Cidade *</label>
          <input
            type="text"
            name="cidade"
            v-model="cidade"
            class="form-control"
            placeholder="Por favor informe a cidade *"
            required="required"
            data-error="Valid email is required."
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Estado *</label>
          <input
            type="text"
            name="estado"
            v-model="estado"
            class="form-control"
            placeholder="Por favor informe o estado"
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label>Logradouro *</label>
          <input
            type="text"
            name="logradouro"
            v-model="logradouro"
            class="form-control"
            placeholder="Logradouro"
            required="required"
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Bairro *</label>
          <input
            type="text"
            name="bairro"
            v-model="bairro"
            class="form-control"
            placeholder="Bairro"
            required="required"
            data-error="Valid email is required."
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Complemento *</label>
          <input
            type="text"
            name="complemento"
            v-model="complemento"
            class="form-control"
            placeholder="Complemento"
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label>Numero *</label>
          <input
            type="text"
            name="numero"
            v-model="numero"
            class="form-control"
            placeholder="numero"
            required="required"
            data-error="name is required."
          >
          <div class="alert alert-danger">{{ }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "cnpj",
    "razao_social",
    "nome_fantasia",
    "cep",
    "logradouro",
    "numero",
    "telefone",
    "email",
    "complemento",
    "bairro",
    "cidade",
    "estado",
    "segmento",
    "inscricao_municipal",
    "inscricao_estadual",
    "error"
  ],
  mounted() {
    console.log(console.log(this.errors));
  }
};
</script>
