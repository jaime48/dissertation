<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class league extends Model
{
    //
    protected $table = 'league';

    public function teams(){
        return $this->hasMany('App\teams');
    }

    public static function dataRefine($infoId){
        $leagueInfo = league::find($infoId);
        $manager = users::find($leagueInfo->manager_id);
        $leagueInfo->manager_name = $manager->first_name.' '.$manager->last_name;
        switch($leagueInfo->sports_type){
            case 1: $leagueInfo->sports_type = 'football';break;
            case 2: $leagueInfo->sports_type = 'basketball';break;
            case 3: $leagueInfo->sports_type = 'baseball';break;
            case 4: $leagueInfo->sports_type = 'ice hockey';break;

        }
        return $leagueInfo;
    }

    public static function generateWord($leagueInfo){
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();

// Adding Text element to the Section having font styled by default...
        $section->addText(
            htmlspecialchars(
                'League Name : '.$leagueInfo->league_name
            )
        );
        $section->addText(
            htmlspecialchars(
                'Sports Type :'.$leagueInfo->sports_type
            )
        );
        $section->addText(
            htmlspecialchars(
                'Registered Region :'.$leagueInfo->registered_region
            )
        );
        $section->addText(
            htmlspecialchars(
                'Manager :'.$leagueInfo->manager_name
            )
        );
        $section->addText(
            htmlspecialchars(
                'Contact :'.$leagueInfo->contact
            )
        );
        $section->addText(
            htmlspecialchars(
                'Email :'.$leagueInfo->email
            )
        );
        $section->addText(
            htmlspecialchars(
                'Created Time :'.$leagueInfo->created_at
            )
        );
        $section->addText(
            htmlspecialchars(
                'Start Time :'.$leagueInfo->start_time
            )
        );
        $section->addText(
            htmlspecialchars(
                'End Time :'.$leagueInfo->end_time
            )
        );
        $section->addText(
            htmlspecialchars(
                'Remarks :'.$leagueInfo->remarks
            )
        );

// Saving the document as HTML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('League_info.docx');
        $contentType = 'Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document;';
        header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT" );
        header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
        header ( "Cache-Control: no-cache, must-revalidate" );
        header ( "Pragma: no-cache" );
        header ( $contentType );
        header ( "Content-Disposition: attachment; filename=League_info.docx");
        readfile(public_path().'/League_info.docx');
        unlink(public_path().'/League_info.docx');
    }
}
