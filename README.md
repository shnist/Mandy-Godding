Mandy-Godding
=============

Wordpress site for Mandy Godding's Theatre Arts


## Adverts

Adverts are contained in an overlay. Inside the overlay there is an image with the
ID of advert. This will trigger the javascript behaviour for the advert.

	<div class="overlay"></div>
	<div class="overlayContainer">
		<a href="#" class="close">Close</a>
		<img id="advert" src="" alt="">
	</div>


## Adding ftp credentials 

* Create a `.ftppass` file in the project root
* Credentials will look roughly like the following:

```
{
  "mandyGoddingKey": {
    "username": "username1",
    "password": "password1"
  }
}
```