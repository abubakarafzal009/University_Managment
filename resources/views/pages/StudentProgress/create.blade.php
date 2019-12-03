@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">
            <h4 class="mb-0">Permission</h4>

        </div>
        <form class="form form-vertical" method="POST" action="{{ route('StudentExams.store') }}">
            @csrf
            <div class="card-content">
                <div class="card-body">
               
                                   <!-- <div class="form-group row">
                        <label class="control-label col-sm-4 text-right font-weight-bold" for="crud-indirizzo_carico">Name</label>
                        <div class="col-sm-8" id="wrap-indirizzo_carico">
                            <input name="name" type="text" class="form-control input-sm" value=""
                                   placeholder="Permission Name">
                        </div>
                    </div> -->
                    <div class="form-group row">
                            <label class="control-label col-sm-4 text-right font-weight-bold"
                                   for="crud-contratto">Student</label>
                            <div class="col-sm-8 dropdown-mul-2" id="wrap-contratto">
                
                                <select required="" data-select-2="" name="status"
                                        class="form-control input-sm select2-hidden-accessible"  id="crud-contratto mul-2">
                              
                            <option value="1">Sample</option>

                                   
                           
                                       
                                   
                                   
                                   
                                </select>
                            </div>
                        </div>    
                    <hr>
                    <div class="form-group row">
                            <label class="control-label col-sm-4 text-right font-weight-bold"
                                   for="crud-contratto">Exam</label>
                            <div class="col-sm-8 dropdown-mul-2" id="wrap-contratto">
                
                                <select required="" data-select-2="" name="status"
                                        class="form-control input-sm select2-hidden-accessible"  id="crud-contratto mul-2">
                              
                            <option value="1">Sample</option>

                                   
                           
                                       
                                   
                                   
                                   
                                </select>
                            </div>
                        </div>    
                        <hr>
                        <div class="form-group row">
                            <label class="control-label col-sm-4 text-right font-weight-bold"
                                   for="crud-contratto">Progress</label>
                            <div class="col-sm-8 dropdown-mul-2" id="wrap-contratto">
                
                                <select required="" data-select-2="" name="status"
                                        class="form-control input-sm select2-hidden-accessible"  id="crud-contratto mul-2">
                              
                            <option value="1">Sample</option>

                                   
                           
                                       
                                   
                                   
                                   
                                </select>
                            </div>
                        </div>    
                        <hr>
                        <div class="form-group row">
                            <label class="control-label col-sm-4 text-right font-weight-bold"
                                   for="crud-contratto">Grade</label>
                            <div class="col-sm-8 dropdown-mul-2" id="wrap-contratto">
                
                                <select required="" data-select-2="" name="status"
                                        class="form-control input-sm select2-hidden-accessible"  id="crud-contratto mul-2">
                              
                            <option value="1">Sample</option>

                                   
                           
                                       
                                   
                                   
                                   
                                </select>
                            </div>
                        </div>    

                </div>
            </div>
            <div class="card-footer mb-3">
                <div class="pull-right">

                    <a class="btn btn-warning btn-xs text-white">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-success btn-xs text-white">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>












@endsection