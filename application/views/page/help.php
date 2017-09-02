<div class="text-center">
    <h1><?= $title ?></h1>
    <p class="lead">
        Modular Extensions installation.
    </p>
</div>
<div class="row">
    <div class="col-md-12 col-lg-8 ml-lg-auto mr-lg-auto">
        <ol>
            <li>Start with a clean CI install</li>
            <li>Set <code>$config[‘base_url’]</code> correctly for your installation</li>
            <li>Access the URL <code>/index.php/welcome</code> => shows Welcome to CodeIgniter</li>
            <li>Download HMVC extension <a href="https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc">https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc</a></li>
            <li>Drop Modular Extensions third_party files into the <code>application/third_party</code> directory</li>
            <li>Drop Modular Extensions core files into <code>application/core</code>, the <code>MY_Controller.php</code>
                file is not required unless you wish to create your own controller extension
            </li>
            <li>Access the URL <code>/index.php/welcome</code> => shows Welcome to CodeIgniter</li>
            <li>Create module directory structure <code>application/modules/welcome/controllers</code></li>
            <li>Move controller <code>application/controllers/welcome.php</code> to
                <code>application/modules/welcome/controllers/welcome.php</code>
            </li>
            <li>Access the URL <code>/index.php/welcome</code> => shows Welcome to CodeIgniter</li>
            <li>Create directory <code>application/modules/welcome/views</code></li>
            <li>Move view <code>application/views/welcome_message.php</code> to
                <code>application/modules/welcome/views/welcome_message.php</code>
            </li>
            <li>Access the URL <code>/index.php/welcome</code> => shows Welcome to CodeIgniter</li>
            <li>[This project] Run migration <code>http://your.server.com/yourapp/migrate</code></li>
        </ol>
        <p>
            You should now have a running Modular Extensions installation with example data. If some error occurred like
            <code>Call to undefined method MY_Loader::_ci_object_to_array()</code>,
            you can add this function to third party library file <code>application/third_party/MX/Loader.php</code>
        </p>
        <pre>
    protected function _ci_object_to_array($object) {
        return is_object($object) ? get_object_vars($object) : $object;
    }
        </pre>
    </div>
</div>