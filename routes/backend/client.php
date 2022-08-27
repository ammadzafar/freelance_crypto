<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\clientController;




Route::get('/index',[clientController::class,'index'])->name('index');
Route::get('/job-seekers',[clientController::class,'jobSeekers'])->name('job-seekers');
Route::get('/job-seeker-detail',[clientController::class,'jobSeekerDetail'])->name('job-seeker.detail');
Route::get('/all-jobs',[clientController::class,'allJobs'])->name('all-jobs');
Route::get('/job/post',[clientController::class,'jobPost'])->name('post.job');
Route::get('/job/skill',[clientController::class,'jobSkill'])->name('job.skill');
Route::get('/job/scope',[clientController::class,'jobScope'])->name('job.scope');
Route::get('/job/est-time',[clientController::class,'jobTime'])->name('job.time');
Route::get('/job/rate',[clientController::class,'jobRate'])->name('job.rate');
Route::get('/job/detail',[clientController::class,'jobDetail'])->name('job.detail');
