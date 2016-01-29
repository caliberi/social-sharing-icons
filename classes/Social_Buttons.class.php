<?

class Social_Buttons {

    private static function get_url(){
        $current_url = explode("?", $_SERVER['REQUEST_URI']);
        return $current_url[0] ;
    }


    public static function facebook_sdk($app_id){
        echo "<script>
              window.fbAsyncInit = function() {
                  FB.init({
                      appId      : '$app_id',
                      xfbml      : true,
                      version    : 'v2.4'
                  });
              };

              (function(d, s, id){
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) {return;}
                      js = d.createElement(s); js.id = id;
                      js.src = \"//connect.facebook.net/en_GB/sdk.js\";
                      fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
              </script>";
    }


    public static function build($args = null){

        $network = $args['network'];
        $class = '';
        $link = '#';
        $target = '';
        $link_action = '';
        $data_params = '';

        $share_url = '';


        if(isset($args['style'])){
            $class .= $args['style'] . ' ';
        }

        if(isset($args['invert'])){
            $class .= $network . '-invert';
        } else {
            $class .= $network;
        }

        if(isset($args['link'])){
            $link = $args['link'];

            if($args['new_window'] == true){
                $target .= 'target="_blank"';
            }

        } else {
            $link_action = ' share';
            $share_url = 'data-url="' . self::get_url() . '"';

        }

        foreach($args as $key => $value){
            $exp_key = explode('-', $key);
            if($exp_key[0] == 'data'){
                $data_params .=  $key . '="' . $value . '" ';
            }
        }

        if($network == 'whatsapp'){
            $data_params .=  'data-href="' . $link . '"';
            $link = 'whatsapp://send';
        }


        if($network == 'facebook' && $link == 'share'){
            $target .= 'target="_blank"';

            $link = 'http://www.facebook.com/sharer/sharer.php?u=' . urlencode($args['url']);
        }

        if($network == 'facebook' && $link == 'custom-share'){
            $link = '#';
            $link_action = ' custom-share';
            $data_params .= ' data-title="' . $args['title'] . '"';
            $data_params .= ' data-caption="' . $args['caption'] . '"';
            $data_params .= ' data-description="' . $args['description'] . '"';
            $data_params .= ' data-url="' . $args['url'] . '"';
            $data_params .= ' data-image="' . $args['image_url'] . '"';


        }

        ?>
        <a class="cal-social<?=$link_action?>" href="<?=$link?>" <?=$target?> <?=$share_url?> <?=$data_params?>>
            <span class="<?=$class?>">
                <i class="fa fa-<?=$network?>"></i>
            </span>
        </a>
        <?


    }



}