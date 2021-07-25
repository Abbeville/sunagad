@extends('layouts.admin.master')

@section('active-admin.category', 'active')

@section('content')

<h2 class="intro-y text-lg font-medium mt-10">
    Categories
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="{{ route('admin.category.create') }}"><button class="button text-white bg-theme-1 shadow-md mr-2">Add New Category</button></a>
        <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of {{ $categories->count() }} entries</div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">Name</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            	@forelse($categories as $category)

            		<tr class="intro-x">
            		    <td> 
            		        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ strtoupper($category->name) }}</div>
            		    </td>
            		    <td class="table-report__action w-56">
            		        <div class="flex justify-center items-center">
            		            {{-- <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a> --}}
            		            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal" onclick="window.currentCategory='{{ route('admin.category.delete', $category->id) }}'"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
            		        </div>
            		    </td>
            		</tr>

            	@empty

            	 {{ 'No category to display' }}
            	@endforelse
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
</div>
<!-- BEGIN: Delete Confirmation Modal -->
<div class="modal" id="delete-confirmation-modal">
    <div class="modal__content">
        <div class="p-5 text-center">
            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
            <div class="text-3xl mt-5">Are you sure?</div>
            <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
        </div>
        <div class="px-5 pb-8 text-center">
            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
            <button type="button" class="button w-24 bg-theme-6 text-white" onclick="window.location.replace(window.currentCategory)">Delete</button>
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->

@endsection