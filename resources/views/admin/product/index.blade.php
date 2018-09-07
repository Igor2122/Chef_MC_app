@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="animate fadeIn">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Products <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm float-right" title="Add New Product">
          <span data-feather="plus"></span> Add New Product
        </a></div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-hover table-striped table-sm">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Posted On</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                    <tr>
                      <td>{{ $product->name }}</td>
                      <td>{{ date('d F Y', strtotime($product->created_at)) }}</td>
                      <td>
                        <a title="Read product" href="{{ route('product.show', ['id'=> $product->id]) }}" class="btn btn-primary"><span data-feather="eye"></span></a>
                        <a title="Edit product" href="{{ route('product.edit', ['id'=> $product->id]) }}" class="btn btn-warning"><span data-feather="edit"></span></a>
                        <button title="Delete product" type="button" class="btn btn-danger" data-toggle="modal" data-target="#product{{ $product->id  }}"><span data-feather="delete"></span></button>
                      </td>
                    </tr>

                    <div class="modal fade" id="product{{ $product->id  }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <form class="" action="{{ route('product.destroy', ['id' => $product->id]) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header bg-red">
                              <h4 class="modal-title" id="mySmallModalLabel">Delete product</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">
                              Are you sure to delete product: <b>{{ $product->name }} </b>?
                            </div>
                            <div class="modal-footer">
                              <a href="{{ url('/product') }}">
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