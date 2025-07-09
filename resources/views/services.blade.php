<x-layout>
    <section class="py-[80px] sm:py-[100px] bg-cover bg-no-repeat px-[15px] sm:px-0" style="background-image: url('media/0047.jpg')">
        <div class="mx-0 sm:mx-[85px] py-[20px]">
            <h1 class="text-[30px] leading-[40px] sm:text-[45px] sm:leading-[55px] text-white font-[700] text-left" style="font-family: MTNBrighterSans-Medium">Our Services</h1>
            <p class="text-white text-[20px] sm:text-[25px] mt-[20px] sm:mt-[30px] leading-[28px] sm:leading-[30px]" style="font-family: MTNBrighterSans-Medium">
                From Simple Filings to Complex Tax Strategies - We've Got You Covered
            </p>
        </div>
    </section>

    <hr class="border-none h-[30px]">

    <section class="bg-white px-[15px] sm:px-[85px] py-[50px]">
        <h1 class="text-[28px] sm:text-[35px] leading-[38px] sm:leading-[45px] font-[700] text-left" style="font-family: MTNBrighterSans-Medium">What we do</h1>
        <hr class="border border-[#0d0348]">
    </section>

    <section class="bg-white px-[15px] sm:px-[85px]">
        <h1 class="text-[20px] sm:text-[25px] leading-[26px] sm:leading-[30px] block font-[700] text-right" style="font-family: MTNBrighterSans-Medium">Individual Tax Services</h1>
        <div class="home-serv px-0 sm:px-[30px] mt-[30px] mx-0 sm:mx-[30px] flex flex-col sm:flex-row flex-wrap gap-[20px] justify-center sm:justify-between">
            @foreach([[
                'title' => 'Personal Tax Preparation and Filing',
                'desc' => 'Stress-free filing for W-2 employees, freelancers, retirees, and more.'
            ], [
                'title' => 'Maximize Your Refund',
                'desc' => 'We find every deduction and credit you qualify for.'
            ], [
                'title' => 'Tax Planning & Estimated Payments',
                'desc' => 'Avoid surprises—plan ahead for next year’s taxes.'
            ], [
                'title' => 'IRS Audit & Notice Assistance',
                'desc' => 'Don’t panic—we’ll handle IRS letters and audits for you.'
            ]] as $card)
                <div class="py-[20px] px-[10px] max-w-full sm:max-w-[220px] text-white" style="background-color: #0d0348; opacity: 0.7;">
                    <h2 class="block text-center font-[400] text-[14px]" style="font-family: MTNBrighterSans-Medium">{{ $card['title'] }}</h2>
                    <hr class="border-white border my-[5px]">
                    <ol class="block mt-[10px] list-disc px-[20px]" style="font-family: MTNBrighterSans-Light">
                        <li>{{ $card['desc'] }}</li>
                    </ol>
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-white px-[15px] sm:px-[85px] pt-[30px]">
        <hr class="border border-[#0d0348] my-[20px]">
        <h1 class="text-[20px] sm:text-[25px] leading-[26px] sm:leading-[30px] block font-[700] text-left" style="font-family: MTNBrighterSans-Medium">Business Tax Services</h1>
        <div class="home-serv px-0 sm:px-[30px] mt-[30px] mx-0 sm:mx-[30px] flex flex-col sm:flex-row flex-wrap gap-[20px] justify-center sm:justify-between">
            @foreach([[
                'title' => 'Small Business & Self-Employed Taxes',
                'desc' => 'LLCs, S-Corps, freelancers, and gig workers—we know your deductions!'
            ], [
                'title' => 'Payroll & Bookkeeping Support',
                'desc' => 'Keep your finances organized year-round.'
            ], [
                'title' => 'Quarterly Tax Estimates',
                'desc' => 'Avoid penalties with accurate quarterly filings.'
            ]] as $card)
                <div class="py-[20px] px-[10px] max-w-full sm:max-w-[220px] text-white" style="background-color: #c1b513; opacity: 0.7;">
                    <h2 class="block text-center font-[400] text-[14px]" style="font-family: MTNBrighterSans-Medium">{{ $card['title'] }}</h2>
                    <hr class="border-white border my-[5px]">
                    <ol class="block mt-[10px] list-disc px-[20px]" style="font-family: MTNBrighterSans-Light">
                        <li>{{ $card['desc'] }}</li>
                    </ol>
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-white px-[15px] sm:px-[85px] pt-[30px]">
        <hr class="border border-[#0d0348] my-[20px]">
        <h1 class="text-[20px] sm:text-[25px] leading-[26px] sm:leading-[30px] block font-[700] text-right" style="font-family: MTNBrighterSans-Medium">Specialty Tax Help</h1>
        <div class="home-serv px-0 sm:px-[30px] mt-[30px] mx-0 sm:mx-[30px] flex flex-col sm:flex-row flex-wrap gap-[20px] justify-center sm:justify-between">
            @foreach([[
                'title' => 'Tax Debt Relief & IRS Negotiation',
                'desc' => 'Settle back taxes, set up payment plans, or negotiate penalties.'
            ], [
                'title' => 'Estate & Inheritance Tax Filing',
                'desc' => 'Guidance for executors and beneficiaries.'
            ], [
                'title' => 'Nonprofit & Real Estate Tax Services',
                'desc' => 'Specialized support for unique tax situations.'
            ]] as $card)
                <div class="py-[20px] px-[10px] max-w-full sm:max-w-[220px] text-white" style="background-color: #0d0348; opacity: 0.7;">
                    <h2 class="block text-center font-[400] text-[14px]" style="font-family: MTNBrighterSans-Medium">{{ $card['title'] }}</h2>
                    <hr class="border-white border my-[5px]">
                    <ol class="block mt-[10px] list-disc px-[20px]" style="font-family: MTNBrighterSans-Light">
                        <li>{{ $card['desc'] }}</li>
                    </ol>
                </div>
            @endforeach
        </div>
    </section>

    <hr class="border-none h-[30px]">

    <section class="bg-white px-[15px] sm:px-0">
        <div class="mx-0 sm:mx-[85px] py-[20px]">
            <h1 class="text-[24px] sm:text-[30px] block leading-[35px] sm:leading-[45px] font-[700] text-center" style="font-family: MTNBrighterSans-Medium">Book an Appointment</h1>
            <p class="text-gray-500 text-center text-[16px] sm:text-[18px] mt-[20px] sm:mt-[30px] leading-[20px]" style="font-family: MTNBrighterSans-Medium">
                Our hours are from 8:00 AM to 6:00 PM on weekdays or between 10:00 AM and 3:00 PM on Saturdays. It takes about 1 to 1½ hours to prepare a typical return.
            </p>
            <span class="flex mt-[20px]">
                <a class="cta-btn mx-auto text-white" href="{{route('contact')}}" style="background-color: #0d0348; font-family: MTNBrighterSans-Medium">Book Now</a>
            </span>
        </div>
    </section>
</x-layout>
