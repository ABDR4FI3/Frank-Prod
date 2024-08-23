<?php
$investmentArray = array(
    "title" => "Guaranteed High Returns",
    "text" => "According to projections, investors can expect a 20% return in USD by flipping properties in Dubai. Many undervalued properties are waiting to be bought, and there is a simultaneous high demand for luxury properties, making Dubai the best city for flipping properties.\n\nApart from skipping market fluctuations during short-term ownership, flipping properties from the secondary market avoids the hassle of construction delays.\n\nProperty flipping is a particularly attractive investment opportunity for overseas investors because:",
    "sub1" => "Foreigners can legally buy, sell, and let properties in Dubai untethered by legal complications, property taxes, or stamp duties.",
    "sub2" => "The UAE boasts one of the highest returns on investment globally.",
    "image" => "https://www.frankvito.com/wp-content/uploads/2024/08/Guaranteed-High-Returns-Resized-scaled.jpg"
);

$second = array(
    "title" => "Transforming A Vision Into Reality Before and After",
    "Purchase Price:" => "AED 33 million",
    "DLD" => "AED 1.32 million",
    "Broker" => "AED 0.66 million",
    "Renovation" => "AED 13.00 million",
    "NOC" => "AED 1 million",
    "TotalInvestment" => "AED 33 million + AED 1.32 million + AED 14.00 million = AED 48.32 million - 32.71% NET within 14 months",
    "Returns" => "ROI = AED 65 million - AED 48.32 million = AED 16.68 million (NET) ROI ≈ 32.71%",
    "ResellValue" => "AED 65,000,000",
    "image" => "https://www.frankvito.com/wp-content/uploads/2024/08/Transforming-A-Vision-Into-Reality-Resized-scaled.jpg"
);
?>


<!-- Banner Section -->
<section class="banner-section">
    <img src="https://i.postimg.cc/HnbkMRJX/banner-A43.jpg" alt="Banner Image">
</section>

<!-- Detail 1  Section -->
<section class="detail-section">
    <div class="row item-guide g-0">
        <div class="col-sm-6">
            <div class="textbox">
                <h3><?php echo $investmentArray['title']; ?></h3>
                <p><?php echo $investmentArray['text']; ?></p>
                <div class="sub-text-container">
                    <div class="sub-text">
                        <p> <?php echo $investmentArray['sub1']; ?></p>
                    </div>
                    <div class="sub-text">
                        <p> <?php echo $investmentArray['sub2']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="imgbox">
                <img src="<?php echo $investmentArray['image']; ?>" alt="<">
            </div>
        </div>
    </div>
</section>

<!-- Background Image -->
<section class="a43-investment-strategy OverideImage">
    <div class="a43-content">
        <h2>Flip and fix in Dubai</h2>
        <p>
            To flip properties, you need to identify distressed or undervalued properties, navigate legal hassles, remodel the property, and understand the intricacies of a payment plan. We are committed to helping our clients through the entire process, from picking the perfect property to finally reselling it. Our team has one goal: to maximize your profits. We have a record of flipping properties and reaping significant yields in Dubai's prime locations, such as Dubai Marina, JBR, Palm Jumeirah, and MBR City. Over the last decade, we have:
        </p>
        <p>
            Cultivated in-depth knowledge of the Dubai real estate market and luxury property trends.
        </p>
        <p>
            Acquired peerless expertise in property investment.
        </p>
        <p>
            In collaboration with leading Italian designers, we have delivered magnificent remodels with premium furnishings and exquisite craftsmanship, sparking quick resales.
        </p>
        <a class="btn-gradian">Learn More</a>
    </div>
</section>
<!-- Detail 2  Section -->
<section>
    <div class="row item-guide g-0" style="flex-direction: row-reverse;">
        <div class="col-sm-6">
            <div class="textbox">
                <h3><?php echo $second['title']; ?></h3>
                <p class="overide">
                    <span class="Bold-text">Purchase Price:</span> <?php echo $second['Purchase Price:']; ?>
                </p>
                <p class="overide">
                    <span class="Bold-text">DLD Fee (4% of 33 million):</span> <?php echo $second['DLD'] ?>
                </p>
                <p class="overide">
                    <span class="Bold-text">Broker Fees (2 %):</span> <?php echo $second['Broker']; ?>
                </p>
                <p class="overide">
                    <span class="Bold-text">Renovation Cost:</span> <?php echo $second['Renovation']; ?>
                </p>
                <p class="overide">
                    <span class="Bold-text">NOC Fee:</span> <?php echo $second['NOC']; ?>
                </p>
                <p class="overide">
                    <span class="Bold-text">Total Investment:</span><br><?php echo $second['TotalInvestment']; ?>
                </p>
                <p class="overide">
                    <span class="Bold-text">Returns:</span><br><?php echo $second['Returns']; ?>
                </p>
                <p class="overide">
                    <span class="Bold-text">Resell Value:</span><br><?php echo $second['ResellValue']; ?>
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="imgbox">
                <img src="<?php echo $second['image']; ?>" alt="<">
            </div>
        </div>
    </div>
</section>


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