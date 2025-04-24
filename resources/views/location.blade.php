@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl ">
        <div class="flex md:flex-row flex-col justify-around  items-center px-6 pt-6">
            <div class="md:m-12 p-6 md:w-1/2">
                <img loading="lazy" src="/images/abouttruck.webp" alt="shop image">
            </div>
            <div class=" relative md:m-12 m-6 md:w-1/2 md:p-6">

                <p>Welcome to our truck rental service, conveniently located in the heart of the city. Situated in a prime location, our shop provides easy access and serves as a central hub for all your truck rental needs. Whether you're a local business owner or someone transporting goods across town, finding us is simple and hassle-free.</p>
                <br>
                <p>Our shop is strategically located near major transportation hubs, including airports, train stations, and bus terminals, ensuring it's easy for you to pick up and drop off your rental truck. Upon arrival, our friendly staff will greet you with a warm welcome, making sure your rental process is smooth and efficient from start to finish.</p>
            </div>

        </div>
        <div class="flex md:flex-row flex-col justify-around  items-center px-6 pt-6">

            <div class="md:m-12 p-6 md:w-1/2 md:order-last ">
                <img loading="lazy" src="/images/abouttruck1.webp" alt="shop image">
            </div>

            <div class=" relative md:m-12 m-6 md:w-1/2 md:p-6">
                <p>Located in a vibrant neighborhood, our shop is surrounded by a variety of amenities and attractions. You'll find a selection of restaurants, cafes, and shopping centers just a short distance away, ideal for grabbing a bite to eat or running errands before or after your truck rental experience..</p>
                <br>
                <p>With ample parking space available at our location, you can easily drive in, park your own vehicle, and drive out with your rental truck seamlessly. We prioritize your convenience, and our location is designed to minimize any inconvenience or delays, allowing you to focus on your journey ahead.</p>
            </div>


        </div>
        <div class=" p-3 mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3500.022331723154!2d76.95081227550288!3d28.688978575633943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDQxJzIwLjMiTiA3NsKwNTcnMTIuMiJF!5e0!3m2!1sen!2sin!4v1745359520631!5m2!1sen!2sin"
                class="w-full h-96" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
@endsection
