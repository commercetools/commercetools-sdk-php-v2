<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentSetMethodInfoNameActionModel extends JsonObjectModel implements PaymentSetMethodInfoNameAction
{
    public const DISCRIMINATOR_VALUE = 'setMethodInfoName';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?LocalizedString
     */
    protected $name;


    public function __construct(
        LocalizedString $name = null
    ) {
        $this->name = $name;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If not provided, the name is unset.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentSetMethodInfoNameAction::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
}
