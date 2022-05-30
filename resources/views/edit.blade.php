@include('inc.header')


<div class="container">
    <div class="row">
        <h1>Ændre grænseværdierne på sensorerene</h1>
    </div>
    <div class="row">
        <form id="updateForm">
            <div class="row mb-3">
                <label for="temperaturInput" class="col-sm-2 col-form-label">Temperatur</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="temperaturInput">
                </div>
            </div>
            <div class="row mb-3">
                <label for="humidityInput" class="col-sm-2 col-form-label">Humidity</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="humidityInput">
                </div>
            </div>
            <div class="row mb-3">
                <label for="lightInput" class="col-sm-2 col-form-label">Light</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="lightInput">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</div>


</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
