Route::post('/login', [AuthController::class, 'login']);
Route::get('/books', [BookController::class, 'index']);
Route::post('/borrow', [TransactionController::class, 'borrow']);
