<x-app-layout>
    <x-slot name="header">Criar Evento</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('events.store')}}" method="post">

                @csrf <!-- input type=hidden name=_token value=token -->

                <div class="w-full pb-5">
                    <label class="@error('name') text-red-700 @enderror">Nome Evento</label>
                    <input type="text" class="w-full rounded focus:border-gray-400 @error('name') border-red-700 @enderror outline-none" name="name" value="{{old('name')}}">

                    @error('name')
                        <div class="w-full mt-3 border border-red-700 p-2 bg-red-200 text-red-700 rounded">
                            {{$message}}
                        </div>
                    @enderror

                </div>

                <div class="w-full pb-5">
                    <label class="@error('name') text-red-700 @enderror">Descrição Rápida Evento</label>
                    <input type="text" class="w-full rounded focus:border-gray-400 @error('name') border-red-700 @enderror" name="description" value="{{old('description')}}">

                    @error('description')
                    <div class="w-full mt-3 border border-red-700 p-2 bg-red-200 text-red-700 rounded">
                        {{$message}}
                    </div>
                    @enderror
                </div>


                <div class="w-full pb-5">
                    <label  class="@error('name') text-red-700 @enderror">Sobre o Evento</label>
                    <textarea name="body" id="" cols="30" rows="10" class="w-full rounded focus:border-gray-400 @error('name') border-red-700 @enderror">{{old('body')}}</textarea>

                    @error('body')
                    <div class="w-full mt-3 border border-red-700 p-2 bg-red-200 text-red-700 rounded">
                        {{$message}}
                    </div>
                    @enderror
                </div>


                <div class="w-full pb-5">
                    <label  class="@error('name') text-red-700 @enderror">Quando?</label>
                    <input type="text" class="w-full rounded focus:border-gray-400 @error('name') border-red-700 @enderror" name="event_at" value="{{old('event_at')}}">

                    @error('event_at')
                    <div class="w-full mt-3 border border-red-700 p-2 bg-red-200 text-red-700 rounded">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="w-full pb-5 rounded text-center">
                    <button class="py-3 px-10 bg-green-600 hover:bg-green-300 rounded text-white font-bold">Criar Evento</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
