<x-admin.home-layout>
    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">My Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                @foreach($projects as $project)
                    <div class="col-md-8">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                            style="background-image: url('{{ asset('assets/tempat.jpg') }}'); border-radius: 15px;">
                            <div class="overlay" style="border-radius: 15px;"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">{{ $project->name }}</a></h3>
                                <span class="mt-4">{{ $project->description }}</span>
                                <p class="mt-4">{{ $project->link }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-admin.home-layout>
