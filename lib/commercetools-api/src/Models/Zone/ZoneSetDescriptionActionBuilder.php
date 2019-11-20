<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ZoneSetDescriptionAction>
 */
final class ZoneSetDescriptionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $description;

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): ZoneSetDescriptionAction
    {
        return new ZoneSetDescriptionActionModel(
            $this->description
        );
    }

    public static function of(): ZoneSetDescriptionActionBuilder
    {
        return new self();
    }
}
