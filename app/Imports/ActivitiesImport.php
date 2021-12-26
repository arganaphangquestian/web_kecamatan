<?php

namespace App\Imports;

use App\Models\Activity;
use App\Models\ActivityType;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Illuminate\Support\Collection;

class ActivitiesImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    private $type;

    function __construct($type) {
        $this->type = $type;
    }

    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }

    public function model(array $row)
    {
        return new Activity([
            'name' => $row[0],
            'amount' => $row[1],
            'village' => $row[2],
            'activity_type_id' => ActivityType::where('slug', "=", $this->type),
            'volume' => $row[3],
            'founding' => $row[4],
            'start' => $row[5],
        ]);
    }
}
