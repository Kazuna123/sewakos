<?php

namespace App\Exports;

use App\Models\Kos;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KosExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Kos::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID', 'Nama', 'Slug', 'Alamat', 'Fasilitas', 'Tipe', 'Harga', 'Jarak', 'Luas Kamar', 'Status Kos', 'Created At', 'Updated At'
        ];
    }
}

