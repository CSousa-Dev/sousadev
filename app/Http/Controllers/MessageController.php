<?php 
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Message;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ContactFormRequest;
use Symfony\Component\HttpFoundation\Request;

class MessageController extends Controller
{
    public function store(ContactFormRequest  $contactFormRequests)
    {    
        $ipAddress = $contactFormRequests->ip();
        $recentMessagesCount = Message::where('ip_address', $ipAddress)
            ->where('created_at', '>=', Carbon::now()->subMinute())
            ->count();

        if ($recentMessagesCount >= 3) {
            return response()->json([
                'status' => false,
                'message' => 'Você atingiu o limite de mensagens por minuto.'
            ], 429);
        }

        $existingMessage = Message::where('ip_address', $ipAddress)
            ->where('message', $contactFormRequests->message)
            ->first();

        if ($existingMessage) {
            return response()->json([
                'status' => false,
                'errors' => [
                    'message' => 'Mensagem já enviada anteriormente.'
                ]
            ], 422);
        }

        DB::beginTransaction();  
        try {
            $message = new Message();
            $message->name = $contactFormRequests->name;
            $message->email = $contactFormRequests->email;
            $message->phone = $contactFormRequests->phone;
            $message->message = $contactFormRequests->message;
            $message->ip_address = $contactFormRequests->ip();
            $message->save();
            DB::commit();
            return response()->json([
                'status' => true,
                'message' => 'Mensagem salva com sucesso.'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'Erro ao salvar mensagem.'
            ]);
        }

        
    }
}