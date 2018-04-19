<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\Extension\HttpDestinationAuthenticationCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AzureFunctionsAuthenticationCollectionModel extends HttpDestinationAuthenticationCollectionModel implements AzureFunctionsAuthenticationCollection
{

    /**
     * @param AzureFunctionsAuthentication $value
     * @return AzureFunctionsAuthenticationCollection
     */
    public function add($value) {
        if (!$value instanceof AzureFunctionsAuthentication) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AzureFunctionsAuthentication
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AzureFunctionsAuthentication) {
            $data = $this->mapData(AzureFunctionsAuthentication::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
