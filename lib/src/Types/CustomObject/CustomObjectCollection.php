<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\Common\ResourceCollection;


interface CustomObjectCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return CustomObject
     */
    public function at($index);

    /**
     * @return CustomObject
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomObject
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return CustomObject
     */
    public function byId($id);

}
