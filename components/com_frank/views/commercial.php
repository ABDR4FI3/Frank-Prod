<?php
$Commercialdata = [
    [
        'title' => 'Hotels and hotel apartments for Sale in Dubai',
        'text' =>
        'Hotel Investment in Dubai is a great choice: the asking prices offer high ROI potential for buyers. Whether you are looking to buy a hotel room, suite, or even a whole hotel resort, you will be satisfied. Now, you can invest in luxurious hotel accommodations in Dubai\'s most sought-after locations.

    A wide range of options are available to buy, ranging from highly profitable deals on 4-star hotels to extravagant 5-star establishments and resorts. These properties offer huge investment potential with a captivating combination of modern amenities, stunning design, and top-notch service.

    For individuals seeking to establish themselves in Dubai\'s flourishing hospitality industry, these hotels present unparalleled opportunities for great investor deals.

    Whether you are an experienced hotelier looking to expand your business portfolio or a first-time investor seeking a reliable source of income, Dubai\'s Hotels for Sale are the perfect choice. With the city\'s reputation as a top tourist destination and business hub, investing in the hospitality sector is a smart move that promises high returns.',
        'image_link' => 'https://www.frankvito.com/wp-content/uploads/2024/08/section_5_resi-scaled.jpg'
    ],
    [
        'title' => 'Commercial space for sale in Dubai',
        'text' => "Are you looking to buy luxury commercial properties in Dubai? Look no further than Frank Vito, a real estate agent. With various properties for sale in Dubai's prime locations, like Business Bay, you can find the perfect office or retail space to meet your needs.

    These commercial properties for sale are not just spaces; they are opportunities. With a high ROI potential, they are a lucrative choice for any investor seeking a profitable deal. Whether you prioritize parking, a building close to the metro, or a spacious, ready office, Frank Vito will help you find an ideal solution.",
        'image_link' => "https://www.frankvito.com/wp-content/uploads/2024/08/section_6-scaled.jpg"
    ],
    [
        'title' => 'Office space for sale in Dubai',
        'text' => "This exceptional commercial space is for sale with a host of desirable features. This prime property boasts a terrace, perfect for creating an inviting and dynamic outdoor space. The ample parking spaces ensure convenience for both clients and staff.

    Situated on a high floor, this space offers a breathtaking view of the Burj Khalifa and a tranquil canal, enhancing the overall atmosphere and leaving a lasting impression on visitors. Designed as a shell and core unit, it empowers businesses to bring their unique vision to life with tailored customization. With a full floor at your disposal, this commercial space opens up possibilities for establishing a thriving business in the heart of Dubai's vibrant business landscape.",
        'image_link' => "https://www.frankvito.com/wp-content/uploads/2024/08/section_7-scaled.jpg"
    ],
    [
        'title' => 'Commercial land for sale in Dubai',
        'text' => "Whether you're interested in building a luxury hotel on the beachfront or developing a high-end residential complex, Frank Vito offers premium land for sale in Dubai. Each plot offers excellent investment opportunities in prime city locations. Benefit from freehold ownership, which means you can own the land outright and have the freedom to develop it as you wish. Our available Dubai land plots include spacious areas that are perfect for those looking to invest in a unique, high-value property.

    Choosing Ideal Plot
    Our diverse range of plots includes options in some of Dubai’s most desirable areas, like Palm Jumeirah and the Dubai Residence Complex. Each location offers a distinct advantage, ensuring your investment has the potential for a significant return on investment and perfectly aligns with your strategic goals.",
        'image_link' => 'https://www.frankvito.com/wp-content/uploads/2024/08/section_8-scaled.jpg'
    ],
    [
        'title' => 'Whole Buildings For Sale In Dubai',
        'text' => 'Investing in a full residential building in Dubai can be a great investment with the potential for high ROI. If you\'re looking for a full luxury building for sale, Frank Vito can help you find the perfect match.

    There are many options in the Dubai real estate market. With Frank Vito, you can review all of them: commercial buildings, fully rented buildings with resale potential, freehold buildings, new residential buildings in Dubai\'s strategic locations, and mixed-use buildings near golf courses.

    Are you looking for a full building for sale in Dubai? Get personalized expert advice and guidance tailored to your unique needs.',
        'image_link' => 'https://www.frankvito.com/wp-content/uploads/2024/08/section_9_updated.jpg'
    ]
];
// Slice the array into two arrays


$contactPage = getComponent("com_contact");
?>

<!-- Banner Section -->
<section class="banner-section">
    <img src="https://i.postimg.cc/HnbkMRJX/banner-A43.jpg" alt="Banner Image">
</section>

<!-- Detail Section -->
<section>
    <?php foreach ($Commercialdata as $data): ?>
        <div class="row item-guide g-0">
            <div class="col-sm-6">
                <div class="textbox">
                    <h3> <?php echo $data['title']; ?></h3>
                    <p> <?php echo $data['text']; ?></p>
                    <span class="date"></span>
                    <a href="" class="btn-more">

                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="imgbox">
                    <img src="<?php echo $data['image_link']; ?>" alt="<">
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<!-- Book 1v1 Consultation -->
<section class="invest-section book-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 column-text">
                <div class="textbox">
                    <p class="sub-title">Frank <span>vito</span></p>
                    <h3>Book a 1-1 <br>consultation</h3>
                    <p>Get a personalized expert advice and guidance tailored to your unique needs.</p>
                    <a href="<?php echo $contactPage->getLink(); ?>" class="btn-gradian">Book now</a>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="imgbox">
                    <img src="<?php echo $siteURL ?>images/consultation.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- News Letter section -->
<section class="newsletter-section py-5 mt-4">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-8 offset-2">
                <p class="sub-title">Frank<span>vito</span></p>
                <h2 class="big-title">Be The First to Know About New Project Launches in Dubai</h2>

                <div class="formbox">
                    <form>
                        <input type="email" name="email" placeholder="type your mail to receive the newsleter">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>