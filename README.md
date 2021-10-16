# image_qualifier
Script to qualify (score) a large list of images (giving them a set of points to rank them)

- Shows one by one all the images in the folder "images", you can rate them using a slider
- Then in the main page it shows the ranking
- When going back to the rate mechanism it only shows the images which are still not rated
- Clear ratings calling db/delete.php (caution, all data will be lost)
- Run from the console with
php -S localhost:8000 