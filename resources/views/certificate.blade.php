<x-admin.home-layout>
    <section id="certificate" class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center">
                    <h2 class="mb-4">My Certificates</h2>
                    <p>Here are my achievements. Feel free to explore and upload new certificates.</p>
                </div>
            </div>
            <!-- Display Certificates -->
            <div class="row justify-content-center align-items-center">
                @foreach($certificate as $cert)
                <div class="col-md-4 mb-4">
                    <div class="card justify-content-center align-items-center">
                        <!-- Check if certificate file exists and display it -->
                        <div class="card-img-top text-center mt-4">
                            <i class="fas fa-certificate" style="font-size: 100px; color: #ff5722;"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $cert->name }}</h5>
                            <p class="card-text">{{ $cert->description }}</p>
                            <p><strong>Issued By:</strong> {{ $cert->issued_by }}</p>
                            <p><strong>Issued At:</strong> {{ $cert->issued_at }}</p>
                            @if($cert->file)
                            <a href="{{ asset('storage/' . $cert->file) }}" class="btn btn-primary btn-sm"
                                target="_blank">View Certificate</a>
                            @else
                            No File uploaded
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
    #certificate .form-control {
        border-radius: 5px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    #certificate .btn-primary {
        background: #ff5722;
        border: none;
        transition: background 0.3s ease;
    }

    #certificate .btn-primary:hover {
        background: #e64a19;
    }

    #certificate .card {
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    #certificate .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    </style>
</x-admin.home-layout>