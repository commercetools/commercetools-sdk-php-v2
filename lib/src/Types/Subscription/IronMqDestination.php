<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

interface IronMqDestination extends Destination
{
    const FIELD_URI = 'uri';

    /**
     * @return string
     */
    public function getUri();

    /**
     * @param string $uri
     * @return $this
     */
    public function setUri(string $uri);

}
