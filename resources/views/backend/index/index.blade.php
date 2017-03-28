@extends('backend.layouts.master')

@section('title', '首页')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>DashBoard</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> 管理系统</a></li>
      <li class="active">dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="box">
             <div class="box-body">
                 <table id="tags-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Tag</th>
                            <th>Title</th>
                            <th class="hidden-sm">Subtitle</th>
                            <th class="hidden-md">Page Image</th>
                            <th class="hidden-md">Meta Description</th>
                            <th class="hidden-md">Layout</th>
                            <th class="hidden-sm">Direction</th>
                            <th data-sortable="false">Actions</th>
                        </tr>
                     </thead>
                    <tbody>

                        <tr>
                            <td>2</td>
                            <td>3</td>
                            <td class="hidden-sm">4</td>
                            <td class="hidden-md">2</td>
                            <td class="hidden-md">1</td>
                            <td class="hidden-md">1</td>
                            <td class="hidden-sm">
                                1
                            </td>
                            <td>
                                <a href="" class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
         </div>
     </section>
 </div>

  </section>
  <!-- /.content -->
</div>
@endsection

@section('javascripts-page')
    <script>
        $(function() {
            $("#tags-table").DataTable({
            });
        });
    </script>
@stop
