
@extends('layouts.app1', ['class' => 'bg-default'])

@section('content')

      <div class="row">
        <div class="col">
          <div class="card">
         <!-- Card header -->
        @if(session()->has('message'))
            <div class="alert alert-{{ session()->get('result') ? 'success' : 'danger'}} mt-2 ml-2 mr-2" role="alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <h4 class="alert-heading">{{ session()->get('result') ? 'Well done!' : 'not done!'}}</h4>
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card-header border-0">
          <h3 class="mb-0">Customers List</h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Name</th>
                <th scope="col" class="sort" data-sort="budget">Phone</th>
                <th scope="col" class="sort" data-sort="status">Status</th>
                <th scope="col" class="sort" data-sort="budget">Budget</th>
                <th scope="col" class="sort" data-sort="budget">Email</th>
                <th scope="col" class="sort" data-sort="budget">Message</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">

              @foreach ($customers as $customer)

              <tr>
                <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-1">
                          <img alt="Image placeholder" src="{{ asset('assets') }}/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                      <span class="name mb-0 text-sm">{{ $customer->name;}}</span>
                        </div>
                      </div>
                </th>
                <td class="budget">
                  {{ $customer->phone;}}
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i>
                    <span class="status">pending</span>
                  </span>
                </td>
                <td>
                  {{ $customer->budget.'$';}}
                </td>
                <td>
                  {{ $customer->email;}}
                </td>
                <td>
                  {{ $customer->message;}}
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="{{route('customers.create-wordpress-account', ['id' => $customer->id ])}}">Create WordPress Account</a>
                      <a class="dropdown-item" href="{{route('customers.edit', ['customer' => $customer->id ])}}">Edit</a>
                      <a class="dropdown-item" href="{{route('customers.show', ['customer' => $customer->id ])}}">Details</a>
                      <form action="{{route('customers.destroy', ['customer' => $customer->id ])}}" method="post">
                        <input class="dropdown-item" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

    @endsection
