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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/candidat/step1', function () {
    return view('auth.inscription-candidat');
});

Auth::routes(['verify'=>true]);

Route::get('/recruteur/step1/{id}', 'RecruteurController@edit')->name('recruteur.edit')->middleware('recruteur');
Route::get('/recruteur/update/{id}', 'RecruteurController@update')->name('recruteur.update')->middleware('recruteur');
Route::get('/recruteur/home/{id}', 'RecruteurController@index')->name('recruteur.index')->middleware('recruteur');

Route::get('/recruteur/publier_offre', 'OffreController@create')->name('offre.create')->middleware('recruteur');
Route::post('/recruteur/store', 'OffreController@store')->name('offre.store')->middleware('recruteur');
Route::get('/recruteur/findVilleName/{id}','OffreController@findVilleName')->name('offre.findVilleName')->middleware('recruteur');
Route::get('/recruteur/findDiplomeName/{id}','OffreController@findDiplomeName')->name('offre.findDiplomeName')->middleware('recruteur');
Route::get('/recruteur/historique_annonces/','OffreController@findOffre')->name('offre.findOffre')->middleware('recruteur');
Route::get('/recruteur/liste-candidates/','NotificationController@list')->name('notification.list')->middleware('recruteur');


Route::get('/candidat/step1/{id}', 'CandidatController@edit')->name('candidat.edit')->middleware('candidat');
Route::get('/candidat/update/{id}', 'CandidatController@update')->name('candidat.update')->middleware('candidat');
Route::get('/candidat/home/{id}', 'CandidatController@index')->name('candidat.index')->middleware('candidat');


Route::get('/candidat/professionnel/', 'ProfessionnelController@index')->name('professionnel.index')->middleware('candidat');
Route::post('/candidat/professionnel', 'ProfessionnelController@save')->name('professionnel.save')->middleware('candidat');
Route::get('/candidat/competence/', 'CompetenceController@index')->name('competence.index')->middleware('candidat');
Route::post('/candidat/competence', 'CompetenceController@save')->name('competence.save')->middleware('candidat');
Route::get('/candidat/offres', 'NotificationController@view')->name('notification.view')->middleware('candidat');
Route::get('/candidat/accept_offres/{id}', 'NotificationController@accept')->name('notification.accept')->middleware('candidat');

Route::get('/candidat/academique/', 'AcademiqueController@index')->name('academique.index')->middleware('candidat');
Route::post('/candidat/academique', 'AcademiqueController@save')->name('academique.save')->middleware('candidat');

//Route::get('/candidat/langue/{id}', 'LangueController@index')->name('langue.index')->middleware('candidat');
Route::post('/candidat/langue', 'LangueController@save')->name('langue.save')->middleware('candidat');

Route::get('/candidat/document/', 'DocumentController@index')->name('document.index')->middleware('candidat');
Route::post('/candidat/document', 'DocumentController@save')->name('document.save')->middleware('candidat');

Route::get('/candidat/visualiserCV/', 'CvController@index')->name('cv.index')->middleware('candidat');
Route::get('/candidat/exportPDF', 'CvController@export')->name('cv.index')->middleware('candidat');


Route::get('/candidat/profil/', 'CandidatController@profil')->name('candidat.profil')->middleware('candidat');


Route::get('autocomplete_poste', 'PosteController@autocomplete')->name('autocomplete_poste');
Route::get('autocomplete_competence', 'CompetenceController@autocomplete')->name('autocomplete_competence');
Route::get('autocomplete_etablissement', 'EtablissementController@autocomplete')->name('autocomplete_etablissement');
Route::get('autocomplete_specialite', 'SpecialiteController@autocomplete')->name('autocomplete_specialite');


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/accueil', 'HomeController@view')->name('accueil');
Route::get('/admin/dashboard', 'AdminDashboardController@index')->name('index');

