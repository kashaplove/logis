<div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Contact Us</h2>
        <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
    </div>
</div>
<div class="row">
    <div class="col-md-7 mb-5">


        <form action="{{ route('store') }}" class="p-5 bg-white" method="post">
            @csrf


            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name*</label>
                    <input value="{{ old('first_name') }}" name="first_name" type="text" id="fname" class="form-control">
                    @error('first_name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name*</label>
                    <input value="{{ old('last_name') }}" name="last_name" type="text" id="lname" class="form-control">
                    @error('last_name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row form-group">

                <div class="col-md-12">
                    <label class="text-black" for="email">Email*</label>
                    <input value="{{ old('email') }}" name="email" type="email" id="email" class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row form-group">

                <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label>
                    <input value="{{ old('subject') }}" name="subject" type="subject" id="subject" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="message">Message*</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message') }}</textarea>
                    @error('message')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
            </div>


        </form>
    </div>
    <div class="col-md-5">

        <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">youremail@domain.com</a></p>

        </div>

        <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">More Info</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic
                consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque
                sed nulla.</p>
            <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
        </div>

    </div>
</div>
