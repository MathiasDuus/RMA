@include('inc.header')

<div class="container">
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Light</th>
            <th>School</th>
            <th>Room</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody id="history_table">
        </tbody>
    </table>

</div>


</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
