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
							<h2>商品信息总览</h2>
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
													<th>商品名称</th>
													<th>商品类别</th>
													<th>价格</th>
													<th>库存</th>
													<th>销量</th>
													<th>商品描述</th>
													<th>状态</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Other browsers</td>
													<td>All others</td>
													<td>-</td>
													<td>-</td>
													<td>U</td>
													<td>-</td>
													<td>-</td>
													<td>U</td>
												</tr>
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