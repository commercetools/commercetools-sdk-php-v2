<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeGroupChangeNameAction>
 */
final class AttributeGroupChangeNameActionBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * <p>New value to set.
     * Must not be empty.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): AttributeGroupChangeNameAction
    {
        return new AttributeGroupChangeNameActionModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name
        );
    }

    public static function of(): AttributeGroupChangeNameActionBuilder
    {
        return new self();
    }
}
