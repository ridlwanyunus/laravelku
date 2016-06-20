# Laravelku

Laravelku adalah sebuah simple aplikasi untuk melakukan create, read, update dan delete untuk nama hotel

## Bug Aplikasi

### Update
Terdapat masalah untuk melakukan update. Masalahnya adalah variabel binding. Route untuk mengoperdata dari view bootstrap update.blade.php kedalam file AppController

yang diharapkan 
Route::get('/update/{id_hotel}', AppController@update);


### Delete
Terdapat masalah untuk melakukan delete. Masalahnya adalah variabel binding. Route untuk mengoperdata dari view bootstrap update.blade.php kedalam file AppController

yang diharapkan 
Route::get('/delete/{id_hotel}', AppController@delete);


