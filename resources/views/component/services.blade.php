<div x-show="open" class="fixed z-10 inset-0 overflow-y-auto" x-cloak>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div x-show="open" class="fixed inset-0 transition-opacity" x-cloak>
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Modal Content -->
        <div @click.away="open = false" class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-labelledby="modal-headline" x-show="open" x-cloak>
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <h2 class="text-xl font-bold mb-4">Add </h2>
                    <!-- Your form goes here -->
                    <form method="post" action="{{ route('addService') }}">
                        @csrf

                        <label for="title" style="color: black">Title:</label>
                        <input type="text" id="title" style="color: black" name="titre" required class="border rounded px-3 py-2 mb-2">

                        <label for="content" style="color: black">Description:</label>
                        <textarea id="content" style="color: black" name="description" required class="border rounded px-3 py-2 mb-2" placeholder="Add the price as well"></textarea>

                        <label for="category" style="color: black">Category:</label>
                        <select id="category" name="categories" required class="border rounded px-3 py-2 mb-2" style="color: black">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>

                        <div class="flex justify-end mt-4">
                            <button @click="open = false" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                                Close
                            </button>
                            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer" value="Add Service">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
