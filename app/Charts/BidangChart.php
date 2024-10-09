<?php

namespace App\Charts;

use App\Models\Programdarwis;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BidangChart
{
    protected $chartbid;

    public function __construct(LarapexChart $chartbid)
    {
        $this->chartbid = $chartbid;
    } 

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $program = Programdarwis::get();
        $data = [
        $program->where('bidang_id', 1)->count(),
        $program->where('bidang_id', 2)->count(),
        $program->where('bidang_id', 3)->count(),
        ];
        $bidang = [
            'Pelaksanaan Pembangunan',
            'Pembinaan Masyarakat',
            'Pemberdayaan Masyarakat'
        ];

        return $this->chartbid->donutChart()
            ->setTitle('Bidang')
            ->addData($data)
            ->setWidth(600)
            ->setHeight(600)
            ->setLabels($bidang);
    }
}
