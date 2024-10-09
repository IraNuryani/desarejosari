<?php

namespace App\Charts;

use App\Models\Programdarwis;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ProgramChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $tahun = Programdarwis::selectRaw('Year(dimulai) as year, count(*) as count')->groupByRaw('Year(dimulai)')->get();
        foreach ($tahun as $data) {
            $dataTahun[] = $data->year;
            $datacount[] = $data->count;
        }
        return $this->chart->lineChart()
            ->setTitle('Program Pokdarwis')
            ->setSubtitle('Program')
            ->addData('Program', $datacount)
            ->setWidth(800)
            ->setHeight(400)
            ->setXAxis($dataTahun)
            ->setGrid();
    }
}
