<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/responsiveTable/dataTable.css')}}" rel="stylesheet" type="text/css" />

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/responsiveTable/responsiveTable.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>


<div style="width:600px;height:400px">
<table id="memberInfoTable" class="table table-striped">
    <thead>
    <tr>
        <th>ENO</th>
        <th>EMPName</th>
        <th>Country</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>001</td>
        <td>Anusha</td>
        <td>India</td>
        <td>10000</td>
    </tr>
    <tr>
        <td>002</td>
        <td>Charles</td>
        <td>United Kingdom</td>
        <td>28000</td>
    </tr>
    <tr>
        <td>003</td>
        <td>Sravani</td>
        <td>Australia</td>
        <td>7000</td>
    </tr>
    <tr>
        <td>004</td>
        <td>Amar</td>
        <td>India</td>
        <td>18000</td>
    </tr>
    <tr>
        <td>005</td>
        <td>Lakshmi</td>
        <td>India</td>
        <td>12000</td>
    </tr>
    <tr>
        <td>006</td>
        <td>James</td>
        <td>Canada</td>
        <td>50000</td>
    </tr>

    <tr>
        <td>007</td>
        <td>Ronald</td>
        <td>US</td>
        <td>75000</td>
    </tr>
    <tr>
        <td>008</td>
        <td>Mike</td>
        <td>Belgium</td>
        <td>100000</td>
    </tr>
    <tr>
        <td>009</td>
        <td>Andrew</td>
        <td>Argentina</td>
        <td>45000</td>
    </tr>

    <tr>
        <td>010</td>
        <td>Stephen</td>
        <td>Austria</td>
        <td>30000</td>
    </tr>
    <tr>
        <td>011</td>
        <td>Sara</td>
        <td>China</td>
        <td>750000</td>
    </tr>
    <tr>
        <td>012</td>
        <td>JonRoot</td>
        <td>Argentina</td>
        <td>65000</td>
    </tr>
    </tbody>
</table>
</div>


<script>
    $(document).ready(function(){
        $('#memberInfoTable').dataTable();
    });
</script>

<style>
    th {
        text-align:center;
        font-size:12px;
    }
    td {
        text-align:center;
        font-size:12px;
    }
</style>