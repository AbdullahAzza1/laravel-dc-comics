<main>
    <div class="content">
        <div class="jumbo">
            <img class="imgJumbo" src="/img/jumbotron.jpg" alt="">
        </div>
        <div>CURRENT SERIES</div>
        <div class="fumetti">
            <AppCard :titolo="fumetto.series" :image="fumetto.thumb" v-for="fumetto in comics" />
        </div>
    </div>
    <div class="content2">
        <!-- <a v-for="brands in gadget" :href="gadget.url">{{ gadget.text }}</a> -->
    </div>
</main>