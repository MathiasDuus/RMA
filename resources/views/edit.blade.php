@include('inc.header')

{{-- TODO make edit, til at ændre grænseværdierne--}}
{{-- TODO Lav controller og resource + evt custom routes--}}

<div class="container">
    <div class="row">
        <h1 id="location">LOLOLOLOO</h1>
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
