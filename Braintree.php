<?php
/**
 * @author Ganesh <ganesh.alkurn@gmail.com>
 */

namespace alkurn\braintree;

use yii\base\Component;
use yii\base\InvalidConfigException;

class Braintree extends Component
{
    public $environment;
    public $merchantId;
    public $publicKey;
    public $privateKey;
    public $gateway;

    public function init()
    {
        if (!$this->environment) {
            throw new InvalidConfigException('Environment is required');
        }
        if (!$this->merchantId) {
            throw new InvalidConfigException('Merchant ID is required');
        }
        if (!$this->publicKey) {
            throw new InvalidConfigException('Public Key is required');
        }
        if (!$this->privateKey) {
            throw new InvalidConfigException('Private Key is required');
        }

        \Braintree_Configuration::environment($this->environment);
        \Braintree_Configuration::merchantId($this->merchantId);
        \Braintree_Configuration::publicKey($this->publicKey);
        \Braintree_Configuration::privateKey($this->privateKey);

        $this->setupConfig();
    }

    /**
     *v setup a config
     */
    public function setupConfig()
    {
        $this->gateway = new \Braintree_Gateway([
            'environment' => $this->environment,
            'merchantId' => $this->merchantId,
            'publicKey' => $this->publicKey,
            'privateKey' => $this->privateKey
        ]);
    }
}
