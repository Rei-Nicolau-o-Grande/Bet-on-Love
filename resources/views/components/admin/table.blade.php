<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead>
                    <tr>
                        @foreach($columns as $column)
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ $column }}</th>
                        @endforeach
                    </thead>

                    <x-admin.table-body
                        :items="$items"
                        :columns="$columns"
                        :modelType="$modelType"
                    />

                </table>
            </div>
        </div>
    </div>
</div>

