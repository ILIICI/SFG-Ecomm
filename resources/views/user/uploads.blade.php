<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Documents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-success-message />
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('dashboard.user-add-documents') }}" enctype="multipart/form-data">
                @csrf
                   <div class="form-group">

                        <div class="py-20 h-screen bg-gray-300 px-2">
                            <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
                                <div class="md:flex">
                                    <div class="w-full">
                                        <div class="p-4 border-b-2"> <span class="text-lg font-bold text-gray-600">Add documents</span> </div>
                                        <div class="p-3">
                                            <div class="mb-2"> <span>Attachments</span>
                                                <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                                    <div class="absolute">
                                                        <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> <span class="block text-gray-400 font-normal">or</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                                                    </div> <input type="file" class="h-full w-full opacity-0" name="file-upload" accept="image/jpeg,image/png">
                                                </div>
                                                <div class="flex justify-between items-center text-gray-400"> <span>Accepted file type:.jpg/jpeg and .png only, max: 5mb</span> <span class="flex items-center "><i class="fa fa-lock mr-1"></i> secure</span> </div>
                                            </div>
                                            <div class="mt-3 text-center pb-3"> <button type="submit" class="w-full h-12 text-lg w-32 bg-blue-600 rounded text-white hover:bg-blue-700">UPLOAD</button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
