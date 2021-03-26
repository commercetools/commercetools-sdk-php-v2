<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<UnpublishChange>
 */
final class UnpublishChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }


    public function build(): UnpublishChange
    {
        return new UnpublishChangeModel(
            $this->change
        );
    }

    public static function of(): UnpublishChangeBuilder
    {
        return new self();
    }
}
