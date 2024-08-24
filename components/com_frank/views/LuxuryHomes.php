<?php
$first = array(
    "title" => "Luxury Homes",
    "text" => "Explore residential real estate with the most prestigious secondary market properties in Dubai. Opulence personified, Dubai is the perfect homestead for those pursuing luxury. The city’s upscale real estate market is a treasure trove of exclusive villas and apartments, embodying comfort, sophistication, and finesse.\nOur portfolio is a testament to the diversity of luxury living in Dubai. We offer highly coveted properties in the city’s most prestigious neighborhoods, catering to every taste and preference. Whether you seek a tranquil beachfront getaway, a cozy apartment, or a glamorous penthouse, we have the perfect luxury home waiting for you.",
    "image" => "https://www.frankvito.com/wp-content/uploads/2024/08/Luxury-homes-para-1-scaled.jpg"
);

$second = array(
    "title" => "",
    "text" => "Frank Vito has a decade of luxury brokerage and real estate investment experience under his belt. With a keen understanding of Dubai’s luxury property market and investment expertise, Frank and his team are committed to offering bespoke services for your real estate aspirations to come to fruition.",
    "image" => "https://www.frankvito.com/wp-content/uploads/2024/08/Luxury-homes-para-2-scaled.jpg"
);
?>

<!-- Banner Section -->
<section class="banner-section">
    <img src="https://i.postimg.cc/HnbkMRJX/banner-A43.jpg" alt="Banner Image">
</section>

<!-- Detail 1  Section -->
<section class="invest-section opportunity py-5">
    <div class="container">
        <div class="row" style="flex-direction: row-reverse;">
            <div class="col-sm-6">
                <div class="imgbox">
                    <img src="<?php echo $first['image']; ?>" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="textbox">
                    <h3><?php echo $first['title']; ?></h3>
                    <p><?php echo $first['text']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blurred-section">
    <div class="image-container">
        <img class="a43_images" src="https://www.frankvito.com/wp-content/uploads/2020/03/side-image01.jpg" alt="Image 1">
        <img class="a43_images" src="https://www.frankvito.com/wp-content/uploads/2024/07/passive.jpg" alt="Image 2">
        <img class="a43_images" src="https://www.frankvito.com/wp-content/uploads/2024/07/flipping.jpg" alt="Image 3">
        <img class="a43_images" src="https://www.frankvito.com/wp-content/uploads/2024/07/apartments_for_sale.jpg" alt="Image 4">
    </div>
</section>

<section class="invest-section opportunity py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="imgbox">
                    <img src="<?php echo $second['image']; ?>" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="textbox">
                    <h3><?php echo $second['title']; ?></h3>
                    <p><?php echo $second['text']; ?></p>
                </div>
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