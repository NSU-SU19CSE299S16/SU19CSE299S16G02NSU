@extends('layouts.admin')

@section('content')
<div class="contaniner">
<h4 class="text-center lead">All Doctors</h4>
 <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Speciality</th>
        <th scope="col">Hospital</th>
        <th scope="col">Contact</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark Roberts</td>
        <td>Cardio</td>
        <td>Square Hospitals</td>
        <td>069696969696</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Mark Roberts</td>
        <td>Cardio</td>
        <td>Square Hospitals</td>
        <td>069696969696</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Mark Roberts</td>
        <td>Cardio</td>
        <td>Square Hospitals</td>
        <td>069696969696</td>
        </tr>
    </tbody>
    </table>
</div>
@endsection