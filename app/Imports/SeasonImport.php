<?php

namespace App\Imports;

use App\Season;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SeasonImport implements ToModel, WithHeadingRow
{
    public function model(array $races)
    {
        $season = New Season;
        $points = $season->getRankings($races['australian_gp'])+$season->getRankings($races['bahrain_gp'])+
            $season->getRankings($races['chinese_gp'])+$season->getRankings($races['azerbaijan_gp'])+
            $season->getRankings($races['spanish_gp'])+$season->getRankings($races['monaco_gp'])+
            $season->getRankings($races['canadian_gp'])+$season->getRankings($races['french_gp'])+
            $season->getRankings($races['austrian_gp'])+$season->getRankings($races['britich_gp'])+
            $season->getRankings($races['german_gp'])+$season->getRankings($races['hungarian_gp'])+
            $season->getRankings($races['belgian_gp'])+$season->getRankings($races['italian_gp'])+
            $season->getRankings($races['singapore_gp'])+$season->getRankings($races['russian_gp'])+
            $season->getRankings($races['japanese_gp'])+$season->getRankings($races['mexican_gp'])+
            $season->getRankings($races['united_states_gp']) + $season->getRankings($races['brazilian_gp'])+
            $season->getRankings($races['abu_dhabi_gp']);

        return Season::updateOrCreate(['driver_id' => $races['driver_no']], ['points' => $points]);
    }
}
