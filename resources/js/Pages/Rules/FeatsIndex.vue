<script setup>
</script>

<template>
    <div class="container text-light mt-5">
        <div class="container-fluid">
            <h1>Feats</h1>
            <hr>
            <div class="dropdown mb-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Quick Filter
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Ancestry</a></li>
                    <li><a class="dropdown-item" href="#">Class</a></li>
                    <li><a class="dropdown-item" href="#">General Feats</a></li>
                </ul>
            </div>
            <div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="pe-5">Name</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Level</th>
                            <th scope="col">Prerequisite</th>
                            <th scope="col">Benefits</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="feat in $page.props.feats" :key="feat.id">
                            <td><Link :href="route('feats.show',feat)">{{ feat.name }}</Link></td>
                            <td><template v-for="tag in feat.tags">{{ tag }} </template></td>
                            <td>{{ feat.level }}</td>
                            <td>{{ feat.prereq }}</td>
                            <td>{{ feat.summary }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</template>