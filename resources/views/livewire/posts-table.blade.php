<div>
    <div class="flex mb-4 justify-between">
        <div class="block">
                <div class="flex justify-start items-center">
                    <span class="inline-block align-middle text-lg">表示件数: &nbsp;</span>
                    <select wire:model="perPage" class="block">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                </div>
        </div>

        <div class="block">
            <input wire:model="search" class="form-control" type="text" placeholder="キーワード検索...">
        </div>
    </div>

    <div class="container">
        <div class="bg-white">
          <div class="max-w-2xl mx-auto pt-4 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 lg:max-w-7xl lg:px-8 lg:grid-cols-1">
            <div>
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Livewireな動的テーブルビュー</h2>

              <dl class="mt-8 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-2 sm:gap-y-2 lg:gap-x-8">
                <div class="border-t border-gray-200">
                  <dt class="font-medium text-gray-900">
                      <a wire:click.prevent="sortBy('title')" role="button" href="#">
                          タイトル
                          @include('includes._sort-icon', ['field' => 'title'])
                      </a>
                  </dt>
                </div>

                <div class="border-t border-gray-200">
                  <dt class="font-medium text-gray-900">
                      <a wire:click.prevent="sortBy('body')" role="button" href="#">
                          本文
                          @include('includes._sort-icon', ['field' => 'body'])
                      </a>
                  </dt>
                </div>

                @foreach($posts as $post)
                    <div class="border-t border-gray-200 pt-1">
                      <dd class="mt-2 text-sm text-gray-500">{{ $post->title }}</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-1">
                      <dd class="mt-2 text-sm text-gray-500">{{ $post->body }}</dd>
                    </div>
                @endforeach
              </dl>
            </div>

              <div>
                {{ $posts->links() }}
              </div>

          </div>
        </div>
    </div>

</div>
