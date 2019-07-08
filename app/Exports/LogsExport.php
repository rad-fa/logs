<?php

namespace App\Exports;

use App\Log;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class LogsExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    /**
     * @return array
     */

//    public function registerEvents(): array
//    {
//        $styleArray=[
//            'font' => [
//                'bold'=>true,
//                ]
//        ];
//        return[
//            AfterSheet::class=>function(AfterSheet $event)use($styleArray){
//                $event->sheet->getStyle('A1:K1')->applyFromArry($styleArray);
//            },
//        ];
//
//    }



    public function collection()
    {
        $start=\request('start');
        $end=\request('end');

        $log=Log::whereDate('created_at','>=',$start)
                ->whereDate('created_at','<=',$end)->get();

        //Delete From Query-------------------------------
//        $log=Log::where('id','>=','430')
//                ->where('id','<=','435')->delete();
        //------------------------------------------------

        return $log ;
    }

    public function headings(): array
    {
        return [
            'ID',
            'IP',
            'Method',
            'URL',
            'User ID',
            'Request',
            'Browser',
            'OS',
            'Error Code',
            'Updated at',
            'Created at',
        ];
    }
}
