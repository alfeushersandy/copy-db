<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Scanlog;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendance = Attendance::limit(10)->get();
        return view('attendance.index', [
            'attendance' => $attendance
        ]);
    }

    public function copy()
    {
        $attendance = Attendance::limit(10)->get();
        foreach ($attendance as $item) {
            Scanlog::create([
                'sn' => $item->sn,
                'scan_date' => $item->scan_date,
                'pin' => $item->pin,
                'verifymode' => $item->verifymode,
                'inoutmode' => $item->inoutmode,
                'reserved' => $item->reserved,
                'work_code' => $item->work_code,
                'att_id' => $item->att_id
            ]);
        }
    }
}
