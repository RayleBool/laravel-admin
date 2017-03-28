@extends('backend.layouts.master')

@section('title', '联盟管理')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>联盟管理</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> 管理系统</a></li>
      <li class="active">联盟管理</li>
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
                            <th>名称</th>
                            <!-- <th class="hidden-sm">描述</th> -->
                            <th class="hidden-md">成员数量</th>
                            <th class="hidden-md">粉丝数</th>
                            <th class="hidden-md">点赞数</th>
                            <th class="hidden-sm">评论数</th>
                            <th class="hidden-sm">鲜花</th>
                            <!-- <th class="hidden-sm">规则</th> -->
                            <th class="hidden-sm">创建时间</th>
                            <th data-sortable="false">操作</th>
                        </tr>
                     </thead>
                    <tbody>
                        @if($groups)
                        @foreach($groups as $group)
                        <tr>
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->name }}</td>
                            <!-- <td class="hidden-sm">{{ $group->description }}</td> -->
                            <td class="hidden-md">{{ $group->member_count }}</td>
                            <td class="hidden-md">{{ $group->fan_count }}</td>
                            <td class="hidden-md">{{ $group->like_count }}</td>
                            <td class="hidden-sm">{{ $group->comment_count }}</td>
                            <td class="hidden-sm">{{ $group->flower }}</td>
                            <!-- <td class="hidden-sm">{{ $group->rule }}</td> -->
                            <td class="hidden-sm">{{ $group->created_time }}</td>
                            <td>
                                <a href="" class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> 编辑
                                </a>
                                 <a href="" class="btn btn-xs btn-info">
                                    <i class="fa fa-info-circle"></i> 详情
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