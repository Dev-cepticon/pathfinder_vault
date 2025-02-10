<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import Feat from '../../Components/Character/Feat.vue';

const page = usePage();
const ancestry = computed(() => page.props.ancestry);
const img_location = '../storage/_ancestry/' + ancestry.value.name + '.png';


</script>

<template>
    <div class=" container text-light mt-5 z-3  ">
        <!-- active aria-current="page" -->
        <nav>
            <ul class="nav nav-tabs" id="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="ancestry_desc" data-bs-toggle="tab" data-bs-target="#tab-desc"
                        role="tab">{{
                            ancestry.name }} Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="ancestry_heritage" data-bs-toggle="tab" data-bs-target="#tab-heritage"
                        role="tab">{{ ancestry.name }} Heritage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="ancestry_feats" data-bs-toggle="tab" data-bs-target="#tab-feats"
                        role="tab">{{ ancestry.name }} Feats</a>
                </li>
            </ul>
        </nav>
        <div class="tab-content" id="tab-content">
            <div class="tab-pane fade show active p-3" id="tab-desc" role="tabpanel" aria-labelledby="ancestry_desc">
                <div class="container-fluid">
                    <h1><strong>{{ ancestry.name }}</strong></h1>

                    Ancestry Details

                    <div class="d-flex flex-row justify-content-start">
                        <div class="me-5 anDetails">
                            <p class="fst-italic fs-5">{{ ancestry.description.flavor.body }}</p>
                            <p> {{ ancestry.description.top.body }}</p>
                            <div>
                                <h5>
                                    <strong>You Might...</strong>
                                </h5>
                                <ul>
                                    <li>
                                        {{ ancestry.description.youmight.point1 }}
                                    </li>
                                    <li>
                                        {{ ancestry.description.youmight.point2 }}
                                    </li>
                                    <li>
                                        {{ ancestry.description.youmight.point3 }}
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5>
                                    <strong>Others Probably...</strong>
                                </h5>
                                <ul>
                                    <li>
                                        {{ ancestry.description.othersprobably.point1 }}
                                    </li>
                                    <li>
                                        {{ ancestry.description.othersprobably.point2 }}
                                    </li>
                                    <li>
                                        {{ ancestry.description.othersprobably.point3 }}
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5>
                                    <strong>Physical Description</strong>
                                </h5>
                                <p>
                                    {{ ancestry.description.physicaldescription.body }}
                                </p>
                            </div>
                            <div>
                                <h5>
                                    <strong>Society</strong>
                                </h5>
                                <p>
                                    {{ ancestry.description.society.body }}
                                </p>
                            </div>
                            <div>
                                <h5>
                                    <strong>Beliefs</strong>
                                </h5>
                                <p>
                                    {{ ancestry.description.beliefs.body }}
                                </p>
                            </div>
                            <div>
                                <h5>
                                    <strong>Names</strong>
                                </h5>
                                <p>
                                    {{ ancestry.description.names.body }}
                                <p><strong>Sample Names</strong></p>
                                <p>{{ ancestry.description.names.names }}</p>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-column ms-5">
                            <div class="">
                                <div class="fs-5 fw-bold">Hit Points</div>
                                <div class="mb-3">{{ ancestry.hit_points }}</div>
                            </div>
                            <div class="">
                                <div class="fs-5 fw-bold">Size</div>
                                <div class="mb-3">{{ ancestry.size }}</div>
                            </div>
                            <div class="">
                                <div class="fs-5 fw-bold">Ability Boosts</div>
                                <div class="" v-for="boost in ancestry.ability_boosts.default">{{ boost }}</div>
                                <div class="mb" v-if="ancestry.ability_boosts.free_boost > 0">{{ ancestry.ability_boosts.free_boost}} free ability boost(s) </div>
                            </div>
                            <div class="mt-3">
                                <div class="fs-5 fw-bold">Ablility Flaw</div>
                                <div class="mb-3">{{ ancestry.ability_flaw }}</div>
                            </div>
                            <div class="">
                                <div class="fs-5 fw-bold">Languages</div>
                                <div class="mb" v-for="lang in ancestry.languages.default">{{ lang }}</div>
                                <div class="mb">Additional languages equal to your Intelligence modifier (if it's positive). Choose from <template v-for="add in ancestry.languages.additional">{{ add }}, </template> and any other languages to which you have access (such as the languages prevalent in your region).</div>
                            </div>
                            <div>
                                <div class="fs-5 fw-bold mt-3">Traits</div>
                                <div class="mb" v-for="lang in ancestry.traits">{{ lang }}</div>
                            </div>
                            <div class="">
                                <div class="fs-5 fw-bold mt-3">Vision</div>
                                <div class="mb-3">{{ ancestry.vision }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="tab-content">
            <div class="tab-pane fade show active p-3" id="tab-heritage" role="tabpanel"
                aria-labelledby="ancestry_heritage">
                <div class="accordion" id="accordionHeritage">
                    <div class="accordion-item" v-for="heritage, index in ancestry.heritages">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                :data-bs-target="'#collapse' + index" aria-expanded="true"
                                :aria-controls="'collapse' + index">
                                {{ heritage.name }}
                            </button>
                        </h2>
                        <div :id="'collapse' + index" class="accordion-collapse collapse bg-dark text-light"
                            data-bs-parent="#accordionHeritage">
                            <div class="accordion-body">
                                <p>Source
                                    <Link href="#">{{ heritage.content_id }}</Link>
                                </p>
                                <p>{{ heritage.description }}</p>
                                <p>{{ heritage.addon.name }}</p>
                                <p>{{ heritage.addon.trigger }}</p>
                                <hr>
                                <p>{{ heritage.addon.body }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="tab-content">
            <div class="tab-pane fade show active p-3" id="tab-feats" role="tabpanel" aria-labelledby="ancestry_feat">

                <div class="accordion" id="accordionFeats">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1st" aria-expanded="true" aria-controls="collapse1st">
                                1st Level
                            </button>
                        </h2>
                        <div id="collapse1st" class="accordion-collapse collapse bg-dark text-light"
                            data-bs-parent="#accordionHeritage">
                            <div class="accordion-body">
                                <template v-for="feat in ancestry.feats">
                                    <Feat :feat="feat" v-if="feat.level == 1"></Feat>
                                </template>  
                            </div>
                            
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5th" aria-expanded="true" aria-controls="collapse5th">
                                5th Level
                            </button>
                        </h2>
                        <div id="collapse5th" class="accordion-collapse collapse bg-dark text-light"
                            data-bs-parent="#accordionHeritage">
                            <div class="accordion-body">
                                <template v-for="feat in ancestry.feats">
                                    <Feat :feat="feat" v-if="feat.level == 5"></Feat>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse9th" aria-expanded="true" aria-controls="collapse9th">
                                9th Level
                            </button>
                        </h2>
                        <div id="collapse9th" class="accordion-collapse collapse bg-dark text-light"
                            data-bs-parent="#accordionHeritage">
                            <div class="accordion-body">
                                <template v-for="feat in ancestry.feats">
                                    <Feat :feat="feat" v-if="feat.level == 9"></Feat>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse13th" aria-expanded="true" aria-controls="collapse13th">
                                13th Level
                            </button>
                        </h2>
                        <div id="collapse13th" class="accordion-collapse collapse bg-dark text-light"
                            data-bs-parent="#accordionHeritage">
                            <div class="accordion-body">
                                <template v-for="feat in ancestry.feats">
                                    <Feat :feat="feat" v-if="feat.level == 13"></Feat>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <img :src="img_location" :alt="ancestry.name" class="img-fluid z-2 position-absolute top-50 end-0 " /> -->




</template>