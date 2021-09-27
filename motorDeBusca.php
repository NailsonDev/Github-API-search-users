
<?php 

if(isset($_POST['search']))
{
    $user_search = $_POST['search'];
    $url="https://api.github.com/users/{$user_search}";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
   
    $html =json_decode(curl_exec($ch));
    curl_close($ch);


    if(isset($html->message) == 'Not Found')
    {
        echo 'Não achei esse usuário';
    }else{
        echo "
        <div class=\"user-avatar\">
            <img src=\"".$html->avatar_url."\" alt=\"\">
    
            <div class=\"user-info\">
                <h2>
                ".$html->name."
                </h2>
                <p>@".$html->login."</p>
            </div> <!-- end user-info -->
        </div> <!-- end user-avatar -->
    
        <div class=\"biography-user\">
            <div class=\"overlay-bio\">
                <p>".$html->bio."</p>
            </div>
    
            <div class=\"about-number\">
                <ul>
                    <li><a href=\"javascript:void(0)\" class=\"bg-green\">Seguidores: ".$html->followers."</a></li>
                    <li><a href=\"javascript:void(0)\" class=\"bg-orange\">Seguindo: ".$html->following."</a></li>
                    <li><a href=\"javascript:void(0)\" class=\"bg-blue\">Estrelas: ".$html->public_gists."</a></li>
                    <li><a href=\"javascript:void(0)\" class=\"bg-pink\">Repositórios: ".$html->public_repos."</a></li>
                </ul>
            </div>
    
            <div class=\"links-user\">
                <div class=\"title-link\">
                    <p>Links:</p>
                </div>
                <li><a href=\"#\">Github: <span>https://github.com/".$html->login."</span></a></li>
                <li><a href=\"#\">Site: <span>".$html->blog."</span></a></li>
                <li><a href=\"#\">Twitter: <span>@".$html->twitter_username."</span></a></li>
                
            </div>
    
            <div class=\"links-user\">
                <div class=\"title-link\">
                    <p>Informações:</p>
                </div>
                <li><a href=\"#\">Empresa: <small>".$html->company."</small></a></li>
                <li><a href=\"#\">Email: <small>".$html->email."</small></a></li>
                <li><a href=\"#\">Local: <small>".$html->location."</small></a></li>
            </div>
    
            <div class=\"dates-user\">
                <ul>
                    <li><p>Conta criada: <small>2 anos atrás</small></p></li>
                    <li><p>Última Atualização: <small>1 dia atrás</small></p></li>
                </ul>
            </div>
    
        </div>";
    }

    
  
}