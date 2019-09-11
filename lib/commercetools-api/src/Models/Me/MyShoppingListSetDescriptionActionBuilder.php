<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListSetDescriptionAction>
 */
final class MyShoppingListSetDescriptionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): MyShoppingListSetDescriptionAction
    {
        return new MyShoppingListSetDescriptionActionModel(
            $this->action,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description)
        );
    }

    public static function of(): MyShoppingListSetDescriptionActionBuilder
    {
        return new self();
    }
}
