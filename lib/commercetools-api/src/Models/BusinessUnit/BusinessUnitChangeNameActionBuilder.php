<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitChangeNameAction>
 */
final class BusinessUnitChangeNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**
     * <p>New name to set.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }


    public function build(): BusinessUnitChangeNameAction
    {
        return new BusinessUnitChangeNameActionModel(
            $this->name
        );
    }

    public static function of(): BusinessUnitChangeNameActionBuilder
    {
        return new self();
    }
}
