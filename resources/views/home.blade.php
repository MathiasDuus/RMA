@include('inc.header')

{{-- TODO make homepage, som viser den nyeste værdi--}}

<div class="container">
    <div class="row">
        <h1 id="location"></h1>
    </div>
    <div class="row">
        <div class="col">
            <p id="temperature"></p>
        </div>
        <div class="col">
            <p id="humidity"></p>
        </div>
        <div class="col">
            <p id="light"></p>
        </div>
    </div>

</div>


</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
