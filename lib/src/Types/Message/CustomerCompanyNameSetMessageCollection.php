<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CustomerCompanyNameSetMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return CustomerCompanyNameSetMessage
     */
    public function at($index);

    /**
     * @return CustomerCompanyNameSetMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerCompanyNameSetMessage
     */
    public function map($data, $index);
}
