<?php

namespace App\Imports;

use App\Player;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PlayerImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        return Player::firstOrCreate(
            ['id' => $row['driver_no']],
            ['name' => $row['driver_name']]
        );
    }
}
