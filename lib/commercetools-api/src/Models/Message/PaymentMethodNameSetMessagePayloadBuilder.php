<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodNameSetMessagePayload>
 */
final class PaymentMethodNameSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $oldName;

    /**
     * <p>Name of the Payment Method after the <a href="ctp:api:type:PaymentMethodSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Name of the Payment Method before the <a href="ctp:api:type:PaymentMethodSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getOldName()
    {
        return $this->oldName instanceof LocalizedStringBuilder ? $this->oldName->build() : $this->oldName;
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
     * @param ?LocalizedString $oldName
     * @return $this
     */
    public function withOldName(?LocalizedString $oldName)
    {
        $this->oldName = $oldName;

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

    /**
     * @deprecated use withOldName() instead
     * @return $this
     */
    public function withOldNameBuilder(?LocalizedStringBuilder $oldName)
    {
        $this->oldName = $oldName;

        return $this;
    }

    public function build(): PaymentMethodNameSetMessagePayload
    {
        return new PaymentMethodNameSetMessagePayloadModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->oldName instanceof LocalizedStringBuilder ? $this->oldName->build() : $this->oldName
        );
    }

    public static function of(): PaymentMethodNameSetMessagePayloadBuilder
    {
        return new self();
    }
}
