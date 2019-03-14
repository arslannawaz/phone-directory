@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th >Type</th>
                                <th >Name</th>
                                <th >Twitter</th>
                                <th >Instagram</th>
                                <th >Facebook</th>
                                <th >Snapchat</th>
                                <th >Toll Free</th>
                                <th >Landline</th>
                                <th >Address</th>
                                <th >website</th>
                                <th colspan="2" class="column-title no-link last"><span class="nobr">Action</span></th>
                            </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td class=" ">{{$in->categories->name}}</td>
                                    <td class=" ">{{$in->name}}</td>
                                    <td class=" ">{{$in->twitter}}</td>
                                    <td class=" ">{{$in->instagram}}</td>
                                    <td class=" ">{{$in->facebook}}</td>
                                    <td class=" ">{{$in->snapchat}}</td>
                                    <td class=" ">{{$in->tollfree}}</td>
                                    <td class=" ">{{$in->landline}}</td>
                                    <td class=" ">{{$in->address}}</td>
                                    <td class=" ">{{$in->website}}</td>

                                    <td class=" ">

                                        <a href="{{route('panel.index')}}">Go to Panel</a>

                                    </td>




                                </tr>

                            </tbody>
                        </table>

                    </div>


                </div>

    @stop