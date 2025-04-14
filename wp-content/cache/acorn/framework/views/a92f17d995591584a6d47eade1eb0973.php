<section
  class="flex flex-col items-center self-stretch px-10 pt-24 bg-white max-md:px-5"
>
  <div
    class="flex flex-col justify-center max-w-full text-5xl text-center uppercase text-blue-950 w-[1000px] max-md:text-4xl"
  >
    <h1
      class="font-heading flex flex-col justify-center w-full max-md:max-w-full max-md:text-4xl"
    >
      customer reviews
    </h1>
  </div>

  <section
    class="flex flex-col justify-center self-stretch mt-14 w-full max-md:mt-10 max-md:max-w-full"
  >
    <div class="w-full rounded shadow-sm bg-zinc-100 max-md:max-w-full">
      <nav
        class="flex flex-wrap gap-10 items-end px-10 pt-5 w-full text-base max-md:px-5 max-md:max-w-full"
      >
        <div class="flex flex-col w-[119px]">
          <div class="flex gap-2 items-start self-end">
            <span class="text-zinc-800">All Reviews</span>
            <span class="font-bold text-blue-950">5.0</span>
          </div>
          <div class="flex mt-2.5 w-full bg-blue-950 min-h-0.5"></div>
        </div>
        <button class="whitespace-nowrap min-h-8">
          <div class="flex gap-2 justify-center items-start">
            <img
              src="<?= \Roots\asset('images/Googleicon.svg'); ?>"
              class="object-contain shrink-0 w-5 aspect-square"
              alt="Google icon"
            />
            <div class="flex gap-2 items-start">
              <span class="text-zinc-800">Google</span>
              <span class="font-bold text-blue-950">5.0</span>
            </div>
          </div>
        </button>
        <button class="whitespace-nowrap min-h-8">
          <div class="flex gap-2 justify-center items-start">
            <img
              src="<?= \Roots\asset('images/Tripadvisoricon.svg'); ?>"
              class="object-contain shrink-0 w-5 aspect-square"
              alt="Tripadvisor icon"
            />
            <div class="flex gap-2 items-start">
              <span class="text-zinc-800">Tripadvisor</span>
              <span class="font-bold text-blue-950">5.0</span>
            </div>
          </div>
        </button>
      </nav>

      <hr class="flex w-full bg-blue-950 min-h-px max-md:max-w-full" />

      <div
        class="flex flex-wrap gap-10 justify-between items-center px-10 py-7 w-full max-md:px-5 max-md:max-w-full"
      >
        <div class="self-stretch my-auto">
          <h2 class="text-2xl font-bold text-blue-950">Overall Rating</h2>
          <div class="flex gap-5 items-center mt-2.5">
            <div class="flex gap-2.5 items-center self-stretch my-auto">
              <span
                class="self-stretch my-auto text-2xl font-bold text-blue-950"
                >5.0</span
              >
              <div class="flex gap-1 items-start self-stretch my-auto">
              
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

              </div>
            </div>
            <span
              class="flex flex-col items-center self-stretch my-auto text-xs whitespace-nowrap text-zinc-800"
              >(308)</span
            >
          </div>
        </div>
        <button
          class="gap-2.5 self-stretch px-7 py-3 my-auto text-base font-semibold text-center uppercase bg-[#FFDA1D] rounded text-blue-950 max-md:px-5"
        >
          write a review
        </button>
      </div>
    </div>

    <div class="flex flex-wrap gap-5 items-start mt-5 w-full max-md:max-w-full">
      <article
        class="flex flex-col flex-1 shrink p-7 rounded basis-0 bg-zinc-100 min-w-60 max-md:px-5"
      >
        <time datetime="2024-01-01" class="text-xs text-zinc-800"
          >January 1</time
        >
        <div class="flex flex-col mt-4 w-full">
          <div class="flex gap-1 items-start self-start">
            
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

          </div>
          <div class="mt-2.5 w-full text-base">
            <p class="text-zinc-800">
              Lorem ipsum dolor sit amet, Lorem consectetur adipiscing elit, sed
              do eiusmod tempor incididunt.
            </p>
            <button class="mt-1 text-zinc-800">Read more</button>
          </div>
        </div>
        <footer class="flex gap-2.5 items-center self-start mt-4">
          <img
            src="<?= \Roots\asset('images/Tripadvisor_logo.svg'); ?>"
            class="object-contain shrink-0 self-stretch my-auto w-7 aspect-square"
            alt="Tripadvisor logo"
          />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <span class="text-xs text-zinc-800">Posted On</span>
            <span class="text-base font-bold text-blue-950">Tripadvisor</span>
          </div>
        </footer>
      </article>

      <article
        class="flex flex-col flex-1 shrink p-7 rounded basis-0 bg-zinc-100 min-w-60 max-md:px-5"
      >
        <time datetime="2024-01-01" class="text-xs text-zinc-800"
          >January 1</time
        >
        <div class="flex flex-col mt-4 w-full">
          <div class="flex gap-1 items-start self-start">
            
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

          </div>
          <div class="mt-2.5 w-full text-base">
            <p class="text-zinc-800">
              Lorem ipsum dolor sit amet, Lorem consectetur adipiscing elit, sed
              do eiusmod tempor incididunt.
            </p>
            <button class="mt-1 text-zinc-800">Read more</button>
          </div>
        </div>
        <footer class="flex gap-2.5 items-center self-start mt-4">
          <img
            src="<?= \Roots\asset('images/Tripadvisor_logo.svg'); ?>"
            class="object-contain shrink-0 self-stretch my-auto w-7 aspect-square"
            alt="Tripadvisor logo"
          />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <span class="text-xs text-zinc-800">Posted On</span>
            <span class="text-base font-bold text-blue-950">Tripadvisor</span>
          </div>
        </footer>
      </article>

      <article
        class="flex flex-col flex-1 shrink p-7 rounded basis-0 bg-zinc-100 min-w-60 max-md:px-5"
      >
        <time datetime="2024-01-01" class="text-xs text-zinc-800"
          >January 1</time
        >
        <div class="flex flex-col mt-4 w-full">
          <div class="flex gap-1 items-start self-start">
           
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

          </div>
          <div class="mt-2.5 w-full text-base">
            <p class="text-zinc-800">
              Lorem ipsum dolor sit amet, Lorem consectetur adipiscing elit, sed
              do eiusmod tempor incididunt.
            </p>
            <button class="mt-1 text-zinc-800">Read more</button>
          </div>
        </div>
        <footer class="flex gap-2.5 items-center self-start mt-4">
          <img
            src="<?= \Roots\asset('images/Tripadvisor_logo.svg'); ?>"
            class="object-contain shrink-0 self-stretch my-auto w-7 aspect-square"
            alt="Tripadvisor logo"
          />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <span class="text-xs text-zinc-800">Posted On</span>
            <span class="text-base font-bold text-blue-950">Tripadvisor</span>
          </div>
        </footer>
      </article>

      <article
        class="flex flex-col flex-1 shrink p-7 rounded basis-0 bg-zinc-100 min-w-60 max-md:px-5"
      >
        <time datetime="2024-01-01" class="text-xs text-zinc-800"
          >January 1</time
        >
        <div class="flex flex-col mt-4 w-full">
          <div class="flex gap-1 items-start self-start">
           
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

          </div>
          <div class="mt-2.5 w-full text-base">
            <p class="text-zinc-800">
              Lorem ipsum dolor sit amet, Lorem consectetur adipiscing elit, sed
              do eiusmod tempor incididunt.
            </p>
            <button class="mt-1 text-zinc-800">Read more</button>
          </div>
        </div>
        <footer class="flex gap-2.5 items-center self-start mt-4">
          <img
            src="<?= \Roots\asset('images/Tripadvisor_logo.svg'); ?>"
            class="object-contain shrink-0 self-stretch my-auto w-7 aspect-square"
            alt="Tripadvisor logo"
          />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <span class="text-xs text-zinc-800">Posted On</span>
            <span class="text-base font-bold text-blue-950">Tripadvisor</span>
          </div>
        </footer>
      </article>
    </div>

    <div class="flex flex-wrap gap-5 items-start mt-5 w-full max-md:max-w-full">
      <article
        class="flex flex-col flex-1 shrink p-7 rounded basis-0 bg-zinc-100 min-w-60 max-md:px-5"
      >
        <time datetime="2024-01-01" class="text-xs text-zinc-800"
          >January 1</time
        >
        <div class="flex flex-col mt-4 w-full">
          <div class="flex gap-1 items-start self-start">
           
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

          </div>
          <div class="mt-2.5 w-full text-base">
            <p class="text-zinc-800">
              Lorem ipsum dolor sit amet, Lorem consectetur adipiscing elit, sed
              do eiusmod tempor incididunt.
            </p>
            <button class="mt-1 text-zinc-800">Read more</button>
          </div>
        </div>
        <footer class="flex gap-2.5 items-center self-start mt-4">
          <img
            src="<?= \Roots\asset('images/Tripadvisor_logo.svg'); ?>"
            class="object-contain shrink-0 self-stretch my-auto w-7 aspect-square"
            alt="Tripadvisor logo"
          />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <span class="text-xs text-zinc-800">Posted On</span>
            <span class="text-base font-bold text-blue-950">Tripadvisor</span>
          </div>
        </footer>
      </article>

      <article
        class="flex flex-col flex-1 shrink p-7 rounded basis-0 bg-zinc-100 min-w-60 max-md:px-5"
      >
        <time datetime="2024-01-01" class="text-xs text-zinc-800"
          >January 1</time
        >
        <div class="flex flex-col mt-4 w-full">
          <div class="flex gap-1 items-start self-start">
            
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

          </div>
          <div class="mt-2.5 w-full text-base">
            <p class="text-zinc-800">
              Lorem ipsum dolor sit amet, Lorem consectetur adipiscing elit, sed
              do eiusmod tempor incididunt.
            </p>
            <button class="mt-1 text-zinc-800">Read more</button>
          </div>
        </div>
        <footer class="flex gap-2.5 items-center self-start mt-4">
          <img
            src="<?= \Roots\asset('images/Tripadvisor_logo.svg'); ?>"
            class="object-contain shrink-0 self-stretch my-auto w-7 aspect-square"
            alt="Tripadvisor logo"
          />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <span class="text-xs text-zinc-800">Posted On</span>
            <span class="text-base font-bold text-blue-950">Tripadvisor</span>
          </div>
        </footer>
      </article>

      <article
        class="flex flex-col flex-1 shrink p-7 rounded basis-0 bg-zinc-100 min-w-60 max-md:px-5"
      >
        <time datetime="2024-01-01" class="text-xs text-zinc-800"
          >January 1</time
        >
        <div class="flex flex-col mt-4 w-full">
          <div class="flex gap-1 items-start self-start">
           
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

          </div>
          <div class="mt-2.5 w-full text-base">
            <p class="text-zinc-800">
              Lorem ipsum dolor sit amet, Lorem consectetur adipiscing elit, sed
              do eiusmod tempor incididunt.
            </p>
            <button class="mt-1 text-zinc-800">Read more</button>
          </div>
        </div>
        <footer class="flex gap-2.5 items-center self-start mt-4">
          <img
            src="<?= \Roots\asset('images/Tripadvisor_logo.svg'); ?>"
            class="object-contain shrink-0 self-stretch my-auto w-7 aspect-square"
            alt="Tripadvisor logo"
          />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <span class="text-xs text-zinc-800">Posted On</span>
            <span class="text-base font-bold text-blue-950">Tripadvisor</span>
          </div>
        </footer>
      </article>

      <article
        class="flex flex-col flex-1 shrink p-7 rounded basis-0 bg-zinc-100 min-w-60 max-md:px-5"
      >
        <time datetime="2024-01-01" class="text-xs text-zinc-800"
          >January 1</time
        >
        <div class="flex flex-col mt-4 w-full">
          <div class="flex gap-1 items-start self-start">
            
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>
              <img src="<?= \Roots\asset('images/star.svg'); ?>" alt="Star Rating" class="object-contain shrink-0 w-5 aspect-square"/>

          </div>
          <div class="mt-2.5 w-full text-base">
            <p class="text-zinc-800">
              Lorem ipsum dolor sit amet, Lorem consectetur adipiscing elit, sed
              do eiusmod tempor incididunt.
            </p>
            <button class="mt-1 text-zinc-800">Read more</button>
          </div>
        </div>
        <footer class="flex gap-2.5 items-center self-start mt-4">
          <img
            src="<?= \Roots\asset('images/Tripadvisor_logo.svg'); ?>"
            class="object-contain shrink-0 self-stretch my-auto w-7 aspect-square"
            alt="Tripadvisor logo"
          />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <span class="text-xs text-zinc-800">Posted On</span>
            <span class="text-base font-bold text-blue-950">Tripadvisor</span>
          </div>
        </footer>
      </article>
    </div>
  </section>

  <button
    class="self-center px-7 py-3 mt-14 text-base font-semibold text-center uppercase rounded bg-zinc-100 text-blue-950 max-md:px-5 max-md:mt-10"
  >
    Load More
  </button>
</section>
<?php /**PATH C:\xampp\htdocs\blue-kingdom\wp-content\themes\blue-kingdom\resources\views/partials/customer-reviews.blade.php ENDPATH**/ ?>