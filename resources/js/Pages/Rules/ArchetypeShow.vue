<script setup>
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
                    <hr>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-9">
                    <div class="row mx-5">
                        <div class="col-md-6 px-5">
                            <h4>Key Abilities</h4>
                            <p>
                            <h5>{{ $page.props.class.key_attributes[0] }} or {{ $page.props.class.key_attributes[1] }}
                            </h5>
                            </p>
                            <p>At 1st level your class gives you an ability boost to your choice of {{
                                $page.props.class.key_attributes[0]}} or {{ $page.props.class.key_attributes[1] }} </p>
                        </div>
                        <div class="col-md-6 px-5">
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
                <div class="col-md-3">
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
        </div>
    </div>
</template>