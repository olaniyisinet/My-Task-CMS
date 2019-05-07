<template>
    <div id="posts">
        <p class="border p-3" v-for="post in posts">
            {{ post.name }}
            <button type="button" @click="deleteUser(post.id)" class="p-1 mx-3 float-right btn btn-danger"> Delete </button>
        </p>
        <div>
            <button v-if="next" type="button" @click="navigate(next)" class="m-3 btn btn-primary">Next </button>
            <button v-if="prev" type="button" @click="navigate(prev)" class="m-3 btn btn-primary">Previous </button>
        </div>
    </div>
</template>


<script>
export default {
  mounted() {
    this.getPosts();
  },
  data() {
    return {
      posts: {},
      next: null,
      prev: null
    };
  },
  methods: {
    getPosts(address) {
      axios.get(address ? address : "/user").then(response => {
        this.posts = response.data.data;
        this.prev = response.data.links.prev;
        this.next = response.data.links.next;
      });
    },
    deleteUser(id) {
      axios.delete("/user/" + id).then(response => {
        console.log(response.data);
        this.getPosts();
      });
    },
    navigate(address) {
      this.getPosts(address);
    }
  }
};
</script>
