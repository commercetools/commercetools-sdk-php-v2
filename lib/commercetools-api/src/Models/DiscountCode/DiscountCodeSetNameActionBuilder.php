<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeSetNameAction>
 */
final class DiscountCodeSetNameActionBuilder implements Builder
{
    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * <p>If the <code>name</code> parameter is not included, the field will be emptied.</p>.
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): DiscountCodeSetNameAction
    {
        return new DiscountCodeSetNameActionModel(
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name)
        );
    }

    public static function of(): DiscountCodeSetNameActionBuilder
    {
        return new self();
    }
}
