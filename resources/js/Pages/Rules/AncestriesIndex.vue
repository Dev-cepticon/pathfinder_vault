<script setup>
import CardAncestry from '../../Components/CardAncestry.vue';

const card_location = 'storage/_cards/';

</script>

<template>
    <div class="container text-light mt-5">
        <div class="container-fluid">
            <h1>Ancestries</h1>
            <hr>
            <!-- 
            TODO!
            For loop for each book/content listing title and possible badge 
            then for loop for each ancestry in that book.
            -->
            <!-- <a href="{{route('job', $job['id'])}}"></a> -->
            <div class="d-flex flex-row">
                <Link :href="route('ancestry.show', $page.props.ancestries[0].id)">
                <CardAncestry :src="card_location + 'cardancestry' + $page.props.ancestries[0].name + '.png'"
                    :race="$page.props.ancestries[0]" uclass="mx-1" />
                </Link>
                <Link :href="route('ancestry.show', $page.props.ancestries[1].id)">
                <CardAncestry :src="card_location + 'cardancestry' + $page.props.ancestries[1].name + '.png'"
                    :race="$page.props.ancestries[1]" uclass="mx-1" />
                </Link>
                <!-- <CardAncestry :src="card_location + 'cardancestry' + $page.props.ancestries[2].name + '.png'" :race="$page.props.ancestries[2]" /> -->
            </div>

            <!-- <div class="d-flex flex-row">
                <CardAncestry :src="card_location + 'cardancestry' + $page.props.ancestries[3].name + '.png'" :race="$page.props.ancestries[3]" uclass="mx-1"/>
                <CardAncestry :src="card_location + 'cardancestry' + $page.props.ancestries[4].name + '.png'" :race="$page.props.ancestries[4]" uclass="mx-1"/>
                <CardAncestry :src="card_location + 'cardancestry' + $page.props.ancestries[5].name + '.png'" :race="$page.props.ancestries[4]" />
            </div> -->

        </div>
    </div>
</template>