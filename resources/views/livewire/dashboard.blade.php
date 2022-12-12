<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-600 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-gray-600 border-b border-gray-200">
                    <h1 class="font-bold py-4 uppercase text-white">Overview</h1>
                    <div id="stats" class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-black/60 to-white/5 p-6 rounded-lg">
                            <div class="flex flex-row space-x-4 items-center">
                                <div>
                                    <p class="text-indigo-300 text-sm font-medium uppercase leading-4">Team Members</p>
                                    <p class="text-white font-bold text-2xl inline-flex items-center space-x-2">
                                        <span>{{ $totalMembers }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-black/60 p-6 rounded-lg">
                            <div class="flex flex-row space-x-4 items-center">
                                <div>
                                    <p class="text-blue-300 text-sm font-medium uppercase leading-4">Total Files</p>
                                    <p class="text-white inline-flex items-center space-x-2">
                                        <span class="font-bold px-1 text-xl ">{{ $totalFiles }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                       @if ($teamOwner)
                       <div class="bg-black/60 p-6 rounded-lg">
                        <div class="flex flex-row space-x-4 items-center">
                            <div>
                                <p class="text-blue-300 text-sm font-medium uppercase leading-4">You own</p>
                                <p class="text-white inline-flex items-center space-x-2">
                                    Teams: <span class="font-bold px-1 text-xl ">{{ $totalTeams }}</span>
                            </div>
                        </div>
                    </div>
                       @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>