<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Description of the Zone.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param ?string $description
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
