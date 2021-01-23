<x-app-layout>
    <x-slot name="header">Editar Evento</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="" method="post">
                <div class="w-full pb-5">
                    <label>Nome Evento</label>
                    <input type="text" class="w-full rounded focus:border-gray-400" name="name" value="{{$event->name}}">
                </div>

                <div class="w-full pb-5">
                    <label>Descrição Rápida Evento</label>
                    <input type="text" class="w-full rounded focus:border-gray-400" name="description" value="{{$event->description}}">
                </div>


                <div class="w-full pb-5">
                    <label>Sobre o Evento</label>
                    <textarea name="body" id="" cols="30" rows="10" class="w-full rounded focus:border-gray-400">{{$event->body}}</textarea>
                </div>


                <div class="w-full pb-5">
                    <label>Quando?</label>
                    <input type="text" class="w-full rounded focus:border-gray-400" name="event_at" value="{{$event->event_at}}">
                </div>

                <div class="w-full pb-5 rounded text-center">
                    <button class="py-3 px-10 bg-green-600 rounded text-white font-bold">Editar Evento</button>
                </div>


            </form>
        </div>
    </div>
</x-app-layout>
