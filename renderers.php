<?php
/**
 * Created by PhpStorm.
 * User: christian
 * Date: 9/16/14
 * Time: 9:00 AM
 */

class theme_topdanmark_core_renderer extends theme_bootstrapbase_core_renderer{

    public function topdanmark_info_footer(){
        return '<footer id="page-footer">

        <div id="address-info">
            <p>Topdanmark A/S <br>
               Borupvang 4 <br>
               2750 Ballerup <br>
               Cvr-nr: 78040017</p>
        </div>

    </footer>';
    }

    public function login_info($withlinks = null){
        $login_info = parent::login_info($withlinks);

        $wrap_start = "";

        if(isloggedin()){
            if(isguestuser()){
                $wrap_start .= "<div id='is-guest'>";
            }else{
                $wrap_start .= "<div id='is-logged-in'>";
            }
        }else{
            $wrap_start .= "<div id='not-logged-in'>";
        }

        $wrap_end = "</div>";

        $wrapped_info = $wrap_start . $login_info . $wrap_end;

        return $wrapped_info;
    }

}