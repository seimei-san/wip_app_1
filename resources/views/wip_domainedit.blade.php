<x-app-layout>
    <x-slot name='header'>
    <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight w-36">
            <form action="{{ route('user_index') }}" method="GET" class="w-full max-w-lg">
                <x-button class="bg-blue-800 text-gray-900">{{ __('ユーザー管理') }}</x-button>
            </form>
            </h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight w-36">
            <form action="{{ route('domain_index') }}" method="GET" class="w-full max-w-lg">
                <x-button class="bg-green-800 text-gray-900">{{ __('組織管理') }}</x-button>
            </form>
            </h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight w-36">
            <form action="{{ route('group_index') }}" method="GET" class="w-full max-w-lg">
                <x-button class="bg-yellow-800 text-gray-900">{{ __('グループ管理') }}</x-button>
            </form>
            </h2>
        </div>       
    </x-slot>
    <x-errors id="errors" class='bg-blue-500 roundted-lg'>{{ $errors }}</x-errors>

    <!-- ####### ALL_AREA::START ########-->
    <div class="flex bg-emerald-100">
        <!-- ######## LEFT_AREA::START ########## -->
        <div class="text-indigo-800 text-left px-4 py-4 mg-2">
            <div class="bg-indigo-50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-indigo-50 border-b border-lime-800 font-bold">
                    組織管理 (追加/更新)
                </div>
            </div>
            <!-- ++++ DOMAIN_FORM::START -->
            <form action="{{ url('domain/update') }}" method="POST" class="w-full max-w-lg">
                @csrf
                <div class="flex flex-col px-2 py-2">
                    <!-- +++ COL::domain_id +++ -->
                    <!-- <div class="w-full md:w-1/1 px-2 py-2"> -->
                        <!-- <label class="block uppercase tracking-wide text-lime-800 text-xs font-bold mb-2"> -->
                            <!-- 組織ID -->
                        <!-- </label> -->
                        <!-- <input name="domain_id" class="appearance-none block w-full text-lime-900 border border-yellow-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder=""> -->
                    <!-- </div> -->
                    <!-- +++ COL::domain_short_name +++ -->
                    <div class="w-full md:w-1/1 px-3 py2">
                        <label class="block uppercase tracking-wide text-lime-900 text-xs font-bold mb-2">
                            組織略称
                        </label>
                        <input name="domain_short_name" value="{{$wip_domains->domain_short_name}}" class="appearance-none block w-full text-lime-900 border border-yellow-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                    </div>
                    <!-- +++ COL::domain_display_name +++ -->
                    <div class="w-full md:w-1/1 px-3 py-2">
                        <label class="block uppercase tracking-wide text-lime-900 text-xs font-bold mb-2">
                            組織名
                        </label>
                        <input name="domain_display_name" value="{{$wip_domains->domain_display_name}}" class="appearance-none block w-full text-lime-900 border border-yellow-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500" type="text" placeholder="">
                    </div>
                    <!-- +++ COL::domain_active +++ -->
                    <div class="w-full md:w-1/1 px-3 py-2">
                        <label class="block uppercase tracking-wide text-lime-900 text-xs font-bold mb-2">
                            有効
                        </label>
                        <input name="domain_active" type="checkbox" @if( $wip_domains['domain_active'] == true ) checked @endif class="appearance-none block text-lime-900 border border-yellow-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500">
                        <!-- <input name="domain_active" type="checkbox" value="{{$wip_domains->domain_active}}" class="appearance-none block w-full text-lime-900 border border-yellow-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-500"> -->
                    </div>
                </div>
                <!-- +++ COL::BUTTON +++ -->
                <div class="flex flex-col">
                    <div class="text-lime-900 text-center px-4 py-2 m-2">
                        <x-button class="bg-yellow-900 rounded-lg">更新</x-button>
                    </div>
                </div>
                <input type="hidden" name="domain_id" value="{{$wip_domains->domain_id}}">
            </form>
            <!-- ++++ DOMAIN_FORM::EMD -->
        </div>
        <!-- ######## LEFT_AREA::END ########## -->
        <!-- ######## RIGHT_AREA::START ########## -->

        <div class="flex-1 text-gray-700 text-left bg-lime-100 px-1 py-1 m-1">
            
        </div>
        <!-- ######## RIGHT_AREA::END ########## -->

    </div>
    <!-- ####### ALL_AREA::END ########-->







</x-app-layout>