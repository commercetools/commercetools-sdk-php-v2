<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Base;

interface Mapper
{
    /**
     * @param string $class
     * @param mixed $data
     * @return mixed
     */
    public function mapData(string $class, $data);

    /**
     * @param string $class
     * @param $discriminator
     * @param array $subTypes
     * @param array $data
     * @return mixed
     */
    public function resolveDiscriminator(string $class, $discriminator, array $subTypes, array $data): string;
}
