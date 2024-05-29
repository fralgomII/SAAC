namespace App\Http\Controllers;

use App\Models\MovimientoCredito;
use Illuminate\Http\Request;

class MovimientosCreditosController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'credito_id' => 'required|exists:creditos,id',
            'cuota' => 'required|integer',
            // Otras validaciones...
        ]);

        // Crear el movimiento de crédito
        MovimientoCredito::create([
            'credito_id' => $request->credito_id,
            'cuota' => $request->cuota,
            // Otros campos...
        ]);

        // Retornar respuesta adecuada, como una redirección o un JSON de éxito
    }

    // Otros métodos del controlador...
}