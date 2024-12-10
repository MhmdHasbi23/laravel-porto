<x-admin.home-layout>
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row d-flex contact-info mb-5">
                @foreach($contacts as $contact)
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Name</h3>
                        <p><a href="#">{{ $contact->name }}</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>{{ $contact->message }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a>{{ $contact->phone }}</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a >{{ $contact->email }}</a></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row no-gutters block-9 justify-content-center align-items-center" style="min-height: 100vh;">
                <!-- Kolom untuk Form dan Gambar -->
                <div class="col-md-10 d-flex">
                    <form id="contactForm" action="{{ route('admin.contacts.store') }}" method="POST"
                        class="bg-light p-4 p-md-5 contact-form row w-100">
                        @csrf
                        <!-- Kolom Kiri: Input Form -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Address" rows="7"
                                    required></textarea>
                            </div>
                        </div>

                        <!-- Kolom Kanan: Gambar -->
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/image.png') }}" alt="Edit Skill Illustration"
                                style="max-height: 350px; width: 100%; object-fit: cover;">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                        </div>
                    </form>
                    <div id="responseMessage"></div>
                </div>
            </div>
        </div>
    </section>
</x-admin.home-layout>