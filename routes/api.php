use App\Http\Controllers\Api\OrcamentoController;

Route::post('/orcamentos', [OrcamentoController::class, 'store']); 