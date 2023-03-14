<?php

namespace App\Exports;

use App\Models\pendaftar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use Illuminate\Contracts\View\View;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PendaftarExport implements FromCollection, WithHeadings, ShouldAutoSize, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pendaftar::all();
    }

    public function headings(): array
    {
        return [
            'Nomor',
            'Nama',
            'Kelas',
            'Nomor HP',
            'Alamat',
            'Ekstra Pertama',
            'Ekstra Kedua',
            'Ekstra Ketiga',
            'Konfirmasi Pertama',
            'Konfirmasi Kedua',
            'Konfirmasi Ketiga',
            'Created_at',
            'Update_at'
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 6, // untuk kolom Nomor
            'B' => 30, // untuk kolom Nama
            'C' => 15, // untuk kolom Kelas
            'D' => 15, // untuk kolom Nomor hp
            'E' => 50, // untuk kolom Alamat
            'F' => 15, // untuk kolom Ekstra Pertama
            'G' => 15, // untuk kolom Ekstra Kedua
            'H' => 15, // untuk kolom Ekstra Ketiga
            'I' => 20, // untuk kolom Konfirmasi Pertama
            'J' => 20, // untuk kolom Konfirmasi Kedua
            'K' => 20, // untuk kolom Konfirmasi Ketiga
            'L' => 30, // untuk kolom Created_at
            'M' => 30, // untuk kolom Update_at
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            'A1:M1' => [
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
