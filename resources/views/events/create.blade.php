<x-app-layout>
    <x-slot name="header">Criar Evento</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="" method="post">

                <div class="w-full pb-5">
                    <label>Nome Evento</label>
                    <input type="text" class="w-full rounded focus:border-gray-400" name="name" value="{{old('name')}}">
                </div>

                <div class="w-full pb-5">
                    <label>Descrição Rápida Evento</label>
                    <input type="text" class="w-full rounded focus:border-gray-400" name="description" value="{{old('description')}}">
                </div>


                <div class="w-full pb-5">
                    <label>Sobre o Evento</label>
                    <textarea name="body" id="" cols="30" rows="10" class="w-full rounded focus:border-gray-400">{{old('body')}}</textarea>
                </div>


                <div class="w-full pb-5">
                    <label>Quando?</label>
                    <input type="text" class="w-full rounded focus:border-gray-400" name="event_at" value="{{old('event_at')}}">
                </div>

                <div class="w-full pb-5 rounded text-center">
                    <button class="py-3 px-10 bg-green-600 rounded text-white font-bold">Criar Evento</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
