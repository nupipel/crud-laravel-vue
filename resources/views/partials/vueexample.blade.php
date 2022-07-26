<!-- anywhere on the page -->
<div v-scope="{ count: 0 }">
    <div class="row row-cols-auto">
        <button class="btn btn-sm btn-primary" @click="count--">kurangi</button>
        <p class="text-danger">@{{ count }}</p>
        <button class="btn btn-sm btn-primary" @click="count++">tambah</button>
    </div>
</div>
