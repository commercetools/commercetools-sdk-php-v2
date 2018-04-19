<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface InvalidSubjectErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return InvalidSubjectError
     */
    public function at($index);

    /**
     * @return InvalidSubjectError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InvalidSubjectError
     */
    public function map($data, $index);
}
