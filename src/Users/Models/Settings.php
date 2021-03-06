<?php
namespace Users\Models;

class Settings extends \Dsc\Mongo\Collections\Settings
{

    public $general = array(
        'profiles' => array(
            'enabled' => 1,
        ),        
        'registration' => array(
            'enabled' => 1,
            'username' => 1,
            'dual' => 0,
            'action' => 'email_validation'
        ),
    	'login' => array(
    		'auto_login_token_lifetime' => 1440
    	),
    );

    public $social = array(
    	'providers' => array(
    	    'Facebook' => array(
                'enabled' => 0,
    	        'keys' => array(
    	    	    'id' => null,
    	            'secret' => null
    	        )
    	    ),
    	    'Twitter' => array(
    	        'enabled' => 0,
    	        'keys' => array(
    	            'key' => null,
    	            'secret' => null
    	        )
    	    ),    	    
    	    'Google' => array(
    	        'enabled' => 0,
    	        'keys' => array(
    	            'id' => null,
    	            'secret' => null
    	        )
    	    ),    	    
    	    'LinkedIn' => array(
    	        'enabled' => 0,
    	        'keys' => array(
    	            'key' => null,
    	            'secret' => null
    	        )
    	    ),   
    	    'GitHub' => array(
    	        'enabled' => 0,
    	        'keys' => array(
    	            'id' => null,
    	            'secret' => null
    	        ),
    	        'wrapper' => array(
    	        	'path' => null,
    	            'class' => null
    	        )
    	    ),
    	    'PaypalOpenID' => array(
    	        'enabled' => 0,
    	        'keys' => array(
    	            'id' => null,
    	            'secret' => null
    	        )
    	    ),    	    
    	    'Instagram' => array(
    	        'enabled' => 0,
    	        'keys' => array(
    	            'id' => null,
    	            'secret' => null
    	        ),
    	        'wrapper' => array(
    	        	'path' => null,
    	            'class' => null
    	        )
    	    ),
    	 )
    );

    protected $__type = 'users.settings';

    public function __construct( $source = array(), $options = array() )
    {
        parent::__construct( $source, $options );
        
        $this->set('social.providers.GitHub.wrapper.path', \Base::instance()->get('PATH_ROOT') . 'vendor/hybridauth/hybridauth/additional-providers/hybridauth-github/Providers/GitHub.php' );
        $this->set('social.providers.GitHub.wrapper.class', 'Hybrid_Providers_GitHub');
        $this->set('social.providers.PaypalOpenID.wrapper.path', \Base::instance()->get('PATH_ROOT') . 'vendor/hybridauth/hybridauth/additional-providers/hybridauth-paypal-openid/Providers/PaypalOpenID.php' );
        $this->set('social.providers.PaypalOpenID.wrapper.class', 'Hybrid_Providers_PaypalOpenID');
        $this->set('social.providers.Instagram.wrapper.path', \Base::instance()->get('PATH_ROOT') . 'vendor/hybridauth/hybridauth/additional-providers/hybridauth-instagram/Providers/Instagram.php' );
        $this->set('social.providers.Instagram.wrapper.class', 'Hybrid_Providers_Instagram');
        
        return $this;
    }

    public function isSocialLoginEnabled($provider=null)
    {
        if (!class_exists('Hybrid_Auth'))
        {
            // no social profiles are allowed unless there is Hybrid Auth
            return false;
        }
        
        if (!empty($provider)) {
            $provider = strtolower($provider);
        }
        
        $result = false;
        switch ($provider)
        {
            case 'facebook':
                $result = $this->{'social.providers.Facebook.enabled'} && $this->{'social.providers.Facebook.keys.id'} && $this->{'social.providers.Facebook.keys.secret'};
                break;
            case 'twitter':
                $result = $this->{'social.providers.Twitter.enabled'} && $this->{'social.providers.Twitter.keys.key'} && $this->{'social.providers.Twitter.keys.secret'};
                break;
            case 'linkedin':
                $result = $this->{'social.providers.LinkedIn.enabled'} && $this->{'social.providers.LinkedIn.keys.key'} && $this->{'social.providers.LinkedIn.keys.secret'};
                break;
            case 'google':
                $result = $this->{'social.providers.Google.enabled'} && $this->{'social.providers.Google.keys.id'} && $this->{'social.providers.Google.keys.secret'};
                break;
            case 'github':
                $result = $this->{'social.providers.GitHub.enabled'} && $this->{'social.providers.GitHub.keys.id'} && $this->{'social.providers.GitHub.keys.secret'};
                break;
            case 'paypalopenid':
                $result = $this->{'social.providers.PaypalOpenID.enabled'} && $this->{'social.providers.PaypalOpenID.keys.id'} && $this->{'social.providers.PaypalOpenID.keys.secret'};
                break;
            case 'instagram':
                $result = $this->{'social.providers.Instagram.enabled'} && $this->{'social.providers.Instagram.keys.id'} && $this->{'social.providers.Instagram.keys.secret'};
                break;
            case null:
                // are ANY of the social providers enabled?
                $enabled = $this->enabledSocialProviders();
                if (!empty($enabled)) {
                	$result = true;
                }
                break;
            default: 
        $event = \Dsc\System::instance()->trigger('onLoginProviderEnabled', array('provider' => $provider, 'result'=>null ));
        $result = $event->getArgument('result');    
                break;
        }
        
        return $result;
    }

    public function enabledSocialProviders()
    {
        $providers = array();
        foreach ((array) $this->{'social.providers'} as $network => $opts)
        {
            if ($this->isSocialLoginEnabled(strtolower($network)))
            {
            	$providers[] = strtolower($network);
            }
        }
        return $providers;
    }
}
