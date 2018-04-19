<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Common\ResourceCollection;


interface CustomerCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return Customer
     */
    public function at($index);

    /**
     * @return Customer
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Customer
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Customer
     */
    public function byId($id);

}
