<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PatternComponent>
 */
final class PatternComponentBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $type;

    /**

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }


    public function build(): PatternComponent
    {
        return new PatternComponentModel(
            $this->type
        );
    }

    public static function of(): PatternComponentBuilder
    {
        return new self();
    }
}
