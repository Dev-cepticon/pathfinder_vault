<script setup>

</script>

<template>

    <Head :title="`| ${$page.component}`" />
    <div class="container text-light">
        <div class="container-fluid">
            <div class="">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="card card-size2">
                                <img src="/public/storage/_cards/char1.png" class="card-img-top top-card-img" alt="three characters">
                                <div class="card-body">
                                    <h5 class="card-title">Standard</h5>
                                    <p class="card-text">Creating a character using a step-by-step process.
                                    </p>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    Start Building >
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card card-size2">
                                <img src="/public/storage/_cards/char2.png" class="card-img-top top-card-img" alt="three characters">
                                <div class="card-body">
                                    <h5 class="card-title">Premade</h5>
                                    <p class="card-text">Browse a list of pre-made characters to use as-is or as a
                                        starting point for your own character.
                                    </p>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    Start Browsing >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body card-size">
                                    <h5 class="card-title">Quick Builld</h5>
                                    <p class="card-text">Choose a species and a class to quickly create a level 1
                                        character.</p>

                                </div>
                                <div class="card-footer text-body-secondary">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body card-size">
                                    <h5 class="card-title">Random</h5>
                                    <p class="card-text">Roll up a randomized character! You can optionally set some
                                        parameters such as level, species, and class.</p>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>