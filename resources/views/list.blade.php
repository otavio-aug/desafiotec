@extends('layouts.app')

@section('content')
<div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-800 whitespace-nowrap">
          <tr>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
              Nome
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
              Email
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
              Telefone
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
              Data de criação
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
              Acões
            </th>
          </tr>
        </thead>
        @forelse($users as $user)
        <tbody class="divide-y divide-gray-200 whitespace-nowrap">
          <tr>
            <td class="px4 py-4 text-sm text-slate-500 font-medium">
              {{ $user->name }}
            </td>
            <td class="px-4 py-4 text-sm text-slate-400 font-medium">
              {{ $user->email }}
            </td>
            <td class="px-4 py-4 text-sm text-slate-400 font-medium">
              {{ $user->phone }}
            </td>
            <td class="px-4 py-4 text-sm text-slate-400 font-medium">
              {{ $user->created_at }}
            </td>
            <td class="px-4 py-4 text-sm">
              <a href="/users/{{ $user->id }}/edit">
                <button class="cursor-pointer text-blue-600 font-medium mr-4">Edit</button>
              </a>
                <form action="/users/{{ $user->id }}" method="POST"
                  onsubmit="return confirm('Tem certeza que deseja excluir?')">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="cursor-pointer text-red-600 font-medium">Delete</button>
                </form>
            </td>
          </tr>
        </tbody>
        @empty
        <tr>
            <td px4 py-4 text-sm text-slate-500 font-medium>
                Nenhum usuário encontrado.
            </td>
        </tr>
        @endforelse
      </table>
    </div>


@endsection
