<script setup>
defineProps({
    src: {
        type: String,
        required: true
    },
    uclass: {
        type: String,
    },
    race: {
        type: Object,
        required: true
    }
});

</script>

<template>
    <div class="card text-bg-dark d-flex my-2" style="max-height: 340px;
                min-height: 300px;
               max-width: 450px;" :class="uclass">
        <img :src="src" class="card-img" :alt="'image of a ' + race.name" style="max-height: 340px">

        <div class="card-img-overlay d-flex flex-column ms-auto mt-auto justify-content-end" 
                    style="max-width: 300px;
                           max-height: 325px;
                           overflow: hidden;">
            <div class="bg-light text-dark p-1 border border-dark rounded opacity-75">
                <h5 class="card-title"><strong>{{ race.name }}</strong></h5>
                <p class="card-text">{{ race.description.short.body }} </p>
                <h5 class="card-text">Traits</h5>
                <div class="row">
                    <div class="col-3">
                        <div>
                            <strong>HP</strong> {{ race.hit_points }}
                        </div>
                        <div>
                            <strong>Size</strong> {{ race.size }}
                        </div>
                        <div>
                            <strong>Speed</strong> {{ race.speed }}
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <strong>Ability Boosts:</strong>
                        </div>
                        <div>
                            <template v-for="boost in race.ability_boosts.default">
                                <i class="bi bi-dot"></i>{{ boost }} 
                            </template>
                            <template v-if="race.ability_boosts.free_boost > 0">
                                <i class="bi bi-dot" ></i>{{ race.ability_boosts.free_boost }} free ability boost(s)
                            </template>
                                
                        </div>
                        <div><strong>Ability Flaws:</strong></div>
                        <div>{{ race.ability_flaw }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>