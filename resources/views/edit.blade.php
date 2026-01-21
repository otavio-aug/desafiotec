@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="mb-4 text-red-600">
        <ul class="text-sm">
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/users/{{ $user->id }}" class="max-w-4xl mx-auto mt-4">
    @csrf
    @method('PUT')
      <div class="grid sm:grid-cols-2 gap-6">
        <div>
          <label class="mb-2 text-sm text-whitefont-medium block">Nome</label>
          <div class="relative flex items-center">
            <input type="text" placeholder="Nome" name="name"
              class="px-4 py-3 pr-8 focus:bg-transparent text-whitew-full text-sm border border-gray-200 outline-[#007bff] rounded-md transition-all" value="{{ old('name') }}" required/>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4"
              viewBox="0 0 24 24">
              <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
              <path
                d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                data-original="#000000"></path>
            </svg>
          </div>
        </div>

        <div>
          <label class="mb-2 text-sm text-whitefont-medium block">Email</label>
          <div class="relative flex items-center">
            <input type="email" placeholder="mail@mail.com" name="email"
              class="px-4 py-3 pr-8 focus:bg-transparent text-whitew-full text-sm border border-gray-200 outline-[#007bff] rounded-md transition-all" value="{{ old('email') }}" required/>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4"
              viewBox="0 0 682.667 682.667">
              <defs>
                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                  <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                </clipPath>
              </defs>
              <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                <path fill="none" stroke-miterlimit="10" stroke-width="40"
                  d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                  data-original="#000000"></path>
                <path
                  d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                  data-original="#000000"></path>
              </g>
            </svg>
          </div>
        </div>

        <div>
          <label class="mb-2 text-sm text-whitefont-medium block">Telefone</label>
          <div class="relative flex items-center">
            <input type="text" placeholder="21997115938" name="phone"
              class="px-4 py-3 pr-8 focus:bg-transparent text-whitew-full text-sm border border-gray-200 outline-[#007bff] rounded-md transition-all" value="{{ old('phone') }}"/>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
              class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
              <path
                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
            </svg>
          </div>
        </div>
      </div>
</p>

      <button type="submit"
        class="mt-12 px-5 py-2.5 text-[15px] font-medium w-full max-w-[130px] mx-auto block bg-[#007bff] hover:bg-[#006bff] text-white rounded-md transition-all cursor-pointer">Enviar</button>
</form>
@endsection
