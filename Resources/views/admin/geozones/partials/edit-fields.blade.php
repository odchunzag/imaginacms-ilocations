<script type="text/javascript">
var geozones=[];
var countTr=0;
var dataEdit="";
var countryValue="";
var zoneValue="";
</script>
<div class="box-body">
  <label>Geo Zone Name: </label>
  <input type="text" class="form-control" name="name" id="name" value="{{$geozones->name}}">
  <label>Description: </label>
  <input type="text" class="form-control" name="description" id="description" value="{{$geozones->description}}">
  <input type="hidden" name="geozones" id="geozones" value="">
  <br>
  <h2>Geo zones</h2>
  <hr>
  <div class="row">
    <div class="col-md-4">
      <select class="form-control" name="country" id="country" onchange="loadZones()">
        <option value="">Select a country</option>
      </select>
    </div>
    <div class="col-md-4">
      <select class="form-control" name="zone" id="zone" onchange="">
        <option value="0">All zones</option>
      </select>
    </div>
    <div class="col-md-4">
      <button type="button" class="btn btn-primary add_geozone" name="button"><i class="fa fa-plus-circle"></i></button>
    </div>
  </div>
  <br>
  <table class="table table-bordered" id="table_geozones">
    <thead>
      <th>Country</th>
      <th>Zone</th>
      <th></th>
    </thead>
    <tbody>
      @foreach($geozoneRelation as $key)
      <tr id="tr{{$loop->index}}">
        <td><input type="text" class="form-control" value="{{$key->iso_2_country}}" readonly></td>
        <td><input type="text" class="form-control" value="@if(is_numeric($key->iso_2_zone)) All zones @else {{$key->iso_2_zone}} @endif" readonly></td>
        <td><button type="button" class="btn btn-danger" onclick="removeRow({{$loop->index}})" name="button"><i class="fa fa-minus-circle"></i></button></td>
      </tr>
      <script type="text/javascript">
      countryValue="{{$key->iso_2_country}}";
      zoneValue="{{$key->iso_2_zone}}";
      dataEdit = {countryValue, zoneValue,countTr}
      countTr++;
      geozones.push(dataEdit);
      </script>
      @endforeach
    </tbody>
  </table>
</div>
