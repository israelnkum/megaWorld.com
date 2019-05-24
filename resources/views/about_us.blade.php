@extends('layouts.app')
@section('content')
    <!-- breadcrumb area -->
    <div class="breadcrumb-area bg-img pt-230 pb-152 default-overlay-2" style="background-image: url({{asset('public/images/bg/single_bg.jpg')}});background-size: cover">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-uppercase">About Us</h2>
            </div>
        </div>
    </div>


    <div class="works-area pt-120 pb-100">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-10 text-center offset-md-1  col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h2>All About Us</h2>
                        <p class="mb-5  text-dark ">
                            MEGA WORLD CENTRE GHANA LIMTED is the sole importer and distributor of Paglieri product from Italy in Ghana with brand names such as Felce Azura, Cleo, Bianco and Mon Amour. These products ranges from Cosmetics, Laundry to Home care products. We are also into the sale of Solar and Wind Energy as well as ICT. By our hard work and determination, we have been granted a Contract of representing Samsung Electronics West Africa in Central and Western Region of Ghana in the area of Sales and Repairs of all Samsung Electronic products. Additionally, we have been awarded a contract by Double Gamma in the area of Sales and Servicing of Electronic products with brand names like Samsung, Chigo, Gamma and LG.
                        </p>
                        <p class="mb-5  text-dark">
                            The Company was established in the year 2005 and is privately owned by a Ghanaian Entrepreneur. Within a short period of five years, Mega World Centre has been able to increase its client base form 5% to 75% covering about 70% of the Country’s Market base despite its numerous challenges like fluctuating exchange rates. With external links in Europe specifically Italy, we are proud to announce to you Paglieri Group of Companies Astechnology SPA as our allies in the Business.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex mt-80 align-items-center">
                <div class="col-lg-6 text-center col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h2>Our Objectives</h2>
                        <p class="mb-5  text-dark ">
                            The major objective of Mega World Center is to offer customers the best prices on the highest quality products and services and increase our clients’ base to over 70% in the next three years. Our ability to respond to customer needs in a timely manner and prompt response to customer enquiry set as aside from our Competitors.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-center col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h2>Our Legal Status</h2>
                        <p class="mb-5  text-dark ">
                            Mega World Centre is privately owned by an individual entrepreneur and the Company has been duly registered with the Registrar Generals Department and has been authorized to operate in Ghana with relevant documents attached for attestation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="works-area pt-215 pb-100">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4 offset-md-2 col-md-6">
                    <div class="works-video-img mr-20">
                        <img src="{{asset('public/images/bg/pic.jpeg')}}" class="img-fluid" height="auto" width="50" alt="">
                    </div>
                </div>
                <div class="col-lg-4  col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h2>Our Director</h2>
                        <h3>Alex Yaw Donkor</h3>
                        <p style="line-height: 20px" class="mb-5  text-dark">
                            Mr Donkor is an Associate professor in ICT with Marketing and Accounting Background His experience is seen in the Management of Mega World Centre Limited in Ghana and Italy for the past sixteen years. His business experience is in the areas in of strategic planning, marketing, Business Development and Sales.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="works-area pt-20 pb-245">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8 text-center offset-md-2  col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h2>Organizational Structure</h2>
                        <p class="mb-5  text-dark">
                            The Company is manned by the Director together with the Chief of Operations Officer and a three member Board of Directors. We have departments like Administration, Transport, Marketing and Sales as well as Account who are into full operation.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-center pt-50">
                <div class="col-lg-8 text-center offset-md-2  col-md-6">
                    <div class="tools-content ml-20 text-dark">
                        <h2>Projects / Contracts</h2>
                        <p class="mb-5  text-dark">
                            The Company is currently into Business Distributorship Agreement with Boateng Cosmetics at Berekum at a tune of GHC 50.000.00 and a distributor in Kumasi with a capital agreement of GHC 100,000.00. Contract of Agreement has also been signed by All Needs Supermarket, Nakoff Hotel, Ecobank Ghana Limited etc for the maintenance and repairs of their Air Conditions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="team-area mt-50 pb-90">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>Board Of Directors</h2>
                        <p>Meet Our Experienced Board of Directors</p>
                    </div>
                    <div class="row">
                        @for($i =0; $i<4; $i++)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="team-wrapper mb-30">
                                    <div class="team-img">
                                        <a href="#">
                                            <img src="{{asset('public/images/bg/pic.jpeg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="team-content text-center">
                                        <h4>Alex Yaw Donkor</h4>
                                        <span>Director</span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="team-area mt-50">
                <div class="container">
                    <div class="section-title text-center mb-10">
                        <h2>Company Associates and Clients</h2>
                        <p>
                            With a vision to expand our customer base to over 80% in the next three years all things being equal, the Company with a work force of 36 and its enormous effort  has been able to sweep the following clients with few being mentioned below.
                        </p>
                    </div>
                </div>
            </div>

            <div class="shop-area pt-30 pb-75">
                <div class="shop-carousel-active owl-carousel">
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Shoprite
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Melcom
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        All Needs
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        U84 Supermarket
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Galaxy Oil
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Yankee Ladies
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Galaxy Oil, Takoradi
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Famat
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        One and All, Takoradi
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Ransbert
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Le Champion Supermarket
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Nyamele Enterprise, Axim
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        First Samuel Enterprise
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Evergreen Supermarket
                    </div>

                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Ben Otoo Super Market
                    </div>

                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Opoku Trading
                    </div>
                    <div class="text-center text-uppercase bg-white text-dark p-4">
                        Carlos Supermarket
                    </div>
                </div>
            </div>

            <div class="team-area mt-50">
                <div class="container">
                    <div class="section-title text-center mb-10">
                        <h2>Business Competitiveness</h2>
                        <p>
                            As the sole importer of Paglieri products from Italy, our customers are assured of high quality product with no adulteration. These products are imported into the country on regular bases after meeting all the requirements and getting approval from Ghana Food and Drugs Board. The Company is staffed with well equipped and technically oriented technicians who add a touch of professionalism to any task assigned to them. Customer follow up's and prompt response to customer enquires is our trademark in the area of customer service.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection