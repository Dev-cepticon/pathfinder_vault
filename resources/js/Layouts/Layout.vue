<script setup>
import NavLink from "@/Components/NavLink.vue";
import NavDropdown from "../Components/NavDropdown.vue";
import NavImgDropdown from "@/Components/NavImgDropdown.vue";

</script>


<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-tertiary bg-gradient">
            <div class="container-fluid">
                <Link class="navbar-brand link-light" :href="route('landing')">Pathfinder Vault</Link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <NavLink name="Characters" :href="route('characters')" current="Characters" />
                        <NavLink name="Campaigns" :href="route('campaigns')" current="Campaigns" />
                        <NavLink name="Homebrew" :href="route('homebrew')" current="Homebrew" />
                        <NavDropdown name="Rules">
                            <NavLink name="Ancestries" :href="route('ancestries.index')" current="Ancestries" />
                            <NavLink name="Background" :href="route('backgrounds.index')" current="Background" />
                            <NavLink name="Classes" :href="route('classes.index')" current="Classes" />
                            <NavLink name="Feats" :href="route('feats.index')" current="Feats" />
                            

                        </NavDropdown>
                        <NavLink name="Forums" :href="route('forums')" current="Forums" />
                    </ul>
                    <form class="d-flex mx-5" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mx-1 float-end" v-if="!$page.props.auth.user">
                        <NavLink name="Register" :href="route('register')" current="Auth/Register" />
                        <NavLink name="Login" :href="route('login')" current="Auth/Login" />
                    </ul>
                    <ul class="navbar-nav mx-1 float-end" v-else>
                        <NavImgDropdown name="Account" href="#" />
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <slot />
    <footer class="bg-tertiary bg-gradient text-light text-center py-3 mt-5">
        <p>&copy; 2025 Pathfinder Vault</p>
        This website uses content from the Pathfinder 2nd Edition System Reference Document (SRD), published under the
        Open Game License (OGL) by Paizo Inc. Pathfinder is a registered trademark of Paizo Inc. This site is not
        affiliated with Paizo Inc. in any way.
    </footer>
</template>