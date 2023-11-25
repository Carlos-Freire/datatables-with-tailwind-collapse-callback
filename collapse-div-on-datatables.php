<x-app-layout>
   <table id="list" class="min-w-full text-left text-sm font-light sm:rounded-lg">
        <thead class="border-b font-medium dark:border-neutral-500">
          <tr>
            <th scope="col" class="px-6 py-4"></th>
            <th scope="col" class="px-6 py-4"><i class="fa fa-list" aria-hidden="true"></i><i
                class="fa fa-user-o fa-lg mr-2"></i>-><small>HISTÓRICO</small></th>
            <th scope="col" class="px-6 py-4"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($var as $key => $value)
            <tr>
              <td class="whitespace-nowrap px-6 py-4 font-medium inline-block align-top">{{ $value->id }}</td>
              <td class="whitespace-nowrap px-6 py-4">                

                  <h2>
                    <button id="{{ $value->id }}" type="button" class="flex items-center justify-between rounded-t-xl w-8/12 p-2 bg-white manualCollapse">

                      <span>
                        <i class="fa fa-list mr-2" aria-hidden="true"></i>
                        {{ $value->anything }}
                      </span>
                     
                    </button>
                  </h2>

                  <div id="manual-collapse-{{ $value->id }}" class="hidden w-8/12">

                    <div class="p-5 border border-gray-700 bg-white whitespace-normal rounded-xl">

                      @include('your_blade_here', ['param' => $value->id])

                    </div>

                  </div>
                </div>

              </td>
              <td class="whitespace-nowrap px-6 py-4 align-top">{{ $value->anything2 }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
</x-app-layout>
