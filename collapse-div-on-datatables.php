<x-app-layout>
  <x-slot name="header">
    <x-admin.header :curso="$curso" :total="$total">
      ALUNOS
    </x-admin.header>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="p-4 sm:p-8 text-gray-800 shadow sm:rounded-lg bg-white">

        <table id="lista" class="min-w-full text-left text-sm font-light sm:rounded-lg">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4"></th>
              <th scope="col" class="px-6 py-4"><i class="fa fa-list" aria-hidden="true"></i><i
                  class="fa fa-user-o fa-lg mr-2"></i>-><small>HISTÓRICO</small></th>
              <th scope="col" class="px-6 py-4"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($alunos as $key => $value)
              <tr>
                <td class="whitespace-nowrap px-6 py-4 font-medium inline-block align-top">{{ $value->id }}</td>
                <td class="whitespace-nowrap px-6 py-4">

                  <div id="accordion-collapse" data-accordion="collapse">

                    <h2>
                      <button id="{{ $value->id }}" type="button" class="flex items-center justify-between rounded-t-xl w-8/12 p-2 bg-white manualCollapse">

                        <span>
                          <i class="fa fa-list mr-2" aria-hidden="true"></i>
                          {{ $value->name }}
                        </span>
                        {{-- <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                          viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                        </svg> --}}
                      </button>
                    </h2>

                    <div id="manual-collapse-{{ $value->id }}" class="hidden w-8/12">

                      <div class="p-5 border border-gray-700 bg-white whitespace-normal rounded-xl">

                        @include('admin.historico-aluno', ['user_id' => $value->id])

                      </div>

                    </div>
                  </div>

                </td>
                <td class="whitespace-nowrap px-6 py-4 align-top">{{ $value->email }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>


      </div>
    </div>
  </div>

</x-app-layout>
