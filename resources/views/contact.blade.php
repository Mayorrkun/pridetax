<x-layout>
    <section class="py-[100px] bg-cover bg-no-repeat" style="background-image: url('media/0049.jpg')">
        <div class="px-[20px] sm:mx-[85px] py-[20px]">
            <h1 class="text-[35px] sm:text-[45px] text-white leading-[45px] sm:leading-[55px] font-[700] text-left" style="font-family: MTNBrighterSans-Medium">Contact Us</h1>
            <p class="text-white text-[20px] sm:text-[25px] mt-[30px] leading-[28px] sm:leading-[30px]" style="font-family: MTNBrighterSans-Medium">
                Our customer fulfillment representatives are available 24/7 to manage all of your inquiries.
            </p>
        </div>
    </section>

    <hr class="border-none h-[60px]">

    <section class="bg-white py-[50px]">

            <div class="px-[20px] sm:mx-[85px] flex flex-col lg:flex-row gap-[50px]">
                @if(0 === 1)
                <form action="{{route('contact-form')}}" method="POST" class="w-full lg:w-[60%]">
                    @csrf
                    <h1 class="block text-[20px] sm:text-[22px] mb-[30px] leading-[30px]" style="font-family: MTNBrighterSans-Regular">Send us a message!</h1>
                    <input type="text" class="block w-full border-[#f0f0f0] shadow-sm border text-[18px] sm:text-[20px] p-[10px] mb-[30px]" name="first_name" placeholder="First Name*" style="font-family: 'Times New Roman'">
                    <x-error name="first_name"></x-error>
                    <input type="text" class="block w-full border-[#f0f0f0] shadow-sm border text-[18px] sm:text-[20px] p-[10px] mb-[30px]" name="last_name" placeholder="Last Name*" style="font-family: 'Times New Roman'">
                    <x-error name="last_name"></x-error>
                    <input type="email" class="block w-full border-[#f0f0f0] shadow-sm border text-[18px] sm:text-[20px] p-[10px] mb-[30px]" name="email" placeholder="Email*" style="font-family: 'Times New Roman'">
                    <x-error name="email"></x-error>
                    <input type="text" class="block w-full border-[#f0f0f0] shadow-sm border text-[18px] sm:text-[20px] p-[10px] mb-[30px]" name="phone" placeholder="Phone Number*" style="font-family: 'Times New Roman'">
                    <x-error name="phone"></x-error>
                    <textarea rows="4" class="block w-full border-[#f0f0f0] shadow-sm border text-[18px] sm:text-[20px] p-[10px] mb-[30px]" name="message" placeholder="Message*" style="font-family: 'Times New Roman'"></textarea>

                    <x-error name="message"></x-error>
                    <input type="submit" class="w-full my-[10px] bg-[#0d0348] text-[20px] p-[10px] text-white rounded-[3px] font-[500] cursor-pointer hover:opacity-90" style="font-family: MTNBrighterSans-Medium">
                </form>
                @endif

                <div class="w-full lg:w-[40%]" style="font-family: MTNBrighterSans-Regular">
                    @if(0 === 1)
                    <h1 class="block text-[20px] sm:text-[23px]">Questions Comments or More Information</h1>
                    <p class="block text-[14px] my-[10px] text-gray-500">Please fill out the form to contact Pride Tax Store, LLC if you are interested in our services or have any questions or comments.</p>
                    @endif
                    <h1 class="block text-[25px] sm:text-[30px] font-[600]">Pride Tax Store</h1>
                        <hr class="w-full h-[3px] border-[#c1b513]" style="color: #c1b513">
                    <p class="block text-[14px] my-[5px] text-gray-500"> 2498 Perry Crossing Way, suite 240, Plainfield, IN 46168, USA</p>
                    <p class="block text-[14px] my-[20px] text-gray-500"> You can reach us by our phone number <br> 1 844-506-0861</p>
                    <h1 class="block text-[25px] font-[600] sm:text-[30px]">Hours</h1>
                        <hr class="w-full h-[3px] border-[#c1b513]" style="color: #c1b513">
                    <ul class="mt-[20px]">
                        <li class="gap-[20px] my-[5px] flex text-gray-500 text-[16px]"><span class="w-[50px]">Mon</span><span>08:00 am - 06:00 pm</span></li>
                        <li class="gap-[20px] my-[5px] flex text-gray-500 text-[16px]"><span class="w-[50px]">Tue</span><span>08:00 am - 06:00 pm</span></li>
                        <li class="gap-[20px] my-[5px] flex text-gray-500 text-[16px]"><span class="w-[50px]">Wed</span><span>08:00 am - 06:00 pm</span></li>
                        <li class="gap-[20px] my-[5px] flex text-gray-500 text-[16px]"><span class="w-[50px]">Thu</span><span>08:00 am - 06:00 pm</span></li>
                        <li class="gap-[20px] my-[5px] flex text-gray-500 text-[16px]"><span class="w-[50px]">Fri</span><span>08:00 am - 06:00 pm</span></li>
                        <li class="gap-[20px] my-[5px] flex text-gray-500 text-[16px]"><span class="w-[50px]">Sat</span><span>08:00 am - 06:00 pm</span></li>
                        <li class="gap-[20px] my-[5px] flex text-gray-500 text-[16px]"><span class="w-[50px]">Sun</span><span>10:00 am - 03:00 pm</span></li>
                    </ul>
                </div>
            </div>


    </section>

    <hr class="border-none h-[60px]">

    <section class="relative">
        <a href="https://maps.app.goo.gl/L67WUmK78VUYiakBA" class="absolute top-[20px] right-[10px] text-[16px] sm:text-[18px] bg-[#fff] text-[#c1b513] font-bold p-[8px] sm:p-[10px] rounded-[5px] z-10 cursor-pointer" style="font-family: Arial">Get Directions <i class="im-compass-rose"></i></a>
        <iframe class="w-full h-[400px] sm:h-[450px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3069.2537425514456!2d-86.35975479999999!3d39.71147989999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca449b04684ad%3A0x898eece869d7e94a!2s2498%20Perry%20Crossing%20Way%20suite%20240%2C%20Plainfield%2C%20IN%2046168%2C%20USA!5e0!3m2!1sen!2sng!4v1752053718855!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</x-layout>
