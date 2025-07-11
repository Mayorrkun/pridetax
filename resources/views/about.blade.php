@php
    $values = [
        ["title"=>"Excellence", "img_src"=>"media/11.png"],
        ["title"=>"Trustworthy","img_src"=>"media/10.png"],
        ["title"=>"Convenient", "img_src"=>"media/8.png"]
    ];
    $reviews = [
        ["name"=>"Marcus T.", "review"=>"Pride Tax Services got me my biggest refund ever, highly recommend!"],
        ["name"=>"Sarah K.", "review"=>"Finally, a tax company that explains everything clearly and saves me money!"],
        ["name"=>"David R.", "review"=>"As a freelancer, their expertise saved me thousands. Worth every penny!"],
        ["name"=>"Lisa M.", "review"=>"Stress-free taxes? Yes! The team handled my IRS notice in one call."],
    ];
@endphp

<x-layout>
    <section class="py-[100px] bg-cover bg-no-repeat" style="background-image: url('{{ url('media/0052.jpg') }}')">
        <div class="px-[20px] sm:mx-[85px] text-white fadeText">
            <h1 class="text-[35px] sm:text-[45px] leading-[45px] sm:leading-[55px] font-[700] text-left" style="font-family: MTNBrighterSans-Medium">About Us</h1>
            <p class="text-[20px] sm:text-[25px] mt-[30px] leading-[28px] sm:leading-[30px]" style="font-family: MTNBrighterSans-Medium">
                Your Trusted Tax Partner – Where Expertise Meets Personal Care
            </p>
            <p class="text-[18px] mt-[20px] leading-[20px] text-justify" style="font-family: MTNBrighterSans-Regular">
                PrideTax Store is a professional tax preparation company founded in 2021, dedicated to helping individuals confidently navigate the tax filing process.
            </p>
            <p class="text-[18px] leading-[20px] text-justify" style="font-family: MTNBrighterSans-Regular">
                Since our launch, we have served hundreds of satisfied clients across the United States.
            </p>
        </div>
    </section>

    <hr class="border-none h-[60px]">

    <section class="bg-white py-[50px]">
        <div class="px-[20px] sm:mx-[85px]">
            <h1 class="text-[30px] sm:text-[35px] text-black leading-[35px] sm:leading-[45px] font-[700] sm:text-center text-left" style="font-family: MTNBrighterSans-Medium">Our Values</h1>
            <p class="text-[18px] mt-[10px] text-justify leading-[20.8px] sm:px-[30px]" style="font-family: MTNBrighterSans-Regular">
                At PrideTax Store, we believe everyone deserves accessible and reliable tax services without the hassle...
            </p>
            <div class="my-[20px] grid grid-cols-1 sm:grid-cols-3 gap-[20px] sm:px-[100px]">
                @foreach($values as $value)
                    <div class="shadow-md border-gray-500 group hover:translate-y-[-20px] duration-300 max-w-[250px] mx-auto">
                        <div class="mx-auto value relative border-gray-500">
                            <img src="{{url($value["img_src"])}}" alt="try again">
                        </div>
                        <p class="py-[10px]">
                            <span class="block text-center text-[25px] text-[#0d0348] first-letter:text-[#c1b513]" style="font-family: MTNBrighterSans-Medium;">{{$value["title"]}}</span>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <hr class="border-none h-[60px]">

    <section class="bg-white py-[50px]">
        <div class="px-[20px] sm:mx-[85px]">
            <h1 class="text-[30px] mb-[30px] text-left sm:text-right text-black leading-[35px] font-[600]" style="font-family: MTNBrighterSans-Medium;">Who We Serve</h1>
            <ul class="my-[20px] text-[16px] px-[50px] sm:px-0 leading-[20px] font-medium grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[20px] list-disc justify-center" style="font-family: MTNBrighterSans-Regular">
                <li class="max-w-[250px]">First-time tax filers</li>
                <li class="max-w-[250px]">Individuals with W-2 or 1099 income</li>
                <li class="max-w-[250px]">Self-employed professionals</li>
                <li class="max-w-[250px]">Clients with back taxes from 2021 or earlier</li>
                <li class="max-w-[250px]">Retirees and fixed-income earners</li>
                <li class="max-w-[250px]">Individuals needing audit support or tax guidance</li>
            </ul>
        </div>
    </section>

    <hr class="border border-[#0d0348] opacity-70">

    <section class="bg-white py-[50px]">
        <div class="px-[20px] sm:mx-[85px]">
            <h1 class="text-[30px] sm:text-[35px] text-black leading-[35px] sm:leading-[45px] font-[700] text-center mb-[30px]" style="font-family: MTNBrighterSans-Medium">Feedback From Clients</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[30px] mt-[20px] justify-center">
                @foreach($reviews as $review)
                    <div class="rounded-[10px] border-gray-500 shadow-lg p-[10px] hover:translate-y-[-10px] duration-300" style="background-color: rgba(13,3,72,0.65)">
                        <span class="block"><img src="{{url('media/profile.png')}}" class="w-[100px] mx-auto h-[100px] opacity-60" alt="nope"></span>
                        <h1 class="block font-bold text-[25px] text-center text-[#c1b513]" style="font-family: MTNBrighterSans-Medium;">{{$review["name"]}}</h1>
                        <p class="text-[16px] text-white mx-[20px] py-[10px] text-center leading-[18px]" style="font-family: MTNBrighterSans-Regular">
                            "{{$review["review"]}}"
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
