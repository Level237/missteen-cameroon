@extends('layouts.backend.main')

@section('title',"List Contact")

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <!-- Breadcrumb Start -->
      <div
        class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
      >
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
          Candidates
        </h2>

        <nav>
          <ol class="flex items-center gap-2">
            <li>
              <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
            </li>
            <li class="font-medium text-primary">Candidates</li>
          </ol>
        </nav>
      </div>

      <div class="flex flex-col gap-10">
        @if(Session::get('success'))
        <div
        class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9"
      >
        <div
          class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]"
        >
          <svg
            width="16"
            height="12"
            viewBox="0 0 16 12"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
              fill="white"
              stroke="white"
            ></path>
          </svg>
        </div>
        <div class="w-full">
          <h5
            class="mb-3 text-lg font-bold text-black dark:text-[#34D399]"
          >
            {{ Session::get('success') }}
          </h5>
          <p class="text-base leading-relaxed text-body">

                <a class="bg-[#14121a] text-white p-3 rounded-lg" style="background:#14121a " href="{{ route('candidate.create') }}">Creer une nouvelle candidate</a>


          </p>
        </div>
      </div>
      @endif
<div

class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1"
>

<div class="max-w-full overflow-x-auto">

    <table class="w-full table-auto">
    <thead>

      <tr class="bg-gray-2 text-left dark:bg-meta-4">
        <th
          class="min-w-[220px] px-4 py-4 font-medium text-black dark:text-white xl:pl-11"
        >
         Nom
        </th>
        <th
          class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white"
        >
         Numéro de téléphone
        </th>
        <th
        class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white"
      >
      Message
      </th>


      </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td
              class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11"
            >
              <h5 class="font-medium text-black dark:text-white">{{ $contact->name }}</h5>
              <p class="text-sm mt-2 text-black font-bold">{{ $contact->prenom}}</p>
            </td>
            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
              <p class="text-black dark:text-white">{{ $contact->phone }}</p>
            </td>
            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                <p

                >
                {{ $contact->message }}
                </p>

          </tr>
        @endforeach


    </tbody>
    </table>
    </div>
</div>

        <!-- ====== Table Three End -->
      </div>
      <!-- ====== Table Section End -->
    </div>
  </main>
@endsection
