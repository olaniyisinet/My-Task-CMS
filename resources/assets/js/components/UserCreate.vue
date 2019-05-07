
<template>
<div class="container">
<form>
<div :class="['form-group m-1 p-3', successful ? 'alert-success' : '']">
  <span v-if="successful" class="label label-sucess"> User Created! </span>
</div>
 <div :class="['form-group m-1 p-3', error ? 'alert-danger' : '']">
    <span v-if="errors.name" class="label label-danger"> {{ errors.name[0] }} </span>
    <span v-if="errors.email" class="label label-danger"> {{ errors.email[0] }} </span>
    <span v-if="errors.password" class="label label-danger"> {{ errors.password[0] }} </span>
</div>
            
<div class="form-group">
  <input type="name" ref="name" class="form-control" id="name" placeholder="Enter Name" required>
</div>

    <div class="form-group">
        <input type="email" ref="email" class="form-control" id="email" placeholder="Enter Email" required>
    </div>

    <div class="form-group">
<select ref="roleId" class="form-control" id="roleId">
    <option value="1">Student</option>
    <option value="2">Employee</option>
    <option value="3">Employer</option>
    <option value="4">Admin</option>
</select>    </div>

    <div class="form-group">
        <input type="password" ref="password" class="form-control" id="password" placeholder="Enter Password" required>
    </div>

  <button type="submit" @click.prevent="create" class="btn btn-primary block">Submit</button>
</form>
</div>
</template>


<script>
export default {

  data() {
    return {
      error: false,
      successful: false,
      errors: []
    };
  },
  methods: {
    create() {
      const formData = new FormData();
      formData.append("name", this.$refs.name.value);
      formData.append("email", this.$refs.email.value);
      formData.append("password", this.$refs.password.value);
      formData.append("roleId", this.$refs.roleId.value);

      axios
        .post("/user", formData)
        .then(response => {
          this.successful = true;
          this.error = false;
          this.errors = [];
          // this.$router.push('/admin/User')
        })
        .catch(error => {
            console.log(error);
          if (!_.isEmpty(error.response)) {
            if ((error.response.status = 422)) {
              this.errors = error.response.data.errors;
              this.successful = false;
              this.error = true;
            }
          }
        });
      this.$refs.name.value = "";
      this.$refs.email.value = "";
    }
  }
};
</script>
