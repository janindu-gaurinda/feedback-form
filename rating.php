<style>
  i {
    color: yellow !important;
}

</style>
<?php
function displayStarRating($rating) {
    $stars = '';
    $maxRating = 5; // Change this if your rating scale is different
    $roundedRating = round($rating); // Round the rating to the nearest whole number

    for ($i = 1; $i <= $maxRating; $i++) {
        if ($i <= $roundedRating) {
            $stars .= '<i style="color: yellow;">&#9733;</i>'; // Yellow star for a filled rating
        } else {
            $stars .= '<i style="color: gray;">&#9734;</i>'; // Gray star for an empty rating
        }
    }

    return $stars;
}


?>
