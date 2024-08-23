<?php
$investmentOptions = [
    [
        'title' => 'Passive Investing',
        'description' => 'Passive investing is a surefire route to getting lucrative returns. We have curated a multifaceted model that guarantees our investors sizable dividends with minimal risks. Our passive management package offers maximized returns, immunity against market fluctuations, and regular payouts.',
        'image' => 'https://www.frankvito.com/wp-content/uploads/2024/08/Passive-investing-scaled.jpg'
    ],
    [
        'title' => 'Get Annual Returns of 20%',
        'description' => 'With over a decade of experience, we have cultivated unmatched investment expertise and a roster of trusting clients. So, your wealth is in safe hands. With a minimum principle of £100,000, you can earn as much as 20% annual return and a 5% payout every quarter.',
        'image' => 'https://www.frankvito.com/wp-content/uploads/2024/08/Annual-return-20_-scaled.jpg'
    ],
    [
        'title' => 'Property Flips',
        'description' => 'Equipped with research and analytical prowess, we strategically invest in off-plan developments, distressed properties, and old sites needing renovation.',
        'image' => 'https://www.frankvito.com/wp-content/uploads/2024/08/Property-Flips-scaled.jpg'
    ],
    [
        'title' => 'Trade Finance',
        'description' => 'Shielded by robust risk management protocols, we will partake in the international market by providing capital for global trade transactions.',
        'image' => 'https://www.frankvito.com/wp-content/uploads/2024/08/Trade-Finance-scaled.jpg'
    ],
    [
        'title' => 'Cryptocurrency',
        'description' => 'With over a decade of cryptocurrency trading under our belt, coupled with cutting-edge technology and great market insights, we will navigate the volatile cryptocurrency market to acquire substantial returns.',
        'image' => 'https://www.frankvito.com/wp-content/uploads/2024/08/Cryptocurrency-scaled.jpg'
    ],
    [
        'title' => 'A flexible Investment',
        'description' => 'Our plan empowers passive investors to withdraw their capital or extend the yearly contract. There are no limiting contracts, only profits. By investing with Frank Vito, you get unmatched expertise, seasoned with a decade of high-end real estate experience and investment consulting acumen. Frank and his team provide clients with tailored approaches and focused guidance every step of the way, armed with a keen understanding of the UAE investment landscape and industry trends. There\'s one chief goal - to maximize returns. Frank Vito is committed to making your investment journey rewarding. Book a consultation today.',
        'image' => 'https://www.frankvito.com/wp-content/uploads/2024/08/A-flexible-Investment-scaled.jpg'
    ]
];
$firstArray = array_slice($investmentOptions, 0, 2);
$secondArray = array_slice($investmentOptions, 2);
$contactPage = getComponent("com_contact");
?>
<!-- Banner Section -->
<section class="banner-section">
    <img src="https://i.postimg.cc/HnbkMRJX/banner-A43.jpg" alt="Banner Image">
</section>

<!-- Detail 1  Section -->
<section class="detail-section">
    <?php foreach ($firstArray as $data): ?>
        <div class="row item-guide g-0">
            <div class="col-sm-6">
                <div class="textbox">
                    <h3> <?php echo $data['title']; ?></h3>
                    <p> <?php echo $data['description']; ?></p>
                    <span class="date"></span>
                    <a href="" class="btn-more">

                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="imgbox">
                    <img src="<?php echo $data['image']; ?>" alt="<">
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<!-- Background Image -->
<section class="a43-investment-strategy">
    <div class="a43-content">
        <h2>Passive Investment Strategy</h2>
        <p>Reap the threefold benefits of trading property, finance, and cryptocurrency – stability, profitability, and growth potential.</p>
        <a class="btn-gradian">Learn More</a>
    </div>
</section>
<section class="detail-section">
    <?php foreach ($secondArray as $data): ?>
        <div class="row item-guide g-0">
            <div class="col-sm-6">
                <div class="textbox">
                    <h3> <?php echo $data['title']; ?></h3>
                    <p> <?php echo $data['description']; ?></p>
                    <span class="date"></span>
                    <a href="" class="btn-more">

                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="imgbox">
                    <img src="<?php echo $data['image']; ?>" alt="<">
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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