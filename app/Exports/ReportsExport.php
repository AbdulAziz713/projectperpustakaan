<?php

namespace App\Exports;

use App\Models\Report;
use App\Models\User;
use App\Models\Visit;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;


class ReportsExport implements FromView
{
    protected $bulan;
    protected $tipe;

    public function __construct($bulan, $tipe)
    {
        $this->bulan = $bulan;
        $this->tipe = $tipe;
    }

    public function view(): View
    {
        if ($this->tipe === 'anggota') {
            $reports = User::where('role', 'anggota')
                ->when($this->bulan, fn($query) => $query->whereMonth('created_at', $this->bulan))
                ->get();
        } elseif ($this->tipe === 'kunjungan') {
            $reports = Visit::when($this->bulan, fn($query) => $query->whereMonth('date', $this->bulan))
                ->get();
        } else {
            $reports = Report::when($this->bulan, fn($query) => $query->whereMonth('borrowed_at', $this->bulan))
                ->get();
        }

        return view('admin_daerah.reports.excel', [
            'reports' => $reports,
            'tipe' => $this->tipe
        ]);
    }
}
