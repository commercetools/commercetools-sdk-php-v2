<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\Common\ResourceCollection;


interface CustomerGroupCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return CustomerGroup
     */
    public function at($index);

    /**
     * @return CustomerGroup
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroup
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return CustomerGroup
     */
    public function byId($id);

}
