@extends("Admin.AdminPublic.public")
@section('admin')
<!doctype html>
<html>
	<head>
	</head>
	<body>
	 	<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-head tabs">
							<h2>后台管理员信息</h2>
							<form action="#">
								<ul class='nav nav-tabs'>
									<li>
										<input type="text">
									</li>
									<li>
										<input type="submit" value="搜索" class="btn btn-info">
									</li>
								</ul>
							</form>
						</div>
						<div class="box-content box-nomargin">
							<div class="tab-content">
									<div class="tab-pane active" id="basic">
										<table class='table table-striped dataTable table-bordered'>
											<thead>
												<tr>
													<th>ID</th>
													<th>管理员</th>
													<th>密码</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
												@foreach($data as $row)
												<tr>
													<td>{{$row->id}}</td>
													<td>{{$row->username}}</td>
													<td>{{$row->password}}</td>
													<td><form action="/admin_userlist/{{$row->id}}" method='post'>
															{{csrf_field()}}
															{{method_field('DELETE')}}
															<button class="btn btn-danger">删除</button></form>
														<a href="/admin_userlist/{{$row->id}}/edit" class="btn btn-success">修改</a>

														<a href="/purview_fenpei/{{$row->id}}" class="btn btn-info">分配角色</a>
													</td>
												
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
									
							</div>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>
@endsection