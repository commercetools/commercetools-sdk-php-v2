<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyPaymentSetMethodInfoCustomFieldAction>
 */
final class MyPaymentSetMethodInfoCustomFieldActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * If <code>value</code> is provided, it is set for the field defined by <code>name</code>.
     * Trying to remove a field that does not exist will fail with an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
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

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): MyPaymentSetMethodInfoCustomFieldAction
    {
        return new MyPaymentSetMethodInfoCustomFieldActionModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): MyPaymentSetMethodInfoCustomFieldActionBuilder
    {
        return new self();
    }
}
