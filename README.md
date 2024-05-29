

## customer Preferences 

here lets go with customer preferences with notifications sitting  language , currency and others.
 my logic in this task  first of all  i working with Repository Design Pattern the make layer from model and database .
and build a base  interface  that could be implemented in the classes, you will find the logic in app\http\repo .
 ## Validation Request 
create class for validation and check the input that come from frontend side , i made validated data to customer preferences 
we have two classes for validation store and update and you will find it in this  app\ http \ request.
## Resource
make class resource to handle the data to array

## docker 
we use laravel sail package to handle files docker images and containers .
## Localization 
I use the translated system from laravel in lang dir and we store in two files ar.json en.json depends on what is your default 
language.
## currency 
i made middleware to handle the change of currency also depend on what is your default currency in your website or app
you will find the middleware in app\http\middleware.
