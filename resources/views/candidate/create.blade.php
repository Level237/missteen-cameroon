@extends('layouts.backend.main')

@section('title')
Dashboard
@endsection

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <div class="mx-auto max-w-270">
        <!-- Breadcrumb Start -->
        <div
          class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
        >
          <h2 class="text-title-md2 font-bold text-black dark:text-white">
           Creation Candidate
          </h2>

          <nav>
            <ol class="flex items-center gap-2">
              <li>
                <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
              </li>
              <li class="font-medium text-primary">Créer une candidate</li>
            </ol>
          </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Settings Section Start -->
        <div class="grid grid-cols-1">
          <div class="col-span-5 xl:col-span-3">
            <div
              class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
            >
              <div
                class="border-b border-stroke px-7 py-4 dark:border-strokedark"
              >
                <h3 class="font-medium text-black dark:text-white">
                 Information personnelles
                </h3>
              </div>
              <div class="p-7">
                <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                    <div class="w-full sm:w-1/2">
                      <label
                        class="mb-3 block text-sm font-medium text-black dark:text-white"
                        for="fullName"
                        >Nom</label
                      >
                      <div class="relative">
                        <span class="absolute left-4.5 top-4">
                          <svg
                            class="fill-current"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g opacity="0.8">
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M3.72039 12.887C4.50179 12.1056 5.5616 11.6666 6.66667 11.6666H13.3333C14.4384 11.6666 15.4982 12.1056 16.2796 12.887C17.061 13.6684 17.5 14.7282 17.5 15.8333V17.5C17.5 17.9602 17.1269 18.3333 16.6667 18.3333C16.2064 18.3333 15.8333 17.9602 15.8333 17.5V15.8333C15.8333 15.1703 15.5699 14.5344 15.1011 14.0655C14.6323 13.5967 13.9964 13.3333 13.3333 13.3333H6.66667C6.00363 13.3333 5.36774 13.5967 4.8989 14.0655C4.43006 14.5344 4.16667 15.1703 4.16667 15.8333V17.5C4.16667 17.9602 3.79357 18.3333 3.33333 18.3333C2.8731 18.3333 2.5 17.9602 2.5 17.5V15.8333C2.5 14.7282 2.93899 13.6684 3.72039 12.887Z"
                                fill=""
                              />
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M9.99967 3.33329C8.61896 3.33329 7.49967 4.45258 7.49967 5.83329C7.49967 7.214 8.61896 8.33329 9.99967 8.33329C11.3804 8.33329 12.4997 7.214 12.4997 5.83329C12.4997 4.45258 11.3804 3.33329 9.99967 3.33329ZM5.83301 5.83329C5.83301 3.53211 7.69849 1.66663 9.99967 1.66663C12.3009 1.66663 14.1663 3.53211 14.1663 5.83329C14.1663 8.13448 12.3009 9.99996 9.99967 9.99996C7.69849 9.99996 5.83301 8.13448 5.83301 5.83329Z"
                                fill=""
                              />
                            </g>
                          </svg>
                        </span>
                        <input
                          class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                          type="text"
                          name="candidate_name"
                          id="fullName"
                          placeholder="Nom de la Candidate"

                        />
                      </div>
                    </div>

                    <div class="w-full sm:w-1/2">
                      <label
                        class="mb-3 block text-sm font-medium text-black dark:text-white"
                        for="phoneNumber"
                        >Nom Utilisateur</label
                      >
                      <input
                        class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                        type="text"
                        name="username"

                        placeholder="nom utilisateur de la candidate"
                      />
                    </div>
                  </div>
                  <div class="w-full mb-5">
                    <label
                      class="mb-3 block text-sm font-medium text-black dark:text-white"
                      for="phoneNumber"
                      >Age</label
                    >
                    <input
                      class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                      type="text"
                      name="age"

                      placeholder="Age de la candidate"
                    />
                  </div>

                 <div class="w-full mb-5">
                    <label
                      class="mb-3 block text-sm font-medium text-black dark:text-white"
                      for="phoneNumber"
                      >Dossard N°</label
                    >
                    <input
                      class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                      type="text"
                      name="dossard"

                      placeholder="Entrer le dossard de la candidate"
                    />
                  </div>
                  <div class="w-full mb-5">
                    <label
                      class="mb-3 block text-sm font-medium text-black dark:text-white"
                      for="phoneNumber"
                      >Poids de la candidate</label
                    >
                    <input
                      class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                      type="text"
                      name="poids"

                      placeholder="Entrer le poids de la candidate"
                    />
                  </div>
                  <div>
                    <label
                      class="mb-3 block text-sm font-medium text-black dark:text-white"
                    >
                      Selectionnez la ville de residence
                    </label>
                    <div
                      x-data="{ isOptionSelected: false }"
                      class="relative z-20 bg-white dark:bg-form-input"
                    >
                      <select
                      name="city"
                        class="relative mb-5 z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                        :class="isOptionSelected && 'text-black dark:text-white'"
                        @change="isOptionSelected = true"
                      >

                      <option value="Représentante du Littoral" class="text-body">Représentante du Littoral</option>
                      <option value="Représentante du Nord" class="text-body">Représentante du Nord</option>
                      <option value="Représentante du Centre" class="text-body">Représentante du Centre</option>
                      <option value="Représentante de l'Ouest" class="text-body">Représentante de l'Ouest</option>
                      <option value="Représentante du Nord-ouest" class="text-body">Représentante du Nord-ouest</option>

                    </select>
                      <span
                        class="absolute right-4 top-1/2 z-10 -translate-y-1/2"
                      >
                        <svg
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g opacity="0.8">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                              fill="#637381"
                            ></path>
                          </g>
                        </svg>
                      </span>
                    </div>
                  </div>

                  <div class="mb-5.5 mt-5">
                    <label
                      class="mb-3 block text-sm font-medium text-black dark:text-white"
                      for="Username"
                      >Taille</label
                    >
                    <input
                      class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                      type="text"
                      name="size"
                      id="Username"
                      placeholder="Taille de la candidate"
                    />
                  </div>
                  <div>
                    <label
                      class="mb-3 block text-sm font-medium text-black dark:text-white"
                    >
                      Selectionnez la categorie d'une candidate
                    </label>
                    <div
                      x-data="{ isOptionSelected: false }"
                      class="relative z-20 bg-white dark:bg-form-input"
                    >
                      <select
                      name="category_id"
                        class="relative mb-5 z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                        :class="isOptionSelected && 'text-black dark:text-white'"
                        @change="isOptionSelected = true"
                      >
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}" class="text-body">{{ $category->category_title }}</option>
                      @endforeach


                    </select>
                      <span
                        class="absolute right-4 top-1/2 z-10 -translate-y-1/2"
                      >
                        <svg
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <g opacity="0.8">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                              fill="#637381"
                            ></path>
                          </g>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div>
                    <label
                      class="mb-3 block text-sm font-medium text-black dark:text-white"
                    >
                      Profil Candidate
                    </label>
                    <input
                      type="file"
                      name="profile"
                      class="w-full mb-5 cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary"
                    />
                  </div>
                  <div class="flex justify-end gap-4.5">
                    <button
                      class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                      type="submit"
                    >
                      Cancel
                    </button>
                    <button
                      class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90"
                      type="submit"
                    >
                      Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
        <!-- ====== Settings Section End -->
      </div>
    </div>
  </main>


@endsection
