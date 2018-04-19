<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InvalidCredentialsErrorCollectionModel extends ErrorObjectCollectionModel implements InvalidCredentialsErrorCollection
{

    /**
     * @param InvalidCredentialsError $value
     * @return InvalidCredentialsErrorCollection
     */
    public function add($value) {
        if (!$value instanceof InvalidCredentialsError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InvalidCredentialsError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InvalidCredentialsError) {
            $data = $this->mapData(InvalidCredentialsError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
