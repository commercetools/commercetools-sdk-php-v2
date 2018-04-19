<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Common\ResourceCollection;


interface TypeCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return Type
     */
    public function at($index);

    /**
     * @return Type
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Type
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Type
     */
    public function byId($id);

}
