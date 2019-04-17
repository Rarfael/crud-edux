<template>
  <form method="post" @submit.prevent="submit" :action="action_url" enctype="multipart/form-data">
    <h2>Empresa</h2>
    <div class="row">
      <input type="hidden" name="_token" v-model="csfr_token">
      <div class="col-sm-4">
        <div class="form-group">
          <label>Nome Fantasia</label>
          <input
            type="text"
            name="nome_fantasia"
            v-model="company.nome_fantasia"
            class="form-control"
            v-bind:class="{ 'is-invalid': $v.company.nome_fantasia.$dirty && $v.company.nome_fantasia.$invalid }"
            @change="$v.company.nome_fantasia.$touch()"
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
            :class="{ 'is-invalid': $v.company.cnpj.$dirty && $v.company.cnpj.$invalid }"
            @change="$v.company.cnpj.$touch()"
            v-model="company.cnpj"
            placeholder="Ex: 12345678912345"
          >
          <div class="invalid-feedback">
            <p v-if="!$v.company.cnpj.required">Campo obrigatório.</p>
            <p v-if="!$v.company.cnpj.minLength && !$v.company.cnpj.maxLength">Formato incorreto</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Razão Social *</label>
          <input
            type="text"
            name="razao_social"
            v-model="company.razao_social"
            class="form-control"
            :class="{ 'is-invalid': $v.company.razao_social.$dirty && $v.company.razao_social.$invalid }"
            @change="$v.company.razao_social.$touch()"
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
            :class="{ 'is-invalid': $v.company.segmento.$dirty && $v.company.segmento.$invalid }"
            @change="$v.company.segmento.$touch()"
            v-model="company.segmento"
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
            v-model="company.inscricao_estadual"
            class="form-control"
            :class="{ 'is-invalid': $v.company.inscricao_estadual.$dirty && $v.company.inscricao_estadual.$invalid }"
            @change="$v.company.inscricao_estadual.$touch()"
            placeholder="Inscrição estadual *"
            required="required"
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
            v-model="company.inscricao_municipal"
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
            v-model="company.telefone"
            class="form-control"
            :class="{ 'is-invalid': $v.company.telefone.$dirty && $v.company.telefone.$invalid }"
            @change="$v.company.telefone.$touch()"
            placeholder="Por favor escrava o numero de telefone"
            required="required"
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
            v-model="company.email"
            class="form-control"
            :class="{ 'is-invalid': $v.company.email.$dirty && $v.company.email.$invalid }"
            @change="$v.company.email.$touch()"
            placeholder="Por favor digite o e-mail"
            required="required"
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
            v-model="company.cep"
            class="form-control"
            :class="{ 'is-invalid': $v.company.cep.$dirty && $v.company.cep.$invalid }"
            @change="$v.company.cep.$touch()"
            placeholder="Por favor digite o cep"
            required="required"
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
            v-model="company.cidade"
            class="form-control"
            :class="{ 'is-invalid': $v.company.cidade.$dirty && $v.company.cidade.$invalid }"
            @change="$v.company.cidade.$touch()"
            placeholder="Por favor informe a cidade *"
            required="required"
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
            v-model="company.estado"
            class="form-control"
            :class="{ 'is-invalid': $v.company.estado.$dirty && $v.company.estado.$invalid }"
            @change="$v.company.estado.$touch()"
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
            v-model="company.logradouro"
            class="form-control"
            :class="{ 'is-invalid': $v.company.logradouro.$dirty && $v.company.logradouro.$invalid }"
            @change="$v.company.logradouro.$touch()"
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
            v-model="company.bairro"
            class="form-control"
            :class="{ 'is-invalid': $v.company.bairro.$dirty && $v.company.bairro.$invalid }"
            @change="$v.company.bairro.$touch()"
            placeholder="Bairro"
            required="required"
          >
          <div class="invalid-feedback">Campo obrigatório.</div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Complemento</label>
          <input
            type="text"
            name="complemento"
            v-model="company.complemento"
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
            v-model="company.numero"
            class="form-control"
            :class="{ 'is-invalid': $v.company.numero.$dirty && $v.company.numero.$invalid }"
            @change="$v.company.numero.$touch()"
            placeholder="numero"
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
          <strong>*</strong> Campos obrigatórios.
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
  data: function() {
    return {
      company: {
        cnpj: this.cnpj,
        razao_social: this.razao_social,
        nome_fantasia: this.nome_fantasia,
        cep: this.cep,
        logradouro: this.logradouro,
        numero: this.numero,
        telefone: this.telefone,
        email: this.email,
        complemento: this.complemento,
        bairro: this.bairro,
        cidade: this.cidade,
        estado: this.estado,
        segmento: this.segmento,
        inscricao_municipal: this.inscricao_municipal,
        inscricao_estadual: this.inscricao_estadual
      }
    };
  },
  validations: {
    company: {
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
    }
  },
  methods: {
    submit(e) {
      if (this.$v.$invalid) {
        alert("Por favor preencha o formulário corretamente");
      } else {
        this.$el.submit();
      }
    }
  }
};
</script>
