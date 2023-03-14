<?php

namespace App\Exports;

use App\Models\jurnalekstra;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use Illuminate\Contracts\View\View;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
 

class JurnalExport implements FromCollection, WithHeadings, ShouldAutoSize, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return jurnalekstra::all();
    }

    public function headings(): array
    {
        return [
            'Nomor',
            'Ekstra',
            'Pengisi Jurnal',
            'Tanggal',
            'Kegiatan',
            'Created_at',
            'Update_at'
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 6, // untuk kolom Nomor
            'B' => 20, // untuk kolom Ekstra
            'C' => 30, // untuk kolom Pengisi Jurnal
            'D' => 15, // untuk kolom Tanggal
            'E' => 50, // untuk kolom Kegiatan
            'F' => 30, // untuk kolom Created_at
            'G' => 30, // untuk kolom Update_at
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
