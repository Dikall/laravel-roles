@extends('layouts.app')
@section('content')
   <div class="card">
       <div class="card-header">mahasiswa List</div>
       <div class="card-body">
           @can('create-mahasiswa')
               <a href="{{ route('mahasiswa.create') }}" class="btn btn-success btn-sm my-2">
                   <i class="bi bi-plus-circle"></i> Add New mahasiswa
               </a>
           @endcan
           <table class="table table-striped table-bordered">
               <thead>
                   <tr>
                       <th scope="col">S#</th>
                       <th scope="col">NIM</th>
                       <th scope="col">Nama</th>
                       <th scope="col">Jurusan</th>
                       <th scope="col">Prodi</th>
                       <th scope="col">Alamat</th>
                       <th scope="col">Tempat, Tanggal Lahir</th>
                       <th scope="col">No. Handphone</th>
                       <th scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                   @forelse ($mahasiswa as $mhs)
                       <tr>
                           <th scope="row">{{ $loop->iteration }}</th>
                           <td>{{ $mhs->NIM }}</td>
                           <td>{{ $mhs->nama }}</td>
                           <td>{{ $mhs->jurusan }}</td>
                           <td>{{ $mhs->prodi }}</td>
                           <td>{{ $mhs->alamat }}</td>
                           <td>{{ $mhs->ttl }}</td>
                           <td>{{ $mhs->no_hp }}</td>
                           <td>
                               <form action="{{ route('mahasiswa.destroy', $mhs->NIM) }}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <a href="{{ route('mahasiswa.show', $mhs->NIM) }}"
                                       class="btn btn-warning btn-sm">
                                       <i class="bi bi-eye"></i>
                                       Show
                                    </a>
                                   @can('edit-mahasiswa')
                                       <a href="mahasiswa/{{ $mhs->NIM }}/edit"
                                           class="btn btn-primary btn-sm">
                                           <i class="bi bi-pencil-square"></i> Edit
                                       </a>
                                   @endcan
                                   @can('delete-mahasiswa')
                                       <button type="submit" class="btn btn-danger btn-sm"
                                           onclick="return confirm('Do you want to delete this mahasiswa?');">
                                           <i class="bi bi-trash"></i> Delete
                                       </button>
                                   @endcan
                               </form>
                           </td>
                       </tr>
                   @empty
                       <td colspan="4">
                           <span class="text-danger">
                               <strong>No mahasiswa Found!</strong>
                           </span>
                       </td>
                   @endforelse
               </tbody>
           </table>
       </div>
   </div>
@endsection