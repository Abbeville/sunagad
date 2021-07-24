<table class="table">
	<tbody>
	@foreach($basket->all() as $product)
		<tr>
			<td><em>{{ $product->title }}</em></td>
			<td><em>{{ $product->quantity }}</em></td>
		</tr>
	@endforeach
	</tbody>
</table>