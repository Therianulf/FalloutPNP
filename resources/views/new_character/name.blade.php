@extends('layouts.new_char_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Character</div>

                    <div class="panel-body">
                        <label for="first_name">Character's First Name</label> <input type="text" name="first_name" id="first_name">
                        <br/>
                        <label for="first_name">Character's Last Name</label> <input type="text" name="last_name" id="last_name">
                        <br/>
                        <table>
                            <tr>
                                <td> <label for="first_name">Character's Last Name</label></td>
                                <td>
                                    <button>+</button>
                                </td>
                                <td>
                                    <button>-</button>
                                </td>
                                <td>
                                    <input type="number" value="5" id="str">
                                </td>

                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
