<script setup>

</script>

<template>
    <div class="container text-light mt-5">
        <div class="container-fluid">
            <h1>Classes</h1>
            <hr>
            <div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Key Attributes</th>
                            <th scope="col">Hit Points</th>
                            <th scope="col">Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="archetype in $page.props.classes" :key="archetype.id">
                            <td><Link :href="route('classes.show', archetype)">{{ archetype.name }}</Link></td>
                            <td><template v-for="attr in archetype.key_attributes">{{ attr }}&nbsp</template></td>
                            <td>{{ archetype.hit_points }}</td>
                            <td><span class="d-inline-block text-truncate" style="max-width: 700px;">{{ archetype.description.flavor }}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>