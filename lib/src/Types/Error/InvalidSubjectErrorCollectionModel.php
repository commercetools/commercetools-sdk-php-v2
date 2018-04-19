<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class InvalidSubjectErrorCollectionModel extends ErrorObjectCollectionModel implements InvalidSubjectErrorCollection
{

    /**
     * @param InvalidSubjectError $value
     * @return InvalidSubjectErrorCollection
     */
    public function add($value) {
        if (!$value instanceof InvalidSubjectError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return InvalidSubjectError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof InvalidSubjectError) {
            $data = $this->mapData(InvalidSubjectError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
