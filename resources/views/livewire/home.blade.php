<div class="grid grid-cols-1 max-w-[1024px] w-full mx-auto my-[4rem]">
    <div class="grid grid-cols-2 gap-[4rem]">
        <img src="{{ asset('assets/img/profile_picture.jpg') }}" alt="profile_picture" class="w-full aspect-square object-cover shadow-sm">
        <div class="mt-[1rem]">
            <h2 class="text-black text-[2rem] font-semibold">{{ __('Ik ben Finn, een software developer uit Nederland') }}</h2>
            <p class="my-[1.5rem] text-gray2">{{ __('Dit is mijn portfolio website die ik moest maken voor Burgerschap. Het doel van deze website is een opsomming maken van wat projecten die ik heb gedaan voor school, en alle Burgerschap opdrachten laten zien. Ook kan je me onderaan deze pagina contacteren voor vragen!') }}</p>
            <div class="flex gap-[1rem]">
                <a href="https://www.linkedin.com/in/finn-groenewoud" target="_blank" class="text-gray2 hover:brightness-90">
                    <svg class="w-[1.5rem] h-[1.5rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037c-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85c3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065a2.064 2.064 0 1 1 2.063 2.065m1.782 13.019H3.555V9h3.564zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0z" />
                    </svg>
                </a>
                <a href="mailto:finn.groenewoud@gmail.com" target="_blank" class="text-gray2 hover:brightness-90">
                    <svg class="w-[1.5rem] h-[1.5rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M13.333 0H2.667A2.675 2.675 0 0 0 0 2.667v10.666C0 14.8 1.2 16 2.667 16h10.666C14.801 16 16 14.8 16 13.333V2.667A2.674 2.674 0 0 0 13.333 0M4 4h8c.143 0 .281.031.409.088L8 9.231L3.591 4.088A.982.982 0 0 1 4 4m-1 7V5l.002-.063l2.932 3.421l-2.9 2.9A.967.967 0 0 1 3 11m9 1H4c-.088 0-.175-.012-.258-.034L6.588 9.12l1.413 1.648L9.414 9.12l2.846 2.846a.967.967 0 0 1-.258.034zm1-1c0 .088-.012.175-.034.258l-2.9-2.9l2.932-3.421L13 5z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="pt-[6rem]" id="portfolio">
        <h3 class="text-center text-3xl font-semibold text-black">{{ __('Portfolio') }}</h3>
        <p class="mt-[.3rem] text-center text-base font-normal text-gray2">{{ __('Dit zijn een paar van mijn projecten.') }}</p>
        <div class="mt-[2rem] grid grid-cols-2 gap-[2rem]">
            @foreach ($projects as $project)
                <a href="{{ $project->github_link }}" target="_blank" class="relative shadow-sm">
                    <img src="{{ $project->showcase_image }}" alt="project_image" class="w-full aspect-video object-cover">
                    <div class="bg-white py-[1rem] px-[1.5rem]">
                        <h4 class="text-black text-base font-semibold">{{ $project->title }}</h4>
                        <p class="text-gray2 text-sm font-normal">{{ $project->description }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="pt-[6rem]" id="burgerschap">
        <h3 class="text-center text-3xl font-semibold text-black">{{ __('Burgerschap') }}</h3>
        <p class="mt-[.3rem] text-center text-base font-normal text-gray2">{{ __('Dit zijn al mijn burgerschap opdrachten.') }}</p>
        <div class="mt-[2rem] grid grid-cols-2 gap-[2rem]">
            @foreach ($social_studies as $social_study)
                <a href="{{ $social_study->github_link }}" target="_blank" class="relative shadow-sm">
                    <img src="{{ $social_study->showcase_image }}" alt="project_image" class="w-full aspect-video object-cover">
                    <div class="bg-white py-[1rem] px-[1.5rem]">
                        <h4 class="text-black text-base font-semibold">{{ $social_study->title }}</h4>
                        <p class="text-gray2 text-sm font-normal">{{ $social_study->description }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="pt-[6rem]" id="contact">
        <h3 class="text-center text-3xl font-semibold text-black">{{ __('Contact') }}</h3>
        <p class="mt-[.3rem] text-center text-base font-normal text-gray2">{{ __('Voel je vrij om me te contacteren als je vragen hebt.') }}</p>
        <div class="mt-[2rem] flex flex-col max-w-[712px] mx-auto">
            <label for="contact_body" class="mb-[.5rem] text-black text-base font-semibold">{{ __('Bericht') }}</label>
            <textarea name="contact_body" id="contact_body" wire:model.live="contact_body" placeholder="{{ __('Typ hier je bericht...') }}" rows="10"></textarea>
            <a href="mailto:finn.groenewoud@gmail.com?body={{ $this->encodedContactBody }}" class="ml-auto mt-[1rem] px-[2rem] py-[.5rem] bg-white shadow-sm hover:brightness-75">{{ __('Send') }}</a>
        </div>
    </div>
</div>
