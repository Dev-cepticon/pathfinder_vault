<script setup>
</script>

<template>
    <div class="container text-light mt-5">
        <div class="container-fluid">
            <div class="mb-3 ">
                <div class="d-flex justify-content-between mb-2 border-bottom ">
                    <div>{{ $page.props.background.name }}</div>
                    <div>Source
                        <Link href="#">
                        </Link>
                    </div>
                </div>
                <p>{{ $page.props.background.description }}</p>
            </div>
        </div>
    </div>
    < </template>