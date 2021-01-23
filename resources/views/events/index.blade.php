<x-app-layout>
    <x-slot name="header">Eventos</x-slot>

   <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

           <div class="flex flex-col">
               <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                   <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                       <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                           <table class="min-w-full divide-y divide-gray-200">
                               <thead class="bg-gray-50">
                               <tr>
                                   <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       #
                                   </th>
                                   <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Evento
                                   </th>
                                   <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Criado Em
                                   </th>

                                   <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Ações
                                   </th>
                               </tr>
                               </thead>
                               <tbody class="bg-white divide-y divide-gray-200">
                               <!-- TO-DO: receber planos do componente-->

                               @foreach($events as $e)
                                   <tr>
                                       <td class="px-6 py-4 whitespace-nowrap">
                                           <div class="text-sm text-gray-900">{{$e->id}}</div>
                                       </td>


                                       <td class="px-6 py-4 whitespace-nowrap">
                                           <div class="text-sm text-gray-900">{{$e->name}}</div>
                                       </td>

                                       <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                           {{$e->created_at->format('d/m/Y H:i:s')}}
                                       </td>
                                       <td>
                                           <a href="{{route('event.show', $e->id)}}" class="px-4 py-2 bg-green-700 hover:bg-green-200 rounded text-white">EDITAR</a>
                                       </td>
                                   </tr>
                               @endforeach
                               </tbody>
                           </table>

                           <div class="px-2 py-4">
                               {{$events->links()}}
                           </div>
                       </div>
                   </div>
               </div>
           </div>

       </div>
   </div>

</x-app-layout>
