<?php
$nft = array(
    "nft1.jpg",
    "nft2.jpg",
    "nft3.jpg",
    "nft4.jpg",
    "nft5.jpg",
    "nft6.jpg",
    "nft7.jpg",
    "nft8.jpg",
    "nft9.jpg",
    "nft10.jpg"
);
?>

<div class="container-fluid g-0 pt-md-5 pt-2 pb-md-4 pb-5">
    <div class="main-carousel" data-flickity='{ "wrapAround": true, "autoPlay": 4000, "imagesLoaded": true, "initialIndex": 1, "prevNextButtons": false}'>
        <?php
        foreach($nft as $n){
            ?>
                <div class="carousel-cell">
                    <img src="img/carousel/<?php echo $n;?>" alt="NFTs Freaky Future" title="NFTs Freaky Future">
                </div>
            <?php
        }
        ?>
       
    </div>
</div>
