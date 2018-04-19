<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ErrorResponseCollectionModel extends JsonCollection implements ErrorResponseCollection
{

    /**
     * @param ErrorResponse $value
     * @return ErrorResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ErrorResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ErrorResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ErrorResponse) {
            $data = $this->mapData(ErrorResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
