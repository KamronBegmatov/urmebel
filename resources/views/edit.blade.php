<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить данные товара') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <br>
                    <h1>ИЗМЕНИТЕ ДАННЫЕ</h1>
                    <br>
                    <form action="/dashboard/update" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="old_name" value="{{old('name')}}">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        Имя товара: <br><input name="name" type="text" value="{{$product->name}}" required><br>
                        Цена товара:<br><input name="price" type="text" value="{{$product->price}}" required><br>
                        Материалы:<br><input name="material" type="text" value="{{$product->material}}" required><br>
                        <br>
                        Категории: <Br>
                        @foreach($categories as $category)
                            <input type="radio" name="category_id" value="{{$category->id}}" required>{{$category->name}}<br>
                        @endforeach
                        <br>
                        Полное описание: <br><textarea id="full" name="description" rows="10" cols="45" value="{{$product->description}}" required>{{$product->description}}</textarea><br>
                        <br>
                        Главное изображение:<br>
                        <input type="file" name="image_1" required><br>
                        Галерея:<br>
                        <input type="file" name="image_2"><br>
                        <input type="file" name="image_3"><br>
                        <input type="file" name="image_4"><br>
                        <input type="file" name="image_5"><br>
                        <input type="file" name="image_6"><br>
                        <br>
                        <input type="submit" value=" Изменить ">
                    </form>
                    <br>
                    <hr>
                    <br>
            </div>
        </div>
    </div>
</x-app-layout>
