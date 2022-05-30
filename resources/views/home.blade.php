@include('inc.header')

{{-- TODO make homepage, som viser den nyeste værdi--}}

<div class="container">
    <div class="row">
        <h1 id="location"></h1>
    </div>
    <div class="row">
        <div class="col">
            <h2 id="temperature"></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 id="humidity"></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 id="light"></h2>
        </div>
    </div>

</div>


</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
