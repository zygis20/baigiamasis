<template>
<div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="about">Apie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="help">Pagalba</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts">Kontaktai</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1>Molėtų regijono žvejo leidimo užsakymas</h1>
    <div class="mydiv">
        <h3>Norėdami įsigyti žvejo megėjo bilietą užpyldikite anketą</h3>
        <a class="btn btn-sm btn-primary" href="tickets/create">Užpyldikite anketą</a>
    </div>


</div>
</template>

<script>
export default {
    name: "Home"
}
</script>

<style scoped>

.mydiv{
    margin-top: 20px;
}


</style>
