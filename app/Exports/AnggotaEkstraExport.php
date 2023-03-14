<?php

namespace App\Exports;

use App\Models\anggotaekstra;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use Illuminate\Contracts\View\View;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AnggotaEkstraExport implements FromCollection, WithHeadings, ShouldAutoSize, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return anggotaekstra::all();
    }

    public function headings(): array
    {
        return [
            'Nomor',
            'Nama',
            'Kelas',
            'Ekstra Pertama',
            'Ekstra Kedua',
            'Ekstra Ketiga',
            'Created_at',
            'Update_at'
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 6, // untuk kolom Nomor
            'B' => 25, // untuk kolom Nama
            'C' => 15, // untuk kolom Kelas
            'D' => 15, // untuk kolom Ekstra Pertama
            'E' => 15, // untuk kolom Ekstra Kedua
            'F' => 15, // untuk kolom Ekstra Ketiga
            'G' => 30, // untuk kolom Created_at
            'H' => 30, // untuk kolom Update_at
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            'A1:H1' => [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                ],
            ],

            'A' => [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
            ],
        ];
    }
}
