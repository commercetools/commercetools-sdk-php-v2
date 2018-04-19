<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\DestinationModel;

class IronMqDestinationModel extends DestinationModel implements IronMqDestination
{
    const DISCRIMINATOR_VALUE = 'IronMQ';

    /**
     * @var string
     */
    protected $uri;

    /**
     * @return string
     */
    public function getUri()
    {
        if (is_null($this->uri)) {
            $value = $this->raw(IronMqDestination::FIELD_URI);
            $value = (string)$value;
            $this->uri = $value;
        }
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return $this
     */
    public function setUri(string $uri)
    {
        $this->uri = (string)$uri;

        return $this;
    }

}
