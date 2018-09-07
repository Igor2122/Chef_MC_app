@extends('layouts.admin')

@section('meta')
@endsection

@section('title')
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
    </div>
@endsection            </thead>
                <tbody>
                  @foreach($tags as $tag)
                    <tr>
                      <td>{{ $tag->name }}</td>
                      <td>{{ date('d F Y', strtotime($tag->created_at)) }}</td>
                      <td>
                        <a title="Read product" href="{{ route('tags.show', ['id'=> $product->id]) }}" class="btn btn-primary"><span data-feather="eye"></span></a>
                        <a title="Edit product" href="{{ route('tags.edit', ['id'=> $product->id]) }}" class="btn btn-warning"><span data-feather="edit"></span></a>
                        <button title="Delete product" type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_product_{{ $product->id  }}"><span data-feather="delete"></span></button>
                      </td>
                    </tr>

                    <div class="modal fade" id="delete_product_{{ $product->id  }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <form class="" action="{{ route('tags.destroy', ['id' => $product->id]) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header bg-red">
                              <h4 class="modal-title" id="mySmallModalLabel">Delete tag</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">
                              Are you sure to delete tag: <b>{{ $product->name }} </b>?
                            </div>
                            <div class="modal-footer">
                              <a href="{{ url('/tags') }}">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                              </a>
                              <button type="submit" class="btn btn-outline" title="Delete" value="delete">Delete</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
</div>

@endsection