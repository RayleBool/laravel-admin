@extends('backend.layouts.master')

@section('title', '用户管理')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>用户管理</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> 管理系统</a></li>
      <li class="active">用户管理</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="box">
             <div class="box-body">
                 <table id="tags-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>用户名</th>
                            <th class="hidden-sm">昵称</th>
                            <th class="hidden-md">电话</th>
                            <th class="hidden-md">鲜花数</th>
                            <th class="hidden-sm">是否认证</th>
                            <th class="hidden-sm">审核</th>
                            <th class="hidden-sm">登录状态</th>
                            <th class="hidden-sm">粉丝</th>
                            <th class="hidden-sm">关注</th>
                            <th data-sortable="false">操作</th>
                        </tr>
                     </thead>
                    <tbody>
                        @if($users)
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td class="hidden-sm">{{ $user->nickname }}</td>
                            <td class="hidden-md">{{ $user->phone }}</td>
                            <td class="hidden-md">{{ $user->eb }}</td>
                            <td class="hidden-sm">{{ $user->class }}</td>
                            <td class="hidden-sm">{{ $user->state }}</td>
                            <td class="hidden-sm">{{ $user->loginstate }}</td>
                            <td class="hidden-sm">{{ $user->fans }}</td>
                            <td class="hidden-sm">{{ $user->follow }}</td>
                            <td>
                                <a href="" class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> 编辑
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
         </div>
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
