<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">{{$filters['title']}}</div>
			<div class="panel-body">
				@forelse($filters['filters'] as $key => $value)
					<div class="checkbox">
						<label>
							<?php $query 	= $filters['value'].'='.$key;?>
							<input type="checkbox" onchange="self.location=self.location+'?{{$query}}'">{{$value}}
						</label>
					</div>
				@empty
					HERE GOES FILTER
				@endforelse
			</div>
		</div>

	</div><!-- /.col-md-12 -->
</div><!-- /.row -->