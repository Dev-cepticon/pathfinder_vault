<script setup>
</script>

<template>
    <div class="container text-light mt-5">
        <div class="container-fluid">
            <h1>Backgrounds</h1>
            <hr>
            <div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Ability</th>
                            <th scope="col">Skill</th>
                            <th scope="col">Feat</th>
                            <th scope="col">Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="background in $page.props.background" :key="background.id">
                            <td><Link :href="route('backgrounds.show', background)">{{ background.name }}</Link></td>
                            <td><template v-for="item in background.ability_boosts.required">{{ item }}&nbsp  </template></td>
                            <td><template v-for="skill in background.skill_proficiencies">{{ skill }}&nbsp </template></td>
                            <td>{{ background.feat_grants[0]}}</td>
                            <td>{{ background.description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</template>