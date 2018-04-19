<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface InvalidCredentialsErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return InvalidCredentialsError
     */
    public function at($index);

    /**
     * @return InvalidCredentialsError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InvalidCredentialsError
     */
    public function map($data, $index);
}
