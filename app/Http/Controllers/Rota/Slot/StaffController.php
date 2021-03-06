<?php

namespace App\Http\Controllers\Rota\Slot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rota\Slot\Staff as SlotRota;

use App\Repositories\RotaInterface;

class StaffController extends Controller
{
    private $rota;

    public function __construct(RotaInterface $rota) 
    {
        $this->rota = $rota;
    }

    protected function get() {
        $data['rota'] = $this->rota->getActive();
        $data['rotaDays'] = $this->rota->getDays();
        $data['totalHours'] = $this->rota->getTotalHours();

        return view('slot-rota.staff', $data);
    }
}
