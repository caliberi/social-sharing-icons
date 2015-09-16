<?

class Social_Buttons {

    private static function get_url(){
        $current_url = explode("?", $_SERVER['REQUEST_URI']);
        return $current_url[0] ;
    }


    public static function build($args = null){

        $network = $args['network'];
        $class = '';
        $link = '#';
        $link_action = '';
        $share_url = '';


        if(isset($args['rounded'])){
            $class .= 'rounded ';
        }

        if(isset($args['round'])){
            $class .= 'round ';
        }

        if(isset($args['invert'])){
            $class .= 'facebook-invert';
        } else {
            $class .= 'facebook';
        }

        if(isset($args['link'])){
            $link = $args['link'];
        } else {
            $link_action = ' share';
            $share_url = ' data-url="' . self::get_url() . '"';
        }


        ?>
        <a class="cal-social<?=$link_action?>" href="<?=$link?>"<?=$share_url?>>
            <span class="<?=$class?>">
                <i class="fa fa-<?=$network?>"></i>
            </span>
        </a>
        <?


    }



}