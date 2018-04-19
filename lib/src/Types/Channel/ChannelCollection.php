<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Common\ResourceCollection;


interface ChannelCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return Channel
     */
    public function at($index);

    /**
     * @return Channel
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Channel
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Channel
     */
    public function byId($id);

}
