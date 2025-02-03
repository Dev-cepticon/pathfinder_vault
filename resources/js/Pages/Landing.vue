<script setup>
import CardBgImageLarge from '../Components/CardBgImageLarge.vue';


</script>
<template>
    <div class="container text-light">
        <div class="container-fluid">
            <section id="primary" class="mt-5">
                <div class="">
                    <div class="row ">
                        <div class="col mx-auto">
                            <CardBgImageLarge name="tochar" src="_cards/card1.png"/>
                        </div>
                        <div class="col-5">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col my-2">
                                        <div class="card text-bg-dark">
                                            <img src="/public/storage/_cards/card2.png" class="card-img" alt="...">
                                            <div class="card-img-overlay">
                                                <p class="card-text text-start fs-2 fw-bold bottom-card">
                                                    Begin your adventure.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card text-bg-dark">
                                            <img src="/public/storage/_cards/card3.png" class="card-img" alt="...">
                                            <div class="card-img-overlay">
                                                <p class="card-text text-end fs-2 fw-bold bottom-card px-4">
                                                    Browse fearsome beasts.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="media" class="mt-3">
                <div class="container my-4">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/qxdYly42Cmc?si=addqUuLB4sHCLafK"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col">
                                <p class="fs-2 fw-bold text-start mt-5">
                                    Dice, Rules, Books, Oh My!
                                </p>
                                <p class="fs-5 text-start">
                                    Learning to play Pathfinder 2e is an exciting journey into a world of
                                    fantasy and adventure. With a rich set of rules and a variety of character
                                    options, players can create unique heroes and embark on epic quests. Whether
                                    you're a seasoned gamer or new to tabletop RPGs, Pathfinder 2e offers a
                                    rewarding and immersive experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="news" class="mt-3">
                <div class="container text-center">
                    <div class="row">
                        <div class="col ps-5">
                            <a href="https://gamerant.com/pathfinder-2e-best-beginner-classes-ranked/" target="_blank"
                                class="text-decoration-none">
                                <div class="card" style="height: 470px;">
                                    <img src="/public/storage/_news/bignews1.png" class="card-img-top " alt="heros">
                                    <div class="card-body">
                                        <h5 class="card-title">Pathfinder 2E: 8 Best Beginner-Friendly
                                            Classes,
                                            Ranked</h5>
                                        <p class="card-text text-start">
                                            One of the most important aspects of creating a character in
                                            Pathfinder
                                            2e is selecting the class, as much of the player's progression
                                            throughout the campaign revolves around this choice. It is a
                                            crucial
                                            moment that also requires considering what the rest of the group
                                            is
                                            choosing to ensure a balanced...
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.dicebreaker.com/games/pathfinder-2e/how-to/how-to-play-pathfinder-rpg-2e"
                                target="_blank" class="text-decoration-none">
                                <div class="card" style="height: 470px;">
                                    <img src="/public/storage/_news/bignews2.png" class="card-img-top " alt="heros"
                                        style="max-height: 284px;">
                                    <div class="card-body">
                                        <h5 class="card-title">How to play Pathfinder RPG: A beginner’s
                                            guide to 2E
                                        </h5>
                                        <p class="card-text text-start">
                                            Pathfinder is a rich and complex fantasy RPG that uses the same
                                            d20
                                            ruleset at the core of Dungeons & Dragons. Players take on the
                                            role of
                                            heroic adventurers, often explorers and scholars employed by the
                                            Pathfinder Society, who travel the world solving problems,
                                            unravelling
                                            mysteries and collecting...
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</template>