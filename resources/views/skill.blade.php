<x-admin.home-layout>
<section id="skills" class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center">
                <h2 class="mb-4">My Skills</h2>
                <p>These are the tools and technologies I excel at to create amazing solutions and solve problems.</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            @forelse ($skills as $skill)
            <div class="col-md-4 text-center">
                <div class="skill-wrap">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-coding"></span>
                    </div>
                    <img src="{{ asset('assets/paan.png') }}" class="img-fluid mb-3">
                    <h3>{{ $skill->title }}</h3>
                    <p>{{ $skill->description }}</p>
                </div>
            </div>
            @empty
            <div class="col-md-12 text-center">
                <p>No skills available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    .skill-wrap {
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }
    .skill-wrap:hover {
        transform: translateY(-10px);
    }
    .skill-wrap .icon {
        font-size: 50px;
        color: #ff5722;
        margin-bottom: 15px;
    }
    .skill-wrap h3 {
        font-size: 24px;
        color: black;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .skill-wrap img {
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
</x-admin.home-layout>
