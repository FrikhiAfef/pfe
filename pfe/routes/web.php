<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// front controller
Route::group(['namespace'=>'utilisateur'],function() {
    Route::get('/','HomeController@index' );
    Route::get('emission/{emission?}', 'EmissionController@emission')->name('emission');
    Route::get('evenement/{evenement?}', 'EvenementController@evenement')->name('evenement');
    Route::get('programmes/{programme?}', 'ProgrammeController@programme')->name('programme');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::get('equipe/{equipe?}', 'EquipeController@equipe')->name('equipe');
    Route::get('digitalMediaLab', 'MedialabController@index')->name('DigitalMediaLab');
    Route::get('apropos/{apropo?}', 'ApropoController@apropo')->name('apropos');
    Route::get('podcast/{podcast?}', 'PodcastController@podcast')->name('podcast');
    Route::get('actualite/{actualite?}', 'ActualiteController@actualite')->name('actualite');
    Route::get('connexion', 'ConnexionController@index');
    Route::get('inscription', 'InscriptionController@index')->name('inscription');
    Route::get('galerie/{galerie?}', 'GalerieController@galerie')->name('galerie');
    Route::get('JumpInIncubator/{jump?}', 'JumpinController@jump')->name('jumpin');
} );




//compte de porteure
Route::get('porteure/home', function () {
    return view('porteure.home');
});

//compte de l'entreprise
Route::get('entreprise/home', function () {
    return view('entreprise.home');
});

//les routes de admin=responsable
Route::group(['namespace'=>'responsable\radio'],function() {
    //route de l'actualité
    Route::resource('admin/actualite','ActualiteController');
    //route d'a propos
    Route::resource('admin/apropo','AproposController');
    //route de contact
    Route::resource('admin/contact','ContactController');
    //route de l'emission
    Route::resource('admin/emission','EmissionsController');
    //route de l'equipe
    Route::resource('admin/equipe','EquipeController');
    //route de l'evenement
    Route::resource('admin/evenement','EvenementController');
    //route de galerie
    Route::resource('admin/galerie','GaleriesController');
    //route de jum in incubator
    Route::resource('admin/jumpin','JumpinController');
    //route de digital media lab
    Route::resource('admin/medialab','MedialabController');
    //route de podcast
    Route::resource('admin/podcast','PodcastController');
    //route de programme
    Route::resource('admin/programme','ProgrammesController');
} );

//les routes de superadmin
Route::group(['namespace'=>'admin'],function() {
    //route de home
    Route::get('admin/home','HomeController@index')->name('admin.home');
    //route de entreprise
    Route::resource('admin/entreprise','EntrepriseController');
    //route de equipe
    Route::resource('admin/equipe','EquipeController');
    //route de l'investisseur
    Route::resource('admin/investisseur','InvestisseurController');
    //route de partenaire
    Route::resource('admin/partenaire','PartenaireController');
    //route de permission
    Route::resource('admin/permission','PermissionController');
    //route de porteur
    Route::resource('admin/porteur','PorteurController');
    //route de role
    Route::resource('admin/role','RoleController');
    //route d'authentification
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('superadmin.login');
    Route::post('admin-login', 'Auth\LoginController@login');

} );
//route de l'interface de utilisateur
Route::resource('admin/administrateur','AdministrateurController');
//route de l'interface de responsable
Route::resource('responsable','ResponsableController');
























Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
