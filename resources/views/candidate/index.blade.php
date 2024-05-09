@extends('layouts.backend.main')

@section('title',"Candidates")

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
          Profil
        </th>
        <th
          class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white"
        >
          Ville
        </th>
        <th
        class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white"
      >
        Catégorie
      </th>
        <th
          class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white"
        >
          Score
        </th>
        <th class="px-4 py-4 font-medium text-black dark:text-white">
          Actions
        </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($candidates as $candidate)
        <tr>
            <td
              class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11"
            >
              <h5 class="font-medium text-black dark:text-white"><img class="w-12 h-12 rounded-full" src="{{ Storage::url($candidate->profile) }}"/></h5>
              <p class="text-sm mt-2 text-black font-bold">{{ $candidate->candidate_name }}</p>
            </td>
            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
              <p class="text-black dark:text-white">{{ $candidate->city }}</p>
            </td>
            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                <p
                  class="inline-flex rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success"
                >
                {{ $candidate->category->category_title }}
                </p>
            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
              <p
                class="inline-flex  bg-opacity-10 px-3 py-1 text-sm font-medium text-success"
              >
               {{ $candidate->score }} pts
              </p>
            </td>
            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
              <div class="flex items-center space-x-3.5">

                <button class="hover:text-primary">
                  <svg
                    class="fill-current"
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z"
                      fill=""
                    />
                    <path
                      d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z"
                      fill=""
                    />
                    <path
                      d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z"
                      fill=""
                    />
                    <path
                      d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z"
                      fill=""
                    />
                  </svg>
                </button>
                <a href="{{ route('candidate.edit', $candidate->id) }}" class="hover:text-primary">
                    <svg class="fill-current" fill="none" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 306.637 306.637" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M12.809,238.52L0,306.637l68.118-12.809l184.277-184.277l-55.309-55.309L12.809,238.52z M60.79,279.943l-41.992,7.896 l7.896-41.992L197.086,75.455l34.096,34.096L60.79,279.943z"></path> <path d="M251.329,0l-41.507,41.507l55.308,55.308l41.507-41.507L251.329,0z M231.035,41.507l20.294-20.294l34.095,34.095 L265.13,75.602L231.035,41.507z"></path> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>
                </a>
              </div>
            </td>
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
