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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/template', function () {
    return view('template');
});

Route::any('questionnaire',function(){
    return view('evaluation');
})->middleware('multiAuth');

Route::post('questionnaireSubmit','evaluationController@questionnaireSubmit');

Route::any('dupCheck','evaluationController@dupCheck');


Route::get('/template1', function () {
    return view('template1');
});

Route::get('/template3', function () {
    return view('template3');
});

Route::get('about', 'evaluationController@averageStats');

Route::get('/mail','Controller@mail');



Route::get('/register', function () {
    return view('register');
});

Route::any('/login','usersController@login');

Route::any('/clearSessionCookie','usersController@clearSessionCookie');
Route::any('/clearCookie','usersController@clearCookie');

Route::any('/getSession','usersController@getSession');
Route::any('/getCookie','usersController@getCookie');

Route::any('/registersuccess','usersController@register');
Route::any('/verifyemail','usersController@verifyEmail');
Route::any('/checkPassword','usersController@checkPassword');
Route::any('/changePassword','usersController@changePassword');
Route::any('/changepasswordsuccess',function(){
    return view('changepasswordsuccess');
});
Route::any('/viewemail',function(){
    return view('email');
});

Route::any('/settings','usersController@getSettings');
Route::any('/error{error}',function($error){
    return view('error')->with('error',$error);
})->name('error');


Route::any('/sendVerificationCode','usersController@sendVerificationCode');

Route::any('/generateRandomPassword','usersController@generateRandomPassword');


Route::any('/league','leagueController@getLeagueInfo')->name('league')->middleware('multiAuth');

Route::any('/downLoadFile/{file}',[
    'as'=>'downLoadFile',
    'uses'=>'leagueController@downLoadFile'
]);

Route::any('/createLeague', function(){
    return view('league.createLeague');
});

Route::post('/createLeagueSubmit','leagueController@createLeague');

Route::any('/exportInfo{infoId}',[
    'as'=>'exportInfo',
    'uses'=>'leagueController@exportInfo'
]);

Route::any('/leagueView',function(){
    return view('league.league');
});
/*******************team routes**********************/
Route::any('teams','teamsController@teamsInfo');

Route::any('getSelectTeam','teamsController@getSelectTeam');

Route::any('fetchTeams','teamsController@fetchTeams');

Route::any('getCurrentTeam','teamsController@getCurrentTeam');

Route::post('addTeam','teamsController@addTeam');

Route::any('deleteSelectedTeam','teamsController@deleteSelectedTeam');

/*******************members routes**********************/
Route::any('members','teamMembersController@getMembersInfo');

Route::any('teamMembers','teamMembersController@getTeamMembersInfo');

/************************statistics**********************************/
Route::any('statistics','statisticsController@statistics');

Route::any('team.statistics',function(){
    return view('team.statistics');
});

Route::any('teamStats', 'statisticsController@teamStats');

Route::any('playerStats', 'statisticsController@playerStats');

Route::any('matchUpdate','statisticsController@listMatches');

Route::any('/updateMatch','statisticsController@updateMatchInfo');

Route::any('/UpdateTeamScore','statisticsController@UpdateTeamScore');

Route::any('/UpdatePlayerStats','statisticsController@UpdatePlayerStats');


/*******************calendar routes**********************/
Route::any('/calendar', function(){
    return view('calendar.sample');
});

Route::any('getCalendarList','jqcalendarController@testCalendar');

Route::any('addCalendar','jqcalendarController@addCalendar');

Route::any('deleteCalendar','jqcalendarController@deleteCalendar');

Route::any('updateCalendar','jqcalendarController@updateCalendar');

Route::any('editCalendar','jqcalendarController@editCalendar');

Route::any('editCalendarInfo','jqcalendarController@editCalendarInfo');

Route::any('updateCalendarInfo','jqcalendarController@updateCalendarInfo');

Route::post('addMatch','jqcalendarController@addMatch');

/*****************************Ranking***************************/

Route::any('ranking','teamsController@getRankingInfo');

Route::any('testUser','usersController@test');

/*****************************Notification***************************/

Route::any('getNotifications','notificationsController@getNotifications');

Route::any('setRead', 'notificationsController@setRead');


/*****************************team***************************/

Route::any('team.team', 'teamsController@getTeamInfo')->name('team.team')->middleware('multiAuth');

Route::any('team.createTeam', function(){
    return view('team.createTeam');
});

Route::any('/exportTeamInfo{infoId}',[
    'as'=>'exportTeamInfo',
    'uses'=>'teamsController@exportTeamInfo'
]);

Route::any('team.members','teamsController@getMembersInfo')->name('team.members');

Route::post('team.createTeamSubmit','teamsController@createTeam');

Route::any('team.getMemberInfo','teamsController@getMemberInfo');

Route::post('team.editMemberInfo','teamsController@editMemberInfo');

Route::any('team.deleteSelectedMember','teamsController@deleteSelectedMember');

Route::any('team.getSelectMember','teamsController@getSelectMember');

Route::any('team.addMembers','teamsController@addNewMembers');

Route::any('team.calendar', function(){
    return view('team.calendar');
});

Route::post('updateTeamCalendarInfo','jqcalendarController@updateTeamCalendarInfo');

Route::any('team.addTeamCalendar','jqcalendarController@addTeamCalendar');

Route::any('deleteTeamCalendar','jqcalendarController@deleteTeamCalendar');

Route::any('updateTeamCalendar','jqcalendarController@updateTeamCalendar');

Route::any('editCalendar','jqcalendarController@editCalendar');

Route::any('editCalendarInfo','jqcalendarController@editCalendarInfo');

Route::any('team.teamMembers','teamMembersController@getTeamMembersInfoForTeam');


Route::any('team.ranking','teamsController@getTeamRankingInfo');

/*****************************social***************************/

Route::any('social','infoController@showInfo')->middleware('multiAuth');

Route::any('social.posts','postsController@getAllPosts')->name('social')->middleware('multiAuth');

Route::any('getComments', 'commentsController@getComments');

Route::any('submitComment', 'commentsController@submitComment');

Route::any('social.createPost', function() {
    return view('social.createNew');
});

Route::post('social.createPostSubmit','postsController@createPostSubmit');

Route::any('social.home','infoController@showInfo');

Route::any('social.editInfo','infoController@editInfo');

Route::any('info.uploadAvatar','infoController@uploadAvatar');

Route::any('seeProfile','infoController@seeProfile');


Route::any('unfriend','connectionsController@unfriend');

Route::any('/test1',function(){
    return view('test1');
});

Route::any('likeOrDislike', 'postsController@likeOrDislike');

Route::any('/test',function(){


    return view('test');
});



