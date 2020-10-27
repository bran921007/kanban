@props([
    'route',
])

<a href="{{route($route)}}"
   class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md focus:outline-none transition ease-in-out duration-150
    {{Request::routeIs($route) ? 'text-gray-600 bg-gray-200 focus:bg-gray-200' : 'text-gray-600 hover:text-gray-600 hover:bg-gray-200 focus:text-gray-600 focus:bg-gray-200'}}
">
    {{$slot}}
</a>