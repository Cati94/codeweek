<?php

namespace App\Imports;

use App\Event;
use App\ResourceItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithLimit;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class ResourcesLearnImport extends DefaultValueBinder implements WithCustomValueBinder, ToModel, WithHeadingRow, WithLimit
{

    public function parseDate($date)
    {
        $arr = explode(",", $date);
        array_shift($arr);
        return implode($arr);
    }


    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {


        if (!isset($row["name"])) {
            return null;
        }
        Log::info($row);

        //if (is_null($row) || is_null($row["name"])) return null;

        //Log::info($row);
        //dd($row);
        //dd(implode(",",$arr));
        //dd(Carbon::parse($this->parseDate($row["start_date"]))->toDateTimeString());
//dd(Carbon::createFromFormat("d/m/Y",$row["start_date"])->toDateTimeString());

        $item = new ResourceItem(
            [
                'name' => $row["name"],
                'description' => $row["short_description"],
                'source' => $row["url"],
                'thumbnail' => $row["thumbnail"],
                'learn' => true,
            ]
        );

        $item->save();

        $item->attachCategories($row["category"]);
        $item->attachLanguages($row["languages"]);
        $item->attachLevels($row["level"]);
        $item->attachProgrammingLanguages($row["programming_language"]);
        $item->attachTypes($row["type_of_resource"]);



        return $item;
    }


    /**
     * @return int
     */
    public function limit(): int
    {
        return 40;
    }
}
