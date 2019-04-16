<template>
  <form method="post" :action="action_url" enctype="multipart/form-data">
    <h2>Empresa</h2>
    <div class="row">
      <input type="hidden" name="_token" v-model="csfr_token">
      <div class="col-sm-4">
        <div class="form-group">
          <label>Nome Fantasia *</label>
          <input
            type="text"
            name="nome_fantasia"
            v-model="nome_fantasia"
            class="form-control"
            v-bind:class="{ 'is-invalid': $v.nome_fantasia.$dirty && $v.nome_fantasia.$invalid }"
            @change="$v.nome_fantasia.$touch()"
            placeholder="Nome da Empresa"
            required="required"
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>CNPJ *</label>
          <input
            type="text"
            name="CNPJ"
            class="form-control"
            :class="{ 'is-invalid': $v.cnpj.$dirty && $v.cnpj.$invalid }"
            @change="$v.cnpj.$touch()"
            v-model="cnpj"
            placeholder="Ex: 12345678912345"
          >
          <div class="invalid-feedback">
            <p v-if="!$v.cnpj.$required">Campo obrigatório. Ou formato incorreto</p>
          </div>
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
            :class="{ 'is-invalid': $v.razao_social.$dirty && $v.razao_social.$invalid }"
            @change="$v.razao_social.$touch()"
            placeholder="Razão Social"
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label>Segmento</label>
          <select
            name="segmento"
            class="form-control"
            :class="{ 'is-invalid': $v.segmento.$dirty && $v.segmento.$invalid }"
            @change="$v.segmento.$touch()"
            v-model="segmento"
          >
            <option>Produto</option>
            <option>Serviço</option>
            <option>Produto e Serviço</option>
          </select>
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.inscricao_estadual.$dirty && $v.inscricao_estadual.$invalid }"
            @change="$v.inscricao_estadual.$touch()"
            placeholder="Inscrição estadual *"
            required="required"
            data-error="Valid email is required."
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.telefone.$dirty && $v.telefone.$invalid }"
            @change="$v.telefone.$touch()"
            placeholder="Por favor escrava o numero de telefone"
            required="required"
            data-error="name is required."
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.email.$dirty && $v.email.$invalid }"
            @change="$v.email.$touch()"
            placeholder="Por favor digite o e-mail"
            required="required"
            data-error="name is required."
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.cep.$dirty && $v.cep.$invalid }"
            @change="$v.cep.$touch()"
            placeholder="Por favor digite o cep"
            required="required"
            data-error="name is required."
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.cidade.$dirty && $v.cidade.$invalid }"
            @change="$v.cidade.$touch()"
            placeholder="Por favor informe a cidade *"
            required="required"
            data-error="Valid email is required."
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.estado.$dirty && $v.estado.$invalid }"
            @change="$v.estado.$touch()"
            placeholder="Por favor informe o estado"
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.logradouro.$dirty && $v.logradouro.$invalid }"
            @change="$v.logradouro.$touch()"
            placeholder="Logradouro"
            required="required"
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.bairro.$dirty && $v.bairro.$invalid }"
            @change="$v.bairro.$touch()"
            placeholder="Bairro"
            required="required"
            data-error="Valid email is required."
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
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
            :class="{ 'is-invalid': $v.numero.$dirty && $v.numero.$invalid }"
            @change="$v.numero.$touch()"
            placeholder="numero"
            required="required"
            data-error="name is required."
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button v-if="action === 'store'" type="sybmit" class="btn btn-primary btn-send">Cadastrar</button>
        <div v-if="action === 'update'">
          <button type="sybmit" class="btn btn-success btn-send">Salvar</button>
          <a class="btn btn-danger btn-send" :href="delete_route">Deletar</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-muted">
          <strong>*</strong> These fields are required.
        </p>
      </div>
    </div>
  </form>
</template>

<script>
import { required, minLength, maxLength } from "vuelidate/lib/validators";

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
    "error",
    "action",
    "action_url",
    "errors",
    "csfr_token",
    "delete_route"
  ],
  validations: {
    cnpj: {
      required,
      minLength: minLength(14),
      maxLength: maxLength(14)
    },
    razao_social: {
      required
    },
    nome_fantasia: {
      required
    },
    cep: {
      required,
      minLength: minLength(8),
      maxLength: maxLength(8)
    },
    logradouro: {
      required
    },
    numero: {
      required
    },
    telefone: {
      required,
      minLength: minLength(10),
      maxLength: maxLength(11)
    },
    email: {
      required
    },
    bairro: {
      required
    },
    cidade: {
      required
    },
    estado: {
      required,
      minLength: minLength(2),
      maxLength: maxLength(2)
    },
    segmento: {
      required
    },
    inscricao_estadual: {
      required
    }
  },
  mounted() {
    console.log(this.action);
  }
};
</script>
