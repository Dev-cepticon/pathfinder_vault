<script setup>
defineProps({
    character: Object,
    ancestries: Object
});

</script>

<template>

    <div class="container text-light mt-3">
        <div class="container-fluid">
            <h1>Standard Builder</h1>
            <div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <img src="" alt="Logo" class="img-fluid mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Proficiency Info</h4>
                                    <!-- Add proficiency info content here -->
                                </div>
                                <div class="col-md-6">
                                    <h4>Action Indicators</h4>
                                    <!-- Add action indicators content here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row">
                            <h4>Character Information</h4>
                            <div class="col-md-6">

                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="characterName" :value="character.name"
                                        placeholder="Enter character name">
                                    <label for="characterName" class="form-label text-dark">Character Name</label>
                                </div>

                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="playerName"
                                        placeholder="Enter player name" :value="$page.props.auth.user.first_name + ' ' + $page.props.auth.user.last_name">
                                    <label for="playerName" class="form-label text-dark">Player Name</label>
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="experience"
                                        placeholder="Enter experience" :value="character.xp">
                                    <label for="experience" class="form-label text-dark">Experience</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="ancestryHeritage"
                                        placeholder="Select ancestry and heritage" readonly data-bs-toggle="modal"
                                        data-bs-target="#ancestryHeritageModal">
                                    <label for="ancestryHeritage" class="form-label text-dark">Ancestry and
                                        Heritage</label>

                                    <!-- Modal -->
                                    <div class="modal fade text-dark" id="ancestryHeritageModal" tabindex="-1"
                                        aria-labelledby="ancestryHeritageModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ancestryHeritageModalLabel">Select
                                                        Ancestry and Heritage</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="accordion" id="ancestryAccordion">
                                                        <div class="accordion-item" v-for="ancestry in ancestries">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                                                :data-bs-target="'#'+ ancestry.name" aria-expanded="true" :aria-controls="ancestry.name">
                                                                    <img src="" :alt="ancestry.name + ' Image'" class="img-fluid me-5" style="width: 30px; height: 30px;">
                                                                    {{ ancestry.name }}
                                                                </button>
                                                            </h2>
                                                            <div :id="ancestry.name" class="accordion-collapse collapse" data-bs-parent="#ancestryAccordion">
                                                                <div class="accordion-body">
                                                                    <a :href="route('ancestries.show', ancestry)" target="_blank">More about this ancestry <i class="bi bi-arrow-bar-right"></i></a>
                                                                    <div class="mt-1">Hit Points</div>
                                                                    <div class="mb-1">{{ ancestry.hit_points }}</div>
                                                                    <div>Size</div>
                                                                    <div class="mb-1">{{ ancestry.size }}</div>
                                                                    <div>Ability Boosts and Flaws</div>
                                                                    <div class="mb-1"><template v-for="ability in ancestry.ability_boosts.default">{{ ability }}, </template><template 
                                                                        v-if="ancestry.ability_boosts.free_boost > 0"> {{ ancestry.ability_boosts.free_boost }} free ablility boost(s)</template></div>
                                                                    <div>Languages</div>    
                                                                    <div class="mb-1"><template v-for="lang in ancestry.languages.default">{{ lang }}, </template>
                                                                        Additional languages equal to your Intelligence modifier (if it’s positive). Choose from <template v-for="lang in ancestry.languages.additional">{{ lang }}, </template> and any other languages to which you have access (such as the languages prevalent in your region).
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="background"
                                        placeholder="Select background" readonly data-bs-toggle="modal"
                                        data-bs-target="#backgroundModal">
                                    <label for="background" class="form-label text-dark">Background</label>

                                    <!-- Modal -->
                                    <div class="modal fade" id="backgroundModal" tabindex="-1"
                                        aria-labelledby="backgroundModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="backgroundModalLabel">Select Background
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Add modal content here -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="characterClass"
                                        placeholder="Select class" readonly data-bs-toggle="modal"
                                        data-bs-target="#classModal">
                                    <label for="characterClass" class="form-label text-dark">Class</label>

                                    <!-- Modal -->
                                    <div class="modal fade" id="classModal" tabindex="-1"
                                        aria-labelledby="classModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="classModalLabel">Select Class</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Add modal content here -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="size" placeholder="Enter size"
                                                readonly>
                                            <label for="size" class="form-label text-dark">Size</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-1">
                                            <select class="form-select" id="alignment">
                                                <option selected>Alignment</option>
                                                <option value="lawful-good">Lawful Good</option>
                                                <option value="neutral-good">Neutral Good</option>
                                                <option value="chaotic-good">Chaotic Good</option>
                                                <option value="lawful-neutral">Lawful Neutral</option>
                                                <option value="true-neutral">True Neutral</option>
                                                <option value="chaotic-neutral">Chaotic Neutral</option>
                                                <option value="lawful-evil">Lawful Evil</option>
                                                <option value="neutral-evil">Neutral Evil</option>
                                                <option value="chaotic-evil">Chaotic Evil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="traits"
                                                placeholder="Enter traits" readonly>
                                            <label for="traits" class="form-label text-dark">Traits</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="deity" placeholder="Enter deity">
                                    <label for="deity" class="form-label text-dark">Deity</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
        {{ character }}
    </div>
</template>