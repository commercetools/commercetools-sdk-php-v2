<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/

namespace Commercetools\Base;

use Psr\Http\Message\ResponseInterface;

interface MapperInterface
{
    /**
     * @template T
     * @psalm-param class-string<T> $type
     * @psalm-return T
     */
    public function mapResponseToClass(string $type, ResponseInterface $response);
}