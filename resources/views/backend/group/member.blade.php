@extends('backend.layouts.master')

@section('title', '联盟成员')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>联盟成员管理</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> 管理系统</a></li>
      <li class="active">联盟成员管理</li>
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
                            <th>联盟名称</th>
                            <th class="hidden-sm">用户名称</th>
                            <th class="hidden-sm">联盟别名</th>
                            <th class="hidden-md">角色</th>
                            <th class="hidden-md">申请状态</th>
                            <th data-sortable="false">操作</th>
                        </tr>
                     </thead>
                    <tbody>
                        @if($groupUsers)
                        @foreach($groupUsers as $groupUser)
                        <tr>
                            <td>{{ $groupUser->id }}</td>
                            <td>{{ $groupUser->group->name }}</td>
                            <td class="hidden-sm">{{ $groupUser->user->nickname }}</td>
                            <td class="hidden-sm">{{ $groupUser->group_nick_name }}</td>
                            <td class="hidden-md">{{ $groupUser->group_role }}</td>
                            <td class="hidden-md">{{ $groupUser->group_apply_status }}</td>
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
