<!-- Include Alpine.js for dynamic state management -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<section class="flex flex-col items-center self-stretch md:px-10 md:pt-24 pt-5 bg-white">
  <div class="flex flex-col justify-center max-w-full text-5xl text-center uppercase text-blue-950 w-[1000px] max-md:text-4xl">
    <h1 class="font-heading flex flex-col justify-center w-full max-md:max-w-full max-md:text-4xl">
      customer reviews
    </h1>
  </div>

  <section class="flex flex-col justify-center self-stretch mt-14 w-full max-md:mt-10 max-md:max-w-full">
    <div class="w-full rounded bg-zinc-100 max-md:max-w-full" x-data="{ activeTab: 'all-reviews' }">
      <!-- Tab Navigation -->
      <nav class="flex gap-10 items-center px-10 pt-5 w-full text-base border-b border-[#142C58] max-md:px-5 max-md:max-w-full">
        <button @click="activeTab = 'all-reviews'" :class="{ 'border-b-4 border-blue-[#142C58]': activeTab === 'all-reviews' }" class="tab-button whitespace-nowrap min-h-8">
          <span class="text-zinc-800">All Reviews</span>
          <span class="font-bold text-blue-950">5.0</span>
        </button>
        <button @click="activeTab = 'google'" :class="{ 'border-b-4 border-blue-[#142C58]': activeTab === 'google' }" class="tab-button whitespace-nowrap min-h-8">
          <div class="flex gap-2 justify-center items-start">
            <img src="{{ site_url() }}/wp-content/uploads/2025/04/Googleicon.svg" class="object-contain shrink-0 w-5 aspect-square" alt="Google icon" />
            <span class="text-zinc-800">Google</span>
            <span class="font-bold text-blue-950">5.0</span>
          </div>
        </button>
        <button @click="activeTab = 'tripadvisor'" :class="{ 'border-b-4 border-blue-[#142C58]': activeTab === 'tripadvisor' }" class="tab-button whitespace-nowrap min-h-8 hidden md:flex">
          <div class="flex gap-2 justify-center items-start">
            <img src="{{ site_url() }}/wp-content/uploads/2025/04/Tripadvisor_logo.svg" class="object-contain shrink-0 w-5 aspect-square" alt="Tripadvisor icon" />
            <span class="text-zinc-800">Tripadvisor</span>
            <span class="font-bold text-blue-950">5.0</span>
          </div>
        </button>
      </nav>
      <hr class="flex w-full bg-blue-950 min-h-px max-md:max-w-full" />

      <div class="flex flex-wrap gap-10 justify-between items-center px-10 py-7 w-full max-md:px-5 max-md:max-w-full">
        <div class="self-stretch my-auto">
          <h2 class="text-2xl font-bold text-blue-950">Overall Rating</h2>
          <div class="flex gap-5 items-center mt-2.5">
            <div class="flex gap-2.5 items-center self-stretch my-auto">
              <span class="self-stretch my-auto text-2xl font-bold text-blue-950">5.0</span>
              <div class="flex gap-1 items-start self-stretch my-auto">
                @for ($i = 0; $i < 5; $i++)
                  <img src="{{ site_url() }}/wp-content/uploads/2025/04/star-1.svg" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square" />
                @endfor
              </div>
            </div>
            <span class="flex flex-col items-center self-stretch my-auto text-xs whitespace-nowrap text-zinc-800">(308)</span>
          </div>
        </div>
        <button class="gap-2.5 self-stretch px-7 py-3 my-auto text-base font-semibold text-center uppercase bg-[#FFDA1D] rounded text-blue-950 max-md:px-5">
          write a review
        </button>
      </div>

      <!-- Tab Content -->
      <div class="tab-content">
        <!-- All Reviews -->
        <div x-show="activeTab === 'all-reviews'" class="tab-panel">
          <div class="grid grid-cols-1 bg-white sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-between items-center py-7 w-full max-md:px-5 max-md:max-w-full">
            @for ($i = 0; $i < 6; $i++)
              <article class="flex flex-col p-7 rounded bg-zinc-100 min-w-60 max-md:px-5">
                <time datetime="2024-01-01" class="text-xs text-zinc-800">January 1</time>
                <div class="flex flex-col mt-4 w-full">
                  <div class="flex gap-1 items-start">
                    @for ($j = 0; $j < 5; $j++)
                      <img src="{{ site_url() }}/wp-content/uploads/2025/04/star-1.svg" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square" />
                    @endfor
                  </div>
                  <div class="mt-2.5 text-base">
                    <p class="text-zinc-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <button class="mt-1 text-zinc-800">Read more</button>
                  </div>
                </div>
                <footer class="flex gap-2.5 items-center mt-4">
                  <img src="{{ site_url() }}/wp-content/uploads/2025/04/Tripadvisor_logo.svg" class="object-contain w-7 aspect-square" alt="Tripadvisor logo" />
                  <div class="flex flex-col justify-center">
                    <span class="text-xs text-zinc-800">Posted On</span>
                    <span class="text-base font-bold text-blue-950">Tripadvisor</span>
                  </div>
                </footer>
              </article>
            @endfor
          </div>
        </div>

        <!-- Google Reviews -->
        <div x-show="activeTab === 'google'" class="tab-panel">
          <div class="grid grid-cols-1 bg-white sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-between items-center py-7 w-full max-md:px-5 max-md:max-w-full">
            @for ($i = 0; $i < 3; $i++)
              <article class="flex flex-col p-7 rounded bg-zinc-100 min-w-60 max-md:px-5">
                <time datetime="2024-01-01" class="text-xs text-zinc-800">January 1</time>
                <div class="flex flex-col mt-4 w-full">
                  <div class="flex gap-1 items-start">
                    @for ($j = 0; $j < 5; $j++)
                      <img src="{{ site_url() }}/wp-content/uploads/2025/04/star-1.svg" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square" />
                    @endfor
                  </div>
                  <div class="mt-2.5 text-base">
                    <p class="text-zinc-800">Google review message.</p>
                    <button class="mt-1 text-zinc-800">Read more</button>
                  </div>
                </div>
                <footer class="flex gap-2.5 items-center mt-4">
                  <img src="{{ site_url() }}/wp-content/uploads/2025/04/Googleicon.svg" class="object-contain w-7 aspect-square" alt="Google logo" />
                  <div class="flex flex-col justify-center">
                    <span class="text-xs text-zinc-800">Posted On</span>
                    <span class="text-base font-bold text-blue-950">Google</span>
                  </div>
                </footer>
              </article>
            @endfor
          </div>
        </div>

        <!-- Tripadvisor Reviews -->
        <div x-show="activeTab === 'tripadvisor'" class="tab-panel">
          <div class="grid grid-cols-1 bg-white sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-between items-center py-7 w-full max-md:px-5 max-md:max-w-full">
            @for ($i = 0; $i < 3; $i++)
              <article class="flex flex-col p-7 rounded bg-zinc-100 min-w-60 max-md:px-5">
                <time datetime="2024-01-01" class="text-xs text-zinc-800">January 1</time>
                <div class="flex flex-col mt-4 w-full">
                  <div class="flex gap-1 items-start">
                    @for ($j = 0; $j < 5; $j++)
                      <img src="{{ site_url() }}/wp-content/uploads/2025/04/star-1.svg" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square" />
                    @endfor
                  </div>
                  <div class="mt-2.5 text-base">
                    <p class="text-zinc-800">Tripadvisor review message.</p>
                    <button class="mt-1 text-zinc-800">Read more</button>
                  </div>
                </div>
                <footer class="flex gap-2.5 items-center mt-4">
                  <img src="{{ site_url() }}/wp-content/uploads/2025/04/Tripadvisor_logo.svg" class="object-contain w-7 aspect-square" alt="Tripadvisor logo" />
                  <div class="flex flex-col justify-center">
                    <span class="text-xs text-zinc-800">Posted On</span>
                    <span class="text-base font-bold text-blue-950">Tripadvisor</span>
                  </div>
                </footer>
              </article>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<!-- Tailwind CSS Styling -->
<style>
  .tab-button {
    transition: border-color 0.3s ease;
  }
</style>
