<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Base;

use stdClass;

interface JsonObject extends \JsonSerializable
{
    /**
     * @psalm-return scalar|array<int|string, mixed>|JsonObject|JsonObjectCollection|null
     */
    public function get(string $field);

    /**
     * @psalm-param stdClass|array<string, mixed>|null $data
     * @psalm-return static
     *
     * @param null|mixed $data
     */
    public static function of($data = null);

    /**
     * @psalm-param array<string, mixed> $data
     * @psalm-return static
     */
    public static function fromArray(array $data = []);

    /**
     * @psalm-param ?stdClass $data
     * @psalm-return static
     */
    public static function fromStdClass(stdClass $data = null);
}
