<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Extension\ExtensionDestinationModel;

class ExtensionHttpDestinationModel extends ExtensionDestinationModel implements ExtensionHttpDestination {
    const DISCRIMINATOR_VALUE = 'HTTP';

    /**
     * @var string
     */
    protected $url;
    /**
     * @var HttpDestinationAuthentication
     */
    protected $authentication;

    /**
     * @return string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            $value = $this->raw(ExtensionHttpDestination::FIELD_URL);
            $value = (string)$value;
            $this->url = $value;
        }
        return $this->url;
    }
    /**
     * @return HttpDestinationAuthentication
     */
    public function getAuthentication()
    {
        if (is_null($this->authentication)) {
            $value = $this->raw(ExtensionHttpDestination::FIELD_AUTHENTICATION);
            $resolvedClass = $this->resolveDiscriminator(HttpDestinationAuthentication::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->authentication = $value;
        }
        return $this->authentication;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->url = (string)$url;

        return $this;
    }
    /**
     * @param HttpDestinationAuthentication $authentication
     * @return $this
     */
    public function setAuthentication(HttpDestinationAuthentication $authentication)
    {
        $this->authentication = $authentication;

        return $this;
    }

}
