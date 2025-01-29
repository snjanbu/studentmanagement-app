<a href="{{ url('/'.$data['resourceName'].'/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="lar la-eye" aria-hidden="true"></i></button></a>
<a href="{{ url('/'.$data['resourceName'].'/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="lar la-edit" aria-hidden="true"></i></button></a>

<form method="POST" action="{{ url('/'.$data['resourceName'].'/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
{{ method_field('DELETE') }}
{{ csrf_field() }}
<button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="la la-trash" aria-hidden="true"></i></button>
</form>