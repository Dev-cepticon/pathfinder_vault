<script setup>
import Feat from '../../Components/Character/Feat.vue';
import DOMPurify from 'dompurify';

function sanitizeHTML(html) {
    return DOMPurify.sanitize(html);
}


</script>

<template>
    <div class="container text-light mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img src="https://cdn.dribbble.com/users/416621/screenshots/3797271/artboard_2.png" alt="Class Image" class="img-fluid rounded-circle border">
                </div>
                <div class="col-md-8">
                    <h1>{{ $page.props.class.name }}</h1>
                    <hr>
                    <p>{{ $page.props.class.description.flavor }}</p>
                </div>
            </div>
            <div class="row mt-4">
                <hr>
                <div class="col-md-9 pe-4">
                    <div class="row mx-5 border bg-danger bg-opacity-25">
                        <div class="col-md-6 px-5 pt-3 border-end">
                            <h4>Key Abilities</h4>
                            <p>
                            <h5>{{ $page.props.class.key_attributes[0] }} or {{ $page.props.class.key_attributes[1] }}
                            </h5>
                            </p>
                            <p>At 1st level your class gives you an ability boost to your choice of {{
                                $page.props.class.key_attributes[0]}} or {{ $page.props.class.key_attributes[1] }} </p>
                        </div>
                        <div class="col-md-6 px-5 pt-3">
                            <h4>Hit Points</h4>
                            <p>
                            <h5>{{ $page.props.class.hit_points }} plus your Constitution modifer</h5>
                            </p>
                            <p>You increase your maxium number of HP by the number at 1st level and every character
                                level</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4>During Combat Encounters...</h4>
                        <p>{{ $page.props.class.description.duringCombat }}</p>
                        <h4>During Social Encounters...</h4>
                        <p>{{ $page.props.class.description.duringSocial }}</p>
                        <h4>While Exploring...</h4>
                        <p>{{ $page.props.class.description.whileExploring }}</p>
                        <h4>In Downtime...</h4>
                        <p>{{ $page.props.class.description.inDowntime }}</p>
                        <h4>You Might...</h4>
                        <p>
                        <ul>
                            <li v-for="point in $page.props.class.description.youMight">{{ point }}</li>
                        </ul>

                        </p>
                        <h4>Others Probably...</h4>
                        <p>
                        <ul>
                            <li v-for="point in $page.props.class.description.othersProbably">{{ point }}</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 border-start ps-4">
                    <h3>Initial Proficiencies</h3>
                    <p class="text-justify" >At 1st level, you gain the listed proficiency ranks in the following statistics. You are untrained in anything not listed unless you gain a better proficiency rank in some other way.</p>
                    <h4>Perception</h4>
                    <p class="text-justify" v-html="sanitizeHTML($page.props.class.initail_proficiencies.perception.text)"></p>
                    <h4>Saving Throws</h4>
                    <p class="text-justify" v-html="sanitizeHTML($page.props.class.initail_proficiencies.saving_throws.text)"></p>
                    <h4>Skills</h4>
                    <p class="text-justify" v-html="sanitizeHTML($page.props.class.initail_proficiencies.skills.text)"></p>
                    <h4>Attacks</h4>
                    <p class="text-justify" v-html="sanitizeHTML($page.props.class.initail_proficiencies.attacks.text)"></p>
                    <h4>Defenses</h4>
                    <p class="text-justify" v-html="sanitizeHTML($page.props.class.initail_proficiencies.defenses.text)"></p>
                    <h4>Class DC</h4>
                    <p class="text-justify" v-html="sanitizeHTML($page.props.class.initail_proficiencies.class_dc.text)"></p>
                    <template v-if="$page.props.class.initail_proficiencies.spells">
                        <h4>Spells</h4>
                        <p>{{ $page.props.class.initail_proficiencies.spells }}</p>
                    </template>
                </div>
            </div>
            <div class="row mt-4"></div>
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="features-tab" data-bs-toggle="tab" data-bs-target="#features" type="button" role="tab" aria-controls="features" aria-selected="true">Class Features</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="feats-tab" data-bs-toggle="tab" data-bs-target="#feats" type="button" role="tab" aria-controls="feats" aria-selected="false">Class Feats</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
                            <h3 class="mt-3 mb-5">Class Features</h3>
                            <div v-for="feature in $page.props.class.features" :key="feature.id">
                                <h5>{{ feature.name }}</h5>
                                <p>{{ feature.description }}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="feats" role="tabpanel" aria-labelledby="feats-tab">
                            <h3 class="mt-3 mb-5">Class Feats</h3>
                            <Feat v-for="feat in $page.props.class.feats" :key="feat.id" :feat="feat" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>