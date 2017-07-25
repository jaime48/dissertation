<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    //
    protected $table = 'teams';

    public function league(){
        return $this->belongsTo('App\league');
    }
    public function members(){
        return $this->hasMany('App\teamMembers','team_id','id');
    }


    public static function dataRefine($teamInfo){

        $manager = users::find($teamInfo->manager_id);
        $teamInfo->manager_name = $manager->first_name.' '.$manager->last_name;
        switch($teamInfo->sports_type){
            case 1: $teamInfo->sports_type = 'football';break;
            case 2: $teamInfo->sports_type = 'basketball';break;
            case 3: $teamInfo->sports_type = 'baseball';break;
            case 4: $teamInfo->sports_type = 'ice hockey';break;

        }
        return $teamInfo;
    }
    
    
    public static function generateWord($teamInfo){
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();

// Adding Text element to the Section having font styled by default...
        $section->addText(
            htmlspecialchars(
                'Team Name : '.$teamInfo->name
            )
        );
        $section->addText(
            htmlspecialchars(
                'Sports Type :'.$teamInfo->sports_type
            )
        );
        $section->addText(
            htmlspecialchars(
                'Registered Region :'.$teamInfo->location
            )
        );
        $section->addText(
            htmlspecialchars(
                'Manager :'.$teamInfo->manager_name
            )
        );
        $section->addText(
            htmlspecialchars(
                'Contact :'.$teamInfo->contact
            )
        );
        $section->addText(
            htmlspecialchars(
                'Email :'.$teamInfo->email
            )
        );
        $section->addText(
            htmlspecialchars(
                'Created Time :'.$teamInfo->created_at
            )
        );
        $section->addText(
            htmlspecialchars(
                'Start Time :'.$teamInfo->startTime
            )
        );
        $section->addText(
            htmlspecialchars(
                'Remarks :'.$teamInfo->remarks
            )
        );

// Saving the document as HTML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('team_info.docx');

        $contentType = 'Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document;';
        header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT" );
        header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
        header ( "Cache-Control: no-cache, must-revalidate" );
        header ( "Pragma: no-cache" );
        header ( $contentType );

        header ( "Content-Disposition: attachment; filename=League_info.docx");
        readfile(public_path().'/team_info.docx');
        unlink(public_path().'/team_info.docx');

    }

}
