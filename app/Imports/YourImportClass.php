<?php

namespace App\Imports;

use App\Models\VehicleStock;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
class YourImportClass implements ToModel ,WithStartRow
{
    public function startRow(): int
    {
        return 2; // Skip the first row and start from the second row
    }
    public function model(array $row)
    {
        return new VehicleStock([
            'vehiclecategory' => $row[1],
            'series' => $row[2],
            'vehiclemodal' => $row[3],
            'color' => $row[4],
            'frameno' => $row[5],
            'engineno' => $row[6],
            'status' => $row[7],
        ]);
    }
}
