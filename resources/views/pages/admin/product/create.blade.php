@extends('layouts.admin.master')

@section('content')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Add New Product
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="{{ route('admin.product.all') }}"><button type="button" class="button box text-gray-700 dark:text-gray-300 mr-2 flex items-center ml-auto sm:ml-0"> <i class="w-4 h-4 mr-2" data-feather="eye"></i> Products </button></a>
        <button class="button text-white bg-theme-1 shadow-md flex items-center" onclick="document.getElementById('productForm').submit()"> Save <i class="w-4 h-4 ml-2" data-feather="chevron-down"></i> </button>
    </div>
</div>
<form id="productForm" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
       <!-- BEGIN: Product Content -->
       <div class="intro-y col-span-12 lg:col-span-8">
           <input type="text" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" placeholder="Product Name" name="title">
           <div class="post intro-y overflow-hidden box mt-5">
               <div class="post__tabs nav-tabs flex flex-col sm:flex-row bg-gray-300 dark:bg-dark-2 text-gray-600">
                   <a title="Fill in the article content" data-toggle="tab" data-target="#content" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Product Details </a>
               </div>
               <div class="post__content tab-content">
                   <div class="tab-content__pane p-5 active" id="content">
                       <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                           <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Price & Images </div>
                           <div class="mt-5">
                               <div>
                                   <label>Price</label>
                                   <input type="number" class="input w-full border mt-2" placeholder="Enter new price" name="price">
                               </div>
                               <div class="mt-3">
                                   <label>Old Price</label>
                                   <input type="number" class="input w-full border mt-2" placeholder="Enter old price" name="old_price">
                               </div>
                               <div class="mt-3">
                                   <label>Stock</label>
                                   <input type="number" class="input w-full border mt-2" placeholder="Enter number in stock" name="stock">
                               </div>
                               <div class="mt-3">
                                   <label>Upload Image</label>
                                   <div class="border-2 border-dashed dark:border-dark-5 rounded-md mt-3 pt-4">
                                       <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                           <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-theme-1 dark:text-theme-10 mr-1">Upload a file (.jpg, .png)</span>
                                           <input type="file" name="image" class="w-full h-full top-0 left-0 absolute opacity-0">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                           <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Category </div>
                           <div class="mt-5">
                               <select class="input input--sm border mr-2" name="category_id">
                                    <option selected="" disabled="">Select Category</option>
                                    @forelse($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @empty

                                        {{ 'Please Create Category first' }}

                                    @endforelse
                               </select>
                           </div>
                       </div>

                       <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                           <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Description </div>
                           <div class="mt-5">
                               <textarea class="editor" name="description">
                                   Full Description
                               </textarea>
                           </div>

                           <div class="mt-5">
                               <textarea class="editor" name="short_description">
                                   Short Description
                               </textarea>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- END: Product Content -->
       <!-- BEGIN: Product Info -->
       <div class="col-span-12 lg:col-span-4">
           <div class="intro-y box p-5">
               <div>
                   <label>Product Added By</label>
                   <div class="dropdown mt-2">
                       <button class="dropdown-toggle button w-full border dark:bg-dark-2 dark:border-dark-4 flex items-center">
                           
                           <div class="ml-8 pl-1 truncate">{{ auth()->user()->fullname() }}</div>
                           <i class="w-4 h-4 ml-auto" data-feather="chevron-down"></i> 
                       </button>
                   </div>
               </div>
               
               <div class="mt-3">
                   <label>Published</label>
                   <div class="mt-2">
                       <input class="input input--switch border" type="checkbox" name="published_status">
                   </div>
               </div>
               {{-- <div class="mt-3">
                   <label>Show Author Name</label>
                   <div class="mt-2">
                       <input class="input input--switch border" type="checkbox" name="show_author">
                   </div>
               </div> --}}
           </div>
       </div>
       <!-- END: Product Info -->
   </div> 
</form>


@endsection